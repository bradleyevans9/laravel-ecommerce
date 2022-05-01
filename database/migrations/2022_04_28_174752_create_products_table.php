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
            $table->timestamps();
            $table->unsignedBigInteger('admin_id');
            $table->string('product_name');
            $table->text('description');
            $table->text('style');
            $table->text('brand');
            $table->string('url')->nullable();
            $table->string('product_type');
            $table->integer('shipping_price');
            $table->text('note');

            $table->index(['id', 'admin_id']);
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
