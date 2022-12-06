<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipping_addresses', function (Blueprint $table) {
            $table->id();
            $table->string('customer_id')->default(null);
            $table->string('contact_person_name')->default(null);
            $table->string('address_type')->default('home');
            $table->string('address')->default(null);
            $table->string('city')->default(null);
            $table->string('zip')->default(null);
            $table->string('phone')->default(null);
            $table->string('state')->default(null);
            $table->string('country')->default(null);
            $table->tinyInteger('is_billing')->default(null);
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
        Schema::dropIfExists('shipping_addresses');
    }
}
