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
        Schema::create('practicas_requisitos', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('id_practica')->unsigned();
            $table->bigInteger('id_requisito')->unsigned();

            $table->timestamps();

            $table->foreign("id_practica")
                ->references('id')
                ->on('practicas')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign("id_requisito")
                ->references('id')
                ->on('requisitos')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('practicas_requisitos');
    }
};
