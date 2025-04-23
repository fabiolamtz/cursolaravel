<?php

 namespace App\Models;

 use Illuminate\Database\Eloquent\Model;

 class Users extends Model
 {
     protected $table = 'usuarios';
     protected $primaryKey = 'idUsuario';

     protected $fillable = [
         'nombre',
         'apellidos',
         'fecha_nacimiento',
         'email',
         'password',
         'telefono',
         'direccion',
         'ciudad',
         'estado',
         'codigo_postal',
         'cargo'

     ];
 }
