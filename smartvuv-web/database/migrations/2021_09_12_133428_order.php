<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Order extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('package_id');
            $table->unsignedBigInteger('task_type_id');
            $table->unsignedBigInteger('operating_unit_id');
            $table->timestamp('creation_date')->nullable();
            $table->unsignedBigInteger('user_register_id');
            $table->timestamp('attention_date')->nullable();
            $table->unsignedBigInteger('status_id');
            $table->foreign('package_id')->references('id')->on('package');
            $table->foreign('task_type_id')->references('id')->on('task_type');
            $table->foreign('operating_unit_id')->references('id')->on('operating_unit');
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
        Schema::dropIfExists('order');
    }
}
