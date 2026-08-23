<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('status')->default('created');

            $table->unsignedInteger('total_price');

            $table->string('delivery_region');
            $table->string('delivery_city');
            $table->string('delivery_street');
            $table->string('delivery_house');

            $table->string('delivery_entrance')->nullable();
            $table->string('delivery_apartment')->nullable();

            $table->string('delivery_postcode');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
