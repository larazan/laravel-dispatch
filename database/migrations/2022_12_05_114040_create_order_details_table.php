<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order_id')->default(null);
            $table->bigInteger('product_id')->default(null);
            $table->text('product_detail');
            $table->integer('qty')->default(0);
            $table->double('price')->default(0);
            $table->double('tax')->default(0);
            $table->double('discount')->default(0);
            $table->string('delivery_status')->default('pending');
            $table->string('payment_status')->default('unpaid');
            $table->bigInteger('shipping_method_id')->default(null);
            $table->string('variant')->default(null);
            $table->string('variation')->default(null);
            $table->string('discount_type')->default(null);
            $table->tinyInteger('is_stock_decreased')->default(1);
            $table->integer('refund_request')->default(0);
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
        Schema::dropIfExists('order_details');
    }
}
