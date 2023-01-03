<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TaskTypeCausal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_type_causal', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('task_type_id');
            $table->unsignedBigInteger('causal_id');
            $table->timestamp('register_date')->nullable();
            $table->unsignedBigInteger('status_id');
            $table->foreign('task_type_id')->references('id')->on('task_type');
            $table->foreign('causal_id')->references('id')->on('causal');
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
        Schema::dropIfExists('task_type_causal');
    }
}
