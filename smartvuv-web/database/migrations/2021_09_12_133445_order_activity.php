<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OrderActivity extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_activity', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->timestamp('register_date')->nullable();
            $table->unsignedBigInteger('user_register_id');
            $table->unsignedBigInteger('user_assigned_id')->nullable();
            $table->text('observation');
            $table->unsignedBigInteger('status_id');
            $table->foreign('order_id')->references('id')->on('order');
            $table->foreign('user_register_id')->references('id')->on('users');
            $table->foreign('status_id')->references('id')->on('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_activity');
    }
}
