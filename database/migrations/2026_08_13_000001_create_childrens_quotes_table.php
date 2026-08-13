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
        Schema::create('childrens_quotes', function (Blueprint $table) {
            $table->id();
            $table->string('word_count')->nullable();
            $table->string('output_format')->nullable();
            $table->string('trim_size')->nullable();
            $table->string('manuscript_status')->nullable();
            $table->string('complexity')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('childrens_quotes');
    }
};