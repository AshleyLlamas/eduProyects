<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();

            $table->string('email')->unique();
            $table->string('password');
            $table->string('nombre');
            $table->string('sexo')->nullable();
            $table->string('curp')->nullable();

            //OPCIONAL -- Dirección
            $table->unsignedBigInteger('address_id')->nullable();
            $table->foreign('address_id')->references('id')->on('addresses')->onDelete('cascade')->onUpdate('cascade');

            $table->string('matrícula')->nullable();
            $table->string('grupo')->nullable();

            //Campus
            $table->unsignedBigInteger('campus_id')->nullable();
            $table->foreign('campus_id')->references('id')->on('campuses')->onDelete('cascade')->onUpdate('cascade');

            $table->string('semestre')->nullable();
            $table->string('ciclo_escolar')->nullable();

            //Carrera
            $table->unsignedBigInteger('career_id')->nullable();
            $table->foreign('career_id')->references('id')->on('careers')->onDelete('set null')->onUpdate('cascade');

            $table->enum("turno", ["MATUTINO", "INTERMEDIO", "VESPERTINO", "HORARIO COMPLETO", 'NOCTURNO'])->nullable();

            $table->string('tipo_de_sangre')->nullable();
            
            $table->string('qr')->unique()->nullable();
            $table->string('slug')->unique()->nullable();

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
        Schema::dropIfExists('students');
    }
}
