<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefundRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refund_requests', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order_details_id');
            $table->bigInteger('customer_id');
            $table->string('status');
            $table->double('amount', 8, 2);
            $table->bigInteger('product_id');
            $table->bigInteger('order_id');
            $table->longText('refund_reason');
            $table->longText('approved_note');
            $table->longText('rejected_note');
            $table->longText('payment_info');
            $table->string('images')->default(null);
            $table->string('change_by')->default(null);
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
        Schema::dropIfExists('refund_requests');
    }
}
