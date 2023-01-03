<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TrdDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trd_detail', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('trd_operating_unit_id');
            $table->unsignedBigInteger('subseries_id');
            $table->unsignedBigInteger('documents_type_id');
            $table->unsignedBigInteger('status_id');
            $table->foreign('status_id')->references('id')->on('status');
            $table->foreign('trd_operating_unit_id')->references('id')->on('trd_operating_unit');
            $table->foreign('subseries_id')->references('id')->on('subseries');
            $table->foreign('documents_type_id')->references('id')->on('documents_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trd_detail');
    }
}
