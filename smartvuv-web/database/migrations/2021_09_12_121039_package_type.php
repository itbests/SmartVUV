<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PackageType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_type', function (Blueprint $table) {
            $table->id();
            $table->string('name_');
            $table->integer('days_attention');
            $table->integer('priority');
            $table->char('view_line_process',1);
            $table->timestamp('register_date')->nullable();
            $table->unsignedBigInteger('package_type_class_id');
            $table->unsignedBigInteger('status_id');
            $table->foreign('package_type_class_id')->references('id')->on('package_type_class');
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
        Schema::dropIfExists('package_type');
    }
}
