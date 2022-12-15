<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('f_name')->nullable();
            $table->string('l_name')->nullable();
            $table->string('phone');
            $table->string('image')->default('def.png');
            $table->string('remember_token')->nullable();
            $table->string('street_address')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('zip')->nullable();
            $table->tinyInteger('is_active')->default(1);
            $table->string('login_medium')->nullable();
            $table->string('social_id')->nullable();
            $table->tinyInteger('is_phone_verified')->default(0);
            $table->tinyInteger('is_email_verified')->default(0);
            $table->string('temporary_token')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
