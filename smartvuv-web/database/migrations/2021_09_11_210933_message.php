<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Message extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message', function (Blueprint $table) {
            $table->id();
            $table->text('message');
            $table->text('cause');
            $table->text('solution');
            $table->char('message_type', 1)->index();
            $table->char('params', 1)->nullable();
            $table->unsignedBigInteger('module_id')->index();
            $table->timestamp('register_date')->nullable();
            $table->unsignedBigInteger('status_id');
            $table->foreign('module_id')->references('id')->on('status');
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
        Schema::dropIfExists('message');
    }
}
