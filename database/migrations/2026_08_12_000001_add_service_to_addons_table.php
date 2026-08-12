<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('addons', function (Blueprint $table) {
            $table->string('service', 100)->default('Complete Publishing')->after('description');
        });
    }

    public function down(): void
    {
        Schema::table('addons', function (Blueprint $table) {
            $table->dropColumn('service');
        });
    }
};
