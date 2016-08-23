<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->integer('user_id')->unsigned();
            $table->integer('product_category')->unsigned();
            $table->string('product_name')->unique();
            $table->string('picture_product');
            $table->string('slug_product')->unique();
            $table->integer('stock');
            $table->integer('price');
            $table->enum('condition',['New', 'Second']);
            $table->decimal('weight');
            $table->decimal('size');
            $table->text('description');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');;
            $table->foreign('product_category')->references('id')->on('categories')->onDelete('cascade');;
        });
        Schema::create('product_pictures', function(Blueprint $table){
            $table->increments('id');
            $table->integer('product_id')->unsigned();
            $table->string('picture');
            $table->timestamps('created_at');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');;
        });
        Schema::create('product_statistics', function(Blueprint $table){
            $table->integer('product_id')->unsigned();
            $table->integer('interested');
            $table->integer('sold_product')->default(0);
            $table->timestamps();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('product_pictures');
        Schema::drop('product_statistics');
        Schema::drop('products');
    }
}
