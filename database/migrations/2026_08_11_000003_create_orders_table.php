<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number', 30)->unique();
            $table->string('customer_name');
            $table->string('email');
            $table->string('country')->nullable();
            $table->string('website')->nullable();
            $table->string('plan_key');
            $table->string('plan_name');
            $table->decimal('plan_price', 10, 2);
            $table->json('addons')->nullable();
            $table->decimal('addon_total', 10, 2)->default(0);
            $table->decimal('total', 10, 2);
            $table->string('currency', 10)->default('USD');
            $table->string('payment_method', 30)->nullable();
            $table->string('billing_first_name')->nullable();
            $table->string('billing_last_name')->nullable();
            $table->string('billing_address')->nullable();
            $table->string('billing_city')->nullable();
            $table->string('billing_postal_code')->nullable();
            $table->string('status', 20)->default('pending');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
