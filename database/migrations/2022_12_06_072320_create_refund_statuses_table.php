<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefundStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refund_statuses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('refund_request_id')->default(null);
            $table->string('change_by')->default(null);
            $table->bigInteger('change_by_id')->default(null);
            $table->string('status')->default(null);
            $table->longText('message');
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
        Schema::dropIfExists('refund_statuses');
    }
}
