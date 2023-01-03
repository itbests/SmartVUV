<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Menu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->string('name_');
            $table->string('display_name');
            $table->unsignedBigInteger('menu_dad_id')->index();
            $table->string('link_command')->nullable();
            $table->string('target')->nullable();
            $table->string('tooltip')->nullable();
            $table->string('image_icon')->nullable();
            $table->timestamp('register_date')->nullable();
            $table->unsignedBigInteger('menu_type_id');
            $table->unsignedBigInteger('status_id');
            $table->string('breadcrumb')->nullable();
            $table->foreign('status_id')->references('id')->on('status');
            $table->foreign('menu_type_id')->references('id')->on('menu_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu');
    }
}
