<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->integer('quantity');
            $table->text('color');
            $table->text('size');
            $table->double('weight');
            $table->integer('price_cents');
            $table->integer('sale_price_cents');
            $table->integer('cost_cents');
            $table->string('sku');
            $table->double('length');
            $table->double('width');
            $table->double('height');
            $table->text('note');

            $table->index(['id', 'product_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventories');
    }
}
