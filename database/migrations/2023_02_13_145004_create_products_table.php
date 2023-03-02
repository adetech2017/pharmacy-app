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
            $table->unsignedInteger('pharmacy_id')->unsigned();
            $table->bigInteger('category_id')->unsigned();
            $table->string('product_name');
            $table->double('price', 8, 2);
            $table->integer('quantity');
            $table->string('mrp');
            $table->string('batch_number');
            $table->date('expiry_date');
            $table->text('description');
            $table->string('image');
            $table->integer('status_id')->nullable();
            $table->integer('manufacturer_id')->nullable();
            $table->timestamps();

            $table->foreign('pharmacy_id')->references('id')->on('pharmacies');
            $table->foreign('category_id')->references('id')->on('drug_categories');
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
