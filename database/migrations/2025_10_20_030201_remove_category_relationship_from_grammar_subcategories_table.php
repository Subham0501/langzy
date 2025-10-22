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
        Schema::table('grammar_subcategories', function (Blueprint $table) {
            // Drop the foreign key constraint first
            $table->dropForeign(['grammar_category_id']);
            // Drop the column
            $table->dropColumn('grammar_category_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('grammar_subcategories', function (Blueprint $table) {
            // Add the column back
            $table->foreignId('grammar_category_id')->nullable()->constrained()->onDelete('cascade');
        });
    }
};
