<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChecksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checks', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');

            $table->unsignedBigInteger('in_id')->nullable()->nullable();
            $table->foreign('in_id')->references('id')->on('time_checks')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('out_id')->nullable()->nullable();
            $table->foreign('out_id')->references('id')->on('time_checks')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('student_id')->nullable()->nullable();
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('schedule_id')->nullable()->nullable();
            $table->foreign('schedule_id')->references('id')->on('schedules')->onDelete('set null')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checks');
    }
}
