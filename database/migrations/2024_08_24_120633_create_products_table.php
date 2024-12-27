<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->String('name');
            $table->decimal('price', 8, 2);
            $table->decimal('discount_price', 8, 2);
            $table->String('color');
            $table->integer('quantity');
            $table->integer('sale_qty');
            $table->integer('remain_qty');
            $table->String('category');
            $table->String('gallery');
            $table->text('description');
            $table->boolean('new');
            

    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
