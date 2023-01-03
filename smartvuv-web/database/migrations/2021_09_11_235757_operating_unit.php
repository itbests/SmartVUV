<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OperatingUnit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operating_unit', function (Blueprint $table) {
            $table->id();
            $table->string('name_');
            $table->string('address');
            $table->string('office_id');
            $table->string('phone1');
            $table->string('phone2');
            $table->string('email');
            $table->char('view_line_process', 1);
            $table->char('autoassigned', 1);
            $table->timestamp('register_date')->nullable();
            $table->unsignedBigInteger('status_id');
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
        Schema::dropIfExists('operating_unit');
    }
}
