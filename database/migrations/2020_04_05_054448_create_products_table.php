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
            $table->bigIncrements('id');
            $table->string('name',200);
            $table->longText('description');
            $table->double('price');
            $table->double('promotion_price');
            $table->longText('cover_image')->nullable();
            $table->integer('selling');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('id_type');
            $table->unsignedBigInteger('id_acce');

            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categorys')->onDelete('cascade');
            $table->foreign('id_type')->references('id')->on('type_products')->onDelete('cascade');
            $table->foreign('id_acce')->references('id')->on('acce_products')->onDelete('cascade');
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
