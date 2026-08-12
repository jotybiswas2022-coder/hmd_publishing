<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('site_services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category')->default('production');
            $table->string('url')->nullable();
            $table->string('price')->nullable();
            $table->string('delivery_time')->nullable();
            $table->string('badge')->nullable();
            $table->boolean('has_arrow')->default(false);
            $table->boolean('is_dark')->default(false);
            $table->boolean('is_active')->default(true);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('site_services');
    }
};