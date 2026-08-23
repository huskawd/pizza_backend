<?php

namespace Tests\Feature;

use App\Models\Basket;
use App\Models\BasketItem;
use App\Models\Product;
use App\Models\User;
use Symfony\Component\Process\Process;
use Tests\TestCase;

class BasketConcurrencyTest extends TestCase
{
    private ?int $basketId = null;
    private ?int $productId = null;
    private ?int $userId = null;

    /**
     * @return array<int, int|null>
     */
    private function waitForProcesses(Process ...$processes): array
    {
        foreach ($processes as $process) {
            $process->wait();
        }

        return array_map(
            fn (Process $process) => $process->getExitCode(),
            $processes
        );
    }

    private function startAddProcess(Basket $basket, Product $product): Process
    {
        $process = new Process(
            [
                PHP_BINARY,
                'artisan',
                'basket:add-test',
                (string) $basket->id,
                (string) $product->id,
                '1',
            ],
            base_path()
        );

        $process->start();

        return $process;
    }

    public function test_parallel_add_does_not_exceed_pizza_limit(): void
    {
        $user = User::factory()->create([
            'role' => 'guest',
        ]);

        $basket = Basket::create([
            'user_id' => $user->id,
        ]);

        $product = Product::factory()->create([
            'category' => 'pizza',
        ]);

        BasketItem::create([
            'basket_id' => $basket->id,
            'product_id' => $product->id,
            'quantity' => 9,
        ]);

        $this->basketId = $basket->id;
        $this->productId = $product->id;
        $this->userId = $user->id;

        $processes = [
            $this->startAddProcess($basket, $product),
            $this->startAddProcess($basket, $product),
        ];

        $exitCodes = $this->waitForProcesses(...$processes);

        sort($exitCodes);

        $item = BasketItem::query()
            ->where('basket_id', $basket->id)
            ->where('product_id', $product->id)
            ->firstOrFail();

        $this->assertSame(10, $item->quantity);
        $this->assertSame([0, 1], $exitCodes);
    }

    protected function tearDown(): void
    {
        if ($this->basketId !== null) {
            BasketItem::where('basket_id', $this->basketId)->delete();
            Basket::whereKey($this->basketId)->delete();
        }

        if ($this->productId !== null) {
            Product::whereKey($this->productId)->delete();
        }

        if ($this->userId !== null) {
            User::whereKey($this->userId)->delete();
        }

        parent::tearDown();
    }
}
