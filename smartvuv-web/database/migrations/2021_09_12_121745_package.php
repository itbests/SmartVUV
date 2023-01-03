<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Package extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('package_type_id');
            $table->unsignedBigInteger('process_type_id');
            $table->string('radicated');
            $table->timestamp('register_date');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('status_id');
            $table->foreign('package_type_id')->references('id')->on('package_type');
            $table->foreign('process_type_id')->references('id')->on('process_type');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('package');
    }
}
