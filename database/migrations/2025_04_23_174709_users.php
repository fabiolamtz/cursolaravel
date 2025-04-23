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
         Schema::create('usuarios', function (Blueprint $table) {
             $table->bigIncrements('idUsuario')->primary();
             $table->string('nombre', 150)->nullable();
             $table->string('apellidos', 255)->nullable();
             $table->date('fecha_nacimiento')->nullable();
             $table->string('email', 255)->nullable();
             $table->string('password', 255)->nullable();
             $table->string('telefono', 255)->nullable();
             $table->string('direccion', 255)->nullable();
             $table->string('ciudad', 255)->nullable();
             $table->string('estado', 255)->nullable();
             $table->string('codigo_postal', 255)->nullable();
             $table->string('cargo', 255)->nullable();
             $table->timestamps();
         });
     }

     /**
      * Reverse the migrations.
      */
     public function down(): void
     {
         Schema::dropIfExists('usuarios');
     }
 };
