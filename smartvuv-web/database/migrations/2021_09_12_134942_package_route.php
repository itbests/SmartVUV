<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PackageRoute extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_route', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('process_type_id');
            $table->unsignedBigInteger('task_type_id');
            $table->unsignedBigInteger('order_type_id');
            $table->unsignedBigInteger('previous_task_type_id');
            $table->unsignedBigInteger('next_task_type_id');
            $table->unsignedBigInteger('causal_id');
            $table->timestamp('register_date')->nullable();
            $table->unsignedBigInteger('status_id');
            $table->foreign('process_type_id')->references('id')->on('process_type');
            $table->foreign('task_type_id')->references('id')->on('task_type');
            $table->foreign('order_type_id')->references('id')->on('order_type');
            $table->foreign('previous_task_type_id')->references('id')->on('task_type');
            $table->foreign('next_task_type_id')->references('id')->on('task_type');
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
        Schema::dropIfExists('package_route');
    }
}
