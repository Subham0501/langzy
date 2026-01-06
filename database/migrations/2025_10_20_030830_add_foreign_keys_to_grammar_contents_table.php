<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Check if foreign keys already exist before adding them
        $foreignKeys = $this->getExistingForeignKeys('grammar_contents');
        
        Schema::table('grammar_contents', function (Blueprint $table) use ($foreignKeys) {
            // Add foreign key constraint for grammar_category_id if not exists
            if (!in_array('grammar_contents_grammar_category_id_foreign', $foreignKeys)) {
                $table->foreign('grammar_category_id')->references('id')->on('grammar_categories')->onDelete('cascade');
            }
            // Add foreign key constraint for grammar_subcategory_id (nullable) if not exists
            if (!in_array('grammar_contents_grammar_subcategory_id_foreign', $foreignKeys)) {
                $table->foreign('grammar_subcategory_id')->references('id')->on('grammar_subcategories')->onDelete('cascade');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $foreignKeys = $this->getExistingForeignKeys('grammar_contents');
        
        Schema::table('grammar_contents', function (Blueprint $table) use ($foreignKeys) {
            // Drop foreign key constraints if they exist
            if (in_array('grammar_contents_grammar_category_id_foreign', $foreignKeys)) {
                $table->dropForeign(['grammar_category_id']);
            }
            if (in_array('grammar_contents_grammar_subcategory_id_foreign', $foreignKeys)) {
                $table->dropForeign(['grammar_subcategory_id']);
            }
        });
    }

    /**
     * Get existing foreign keys for a table
     */
    private function getExistingForeignKeys(string $tableName): array
    {
        $database = config('database.connections.mysql.database');
        
        $results = DB::select("
            SELECT CONSTRAINT_NAME 
            FROM information_schema.TABLE_CONSTRAINTS 
            WHERE TABLE_SCHEMA = ? 
            AND TABLE_NAME = ? 
            AND CONSTRAINT_TYPE = 'FOREIGN KEY'
        ", [$database, $tableName]);
        
        return array_map(fn($row) => $row->CONSTRAINT_NAME, $results);
    }
};
