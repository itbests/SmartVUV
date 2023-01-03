<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Subseries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subseries', function (Blueprint $table) {
            $table->id();
            $table->string('name_');
            $table->timestamp('initial_date');
            $table->timestamp('final_date');
            $table->unsignedBigInteger('consecutive_series');
            $table->unsignedBigInteger('years_management_file');
            $table->unsignedBigInteger('years_central_file');
            $table->unsignedBigInteger('provision_id');
            $table->unsignedBigInteger('support_type_id');
            $table->longText('procedure')->nullable();
            $table->unsignedBigInteger('serie_id');
            $table->unsignedBigInteger('status_id');
            $table->foreign('status_id')->references('id')->on('status');
            $table->foreign('provision_id')->references('id')->on('provision');
            $table->foreign('support_type_id')->references('id')->on('support_type');
            $table->foreign('serie_id')->references('id')->on('serie');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subseries');
    }
}
