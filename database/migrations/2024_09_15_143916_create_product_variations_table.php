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
        Schema::create('product_variations', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('product_id');
            
            // e.g., '250g', '500g', '1kg'
            $table->string('unit');
            
            // Price of the unit
            $table->decimal('price', 8, 2);

            // Unit weight in kg for accurate calculation
            $table->decimal('unit_weight', 5, 3);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_variations');
    }
};
