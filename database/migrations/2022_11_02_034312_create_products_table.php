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
            $table->id();
            $table->string('name', 50);
            $table->string('sku', 50);
            $table->string('weight', 50);
            $table->string('dimension', 50);
            $table->longText('description')->nullable();
            $table->float('price', 0, 0)->default('0');
            $table->float('old_price', 0, 0)->nullable()->default('0');
            $table->integer('discount')->nullable();
            $table->unsignedBigInteger('discount_type_id')->nullable();
            $table->foreign('discount_type_id')->references('id')->on('discount_types');
            $table->boolean('hot')->nullable()->default('0')->comment('1: True | 0: False');
            $table->boolean('featured')->nullable()->default('0')->comment('1: True | 0: False');
            $table->unsignedBigInteger('status_id');
            $table->foreign('status_id')->references('id')->on('status');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->timestamps();
            $table->dateTime('delete_date')->nullable();
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
