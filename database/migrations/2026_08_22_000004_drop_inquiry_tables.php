<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::dropIfExists('book_briefs');
        Schema::dropIfExists('edit_samples');
        Schema::dropIfExists('format_samples');
        Schema::dropIfExists('childrens_quotes');
        Schema::dropIfExists('mockup_requests');
        Schema::dropIfExists('package_fit_requests');
    }

    public function down(): void
    {
        // Cannot reverse — data is lost
    }
};
