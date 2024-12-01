<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            // Changing the 'price' column to decimal type with a default value of 0.00
            $table->decimal('price', 8, 2)->default(0.00)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            // Reverting the 'price' column back to an integer (though this can be problematic if the price has decimals)
            $table->integer('price')->default(0)->change();
        });
    }
};
