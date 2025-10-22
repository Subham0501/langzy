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
        Schema::table('grammar_contents', function (Blueprint $table) {
            // Add foreign key constraint for grammar_category_id
            $table->foreign('grammar_category_id')->references('id')->on('grammar_categories')->onDelete('cascade');
            // Add foreign key constraint for grammar_subcategory_id (nullable)
            $table->foreign('grammar_subcategory_id')->references('id')->on('grammar_subcategories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('grammar_contents', function (Blueprint $table) {
            // Drop foreign key constraints
            $table->dropForeign(['grammar_category_id']);
            $table->dropForeign(['grammar_subcategory_id']);
        });
    }
};
