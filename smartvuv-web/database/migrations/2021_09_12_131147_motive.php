<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Motive extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motive', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('package_id');
            $table->unsignedBigInteger('customer_identification_type_id');
            $table->string('customer_identification');
            $table->string('customer_first_name');
            $table->string('customer_last_name');
            $table->string('customer_phone1');
            $table->string('customer_phone2');
            $table->string('customer_email');
            $table->string('customer_website');
            $table->unsignedBigInteger('city_id');
            $table->string('customer_address');
            $table->text('observation');
            $table->unsignedBigInteger('target_operating_unit_id');
            $table->timestamp('register_date');
            $table->string('sender_first_name');
            $table->string('sender_last_name');
            $table->string('response_radicated');
            $table->foreign('package_id')->references('id')->on('package');
            $table->foreign('customer_identification_type_id')->references('id')->on('identification_type');
            $table->foreign('city_id')->references('id')->on('city');
            $table->foreign('target_operating_unit_id')->references('id')->on('operating_unit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('motive');
    }
}
