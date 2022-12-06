<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupportTicketConvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('support_ticket_convs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('support_ticket_id')->default(null);
            $table->bigInteger('admin_id')->default(null);
            $table->string('customer_message')->default(null);
            $table->string('admin_message')->default(null);
            $table->integer('position')->default(0);
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
        Schema::dropIfExists('support_ticket_convs');
    }
}
