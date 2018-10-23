<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearRegistroPerfil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PerfilPF', function (Blueprint $table) {
            $table->increments('idPerfilPF');
            $table->integer('idEstudiante');
            $table->integer('idTutor');
            $table->integer('idTrabajo');
            $table->integer('idDocente');
            $table->integer('idDirector');
            $table->integer('idGestion');
            $table->integer('idCarrera');
            $table->integer('idArea');
            $table->integer('idModalidad');
            $table->string('tituloProyecto', 50);
            $table->string('objetivoGeneral', 50);
            $table->string('objetivoEspecifico', 50);
            $table->string('descripcion', 1000);
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
        Schema::drop('PerfilPF');
    }
}
