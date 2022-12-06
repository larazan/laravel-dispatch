<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefundTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refund_transactions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order_id')->default(null);
            $table->string('payment_for')->default(null);
            $table->bigInteger('payer_id')->default(null);
            $table->bigInteger('payment_receiver_id')->default(null);
            $table->string('paid_by')->default(null);
            $table->string('paid_to')->default(null);
            $table->string('payment_method')->default(null);
            $table->string('payment_status')->default(null);
            $table->double('amount', 8, 2)->default(null);
            $table->string('transaction_type')->default(null);
            $table->bigInteger('refund_id')->default(null);
            $table->bigInteger('order_details_id')->default(null);
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
        Schema::dropIfExists('refund_transactions');
    }
}
