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
    Schema::create('items', function (Blueprint $table) {
        $table->id();
        $table->string('sku', 20);
        $table->string('name', 255);
        $table->string('description', 255);
        $table->foreignId('category_id')->constrained('categories');
        $table->double('price');
        $table->double('stock');
        $table->double('weight');
        $table->foreignId('supplier_id')->constrained('suppliers');
        $table->foreignId('brand_id')->constrained('brands'); // FK brands (brand_id)
        $table->double('width');
        $table->double('height');
        $table->double('length');
        $table->double('vat');
        $table->timestamps();
    });

    DB::statement('ALTER TABLE users AUTO_INCREMENT = 1');
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
