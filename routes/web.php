<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});


Route::get('/suma', function () {
    $x = 10;
    $y = 20;
    return $x + $y;
});

route::get('/suma/{x}/{y}', function ($x, $y) {
    return 'la suma es: ' . ($x + $y);
});*/

//Agrupar rutas

/*Route::prefix('operaciones')->group(function () {
    Route::get('/suma/{x}/{y}', function ($x, $y) {
        return 'la suma es: ' . ($x + $y);
    });

    Route::get('/resta/{x}/{y}', function ($x, $y) {
        return 'la resta es: ' . ($x - $y);
    });

    Route::get('/multiplicacion/{x}/{y}', function ($x, $y) {
        return 'la multiplicacion es: ' . ($x * $y);
    });

    Route::get('/division/{x}/{y}', function ($x, $y) {
        return 'la division es: ' . ($x / $y);
    });
}); */

//Rutas con controladores

Route::get('/sumar/{x}/{y}' , [CursoController::class, 'suma']);
Route::get('/restar/{x}/{y}' , [CursoController::class, 'resta']);
Route::get('/multiplicar/{x}/{y}' , [CursoController::class, 'multiplicacion']);
Route::get('/dividir/{x}/{y}' , [CursoController::class, 'division']);
