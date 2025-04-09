<?php

 namespace App\Models;

 use Illuminate\Database\Eloquent\Model;

 class Productos extends Model
 {
     protected $table = 'productos';
     protected $primaryKey = 'idProducto';

     protected $fillable = [
         'nombre',
         'descripcion',
         'precio',
         'stock'
     ];
 }
