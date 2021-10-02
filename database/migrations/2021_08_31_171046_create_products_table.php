<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->decimal('price')->nullable();
            $table->decimal('sale_price')->nullable();
            $table->string('price_range');
            $table->bigInteger('min_order'); 
            $table->unsignedInteger('quantity')->default(10);
            $table->boolean('featured')->nullable()->default(false);
            $table->text('description')->nullable();
            $table->string('short_description')->nullable();
            $table->string('image')->nullable();
            $table->json('images')->nullable();
            $table->integer('category_id'); 
            //$table->index('category_id'); 
           // $table->foreign('category_id')->references('id')->on('categories');         
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
}