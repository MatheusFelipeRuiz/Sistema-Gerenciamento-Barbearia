<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('employee_id');
            $table->unsignedBigInteger('service_id');
            $table->float('price',8,2,true);
            $table->enum('status',['completed','canceled','unrealized']);
            $table->timestamps();

            $table->foreign('client_id')->references('id')->on('users');
            $table->foreign('employee_id')->references('id')->on('users');
            $table->foreign('service_id')->references('id')->on('services');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointment');
    }
}
