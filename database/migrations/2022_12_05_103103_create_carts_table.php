<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            // $table->id();
            $table->bigInteger('id');
            $table->bigInteger('customer_id')->default(null);
            $table->bigInteger('product_id')->default(null);
            $table->integer('quantity')->default(1);
            $table->double('price', 8, 2)->default(1);
            $table->double('tax', 8, 2)->default(1);
            $table->double('discount', 8, 2)->default(1);
            $table->string('slug')->default(null);
            $table->string('name')->default(null);
            $table->string('thumbnail')->default(null);
            $table->string('shop_info')->default(null);
            $table->double('shipping_cost', 8, 2)->default(null);
            $table->string('shipping_type')->default(null);
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
        Schema::dropIfExists('carts');
    }
}
