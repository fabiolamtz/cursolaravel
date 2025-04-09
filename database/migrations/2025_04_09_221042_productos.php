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
         Schema::create('productos', function (Blueprint $table) {
             $table->bigIncrements('idProducto')->primary();
             $table->string('nombre', 150)->nullable();
             $table->string('descripcion', 255)->nullable();
             $table->float('precio', 10, 2)->nullable();
             $table->integer('stock')->nullable();
             $table->timestamps();
         });
     }

     /**
      * Reverse the migrations.
      */
     public function down(): void
     {
         Schema::dropIfExists('productos');
     }
 };
