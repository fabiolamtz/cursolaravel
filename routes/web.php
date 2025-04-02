<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('users', AdminUserController::class)->parameters([
    'users' => 'admin_user'
]);

/*Route::get('/suma', function () {
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


//Route::get('/index', [CursoController::class, 'index']);

Route::view('mostrar', 'display', ['message' => 'Hola desde la vista'])->name('display');

route::controller(PostController::class)->group(function () {
    route::get('/posts', 'index')->name('posts.index');
    route::get('/posts/create', 'create')->name('posts.create');
    route::post('/posts', 'store')->name('posts.store');
    route::get('/posts/show', 'show')->name('posts.show');
    route::get('posts/delete/{id}', 'destroy')->name('posts.destroy');
});



