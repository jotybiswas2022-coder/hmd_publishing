<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('about_page_sections', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();       // e.g. 'hero', 'stats', 'team_member_1'
            $table->string('section_type');          // e.g. 'hero', 'stats', 'card', 'faq', 'team_member', 'testimonial'
            $table->text('title')->nullable();
            $table->text('description')->nullable();
            $table->text('content')->nullable();     // rich text / body content
            $table->text('icon')->nullable();
            $table->string('image')->nullable();
            $table->string('url')->nullable();
            $table->string('button_text')->nullable();
            $table->json('meta')->nullable();        // flexible extra fields (stars, number, author_label, etc.)
            $table->boolean('is_active')->default(true);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('about_page_sections');
    }
};
