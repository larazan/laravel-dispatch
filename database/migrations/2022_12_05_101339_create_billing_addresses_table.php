<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillingAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billing_addresses', function (Blueprint $table) {
            // $table->id();
            $table->bigInteger('id');
            $table->bigInteger('customer_id')->default(null);
            $table->string('contact_person_name')->default(null);
            $table->string('address_type')->default(null);
            $table->string('address')->default(null);
            $table->string('city')->default(null);
            $table->integer('zip')->default(null);
            $table->string('phone')->default(null);
            $table->string('state')->default(null);
            $table->string('country')->default(null);
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
        Schema::dropIfExists('billing_addresses');
    }
}
