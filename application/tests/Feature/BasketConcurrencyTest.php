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
            callback: fn (Process $process) => $process->getExitCode(),
            array: $processes
        );
    }

    private function startAddProcess(Basket $basket, Product $product): Process
    {
        $process = new Process(
            command: [
                PHP_BINARY,
                'artisan',
                'basket:add-test',
                (string) $basket->id,
                (string) $product->id,
                '1',
            ],
            cwd: base_path()
        );

        $process->start();

        return $process;
    }

    public function test_parallel_add_does_not_exceed_pizza_limit(): void
    {
        $user = User::factory()->create(attributes: [
            'role' => 'guest',
        ]);

        $basket = Basket::create([
            'user_id' => $user->id,
        ]);

        $product = Product::factory()->create(attributes: [
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

        sort(array: $exitCodes);

        $item = BasketItem::query()
            ->where(column: 'basket_id', operator: $basket->id)
            ->where(column: 'product_id', operator: $product->id)
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
