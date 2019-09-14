<?php

use Illuminate\Support\Facades\Schema;
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
            $table->string('product_name');
            $table->string('description');
            $table->integer('supplier_id')->unsigned();
            $table->integer('quantity')->default(0);
            $table->double('price');
            $table->timestamps();
        });

         Schema::table('products', function($table)
        {
            $table->foreign('supplier_id')
                    ->references('id')
                    ->on('suppliers');
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
