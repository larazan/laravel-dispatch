<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            // $table->id();
            $table->bigInteger('id');
            $table->string('photo')->default(null);
            $table->string('banner_type');
            $table->integer('published')->default(0);
            $table->string('url')->default(null);
            $table->string('resource_type')->default(null);
            $table->bigInteger('resource_id')->default(null);
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
        Schema::dropIfExists('banners');
    }
}
