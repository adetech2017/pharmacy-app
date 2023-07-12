<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductImportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_imports', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pharmacy_id')->unsigned();
            $table->string('product_name');
            $table->double('price', 8, 2);
            $table->integer('quantity');
            $table->string('mrp');
            $table->string('batch_number');
            $table->string('slug');
            $table->date('expiry_date');
            $table->text('description')->nullable();
            $table->integer('status_id')->default(2);
            $table->timestamps();

            $table->foreign('pharmacy_id')->references('id')->on('pharmacies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_imports');
    }
}
