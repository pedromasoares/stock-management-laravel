<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('sales', function (Blueprint $table) {
        $table->id();
        $table->foreignId('client_id')->constrained('clients')->onDelete('cascade');
        $table->foreignId('product_id')->constrained('items')->onDelete('cascade');
        $table->decimal('amount', 10, 2);
        $table->string('payment_method')->nullable(); // ex: MBWay, Multibanco, etc
        $table->timestamps();
    });

    DB::statement('ALTER TABLE users AUTO_INCREMENT = 1');
}



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
