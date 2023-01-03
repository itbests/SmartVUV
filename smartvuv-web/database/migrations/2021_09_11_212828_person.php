<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Person extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('person_type_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->unsignedBigInteger('identification_type_id');
            $table->string('identification')->index();
            $table->unsignedBigInteger('user_id')->index();
            $table->string('address');
            $table->unsignedBigInteger('zip_code');
            $table->string('phone1');
            $table->string('phone2');
            $table->string('email');
            $table->string('website');
            $table->text('comments');
            $table->timestamp('register_date')->nullable();
            $table->foreign('person_type_id')->references('id')->on('person_type');
            $table->foreign('identification_type_id')->references('id')->on('identification_type');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('person');
    }
}
