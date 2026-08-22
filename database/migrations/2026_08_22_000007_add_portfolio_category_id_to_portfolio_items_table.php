<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('portfolio_items', function (Blueprint $table) {
            $table->unsignedBigInteger('portfolio_category_id')->nullable()->after('id');
            $table->foreign('portfolio_category_id')->references('id')->on('portfolio_categories')->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('portfolio_items', function (Blueprint $table) {
            $table->dropForeign(['portfolio_category_id']);
            $table->dropColumn('portfolio_category_id');
        });
    }
};
