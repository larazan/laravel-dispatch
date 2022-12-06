<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            // $table->id();
            $table->bigInteger('id');
            $table->string('name')->default(null);
            $table->string('phone')->default(null);
            $table->bigInteger('admin_role_id')->default(2);
            $table->string('image')->default('def.png');
            $table->string('email');
            $table->timestamp('email_verified_at')->default(null);
            $table->string('password');
            $table->string('remember_token')->default(null);
            $table->tinyInteger('status')->default(1);
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
        Schema::dropIfExists('admins');
    }
}
