<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('practicas', function (Blueprint $table) {
            $table->id();

            $table->integer('codigo');
            $table->bigInteger('id_estudiante')->unsigned();
            $table->bigInteger('id_docente')->unsigned();
            $table->bigInteger('id_empresa')->unsigned();
            $table->string('titulo', 250); 
            $table->bigInteger('id_etapa')->unsigned();
            $table->timestamps();

            $table->foreign("id_estudiante")
                ->references('id')
                ->on('estudiantes')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign("id_docente")
                ->references('id')
                ->on('docentes')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign("id_empresa")
                ->references('id')
                ->on('empresas')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign("id_etapa")
                ->references('id')
                ->on('etapas')
                ->onDelete('cascade')
                ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('practicas');
    }
};
