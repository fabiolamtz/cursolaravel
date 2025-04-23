<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\UsersController;
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

//Productos
Route::get('/', function () {
    return view('welcome');
    return redirect()->route('productos.index');
});

Route::prefix('productos')
 ->name('productos.')
 ->controller(ProductosController::class)->group(function () {
     Route::get('/index', 'index')->name('index'); // Lista todos los productos
     Route::get('/create', 'create')->name('create'); // Muestra el formulario para crear un producto
     Route::post('/store', 'store')->name('store'); // Crea un nuevo producto
     Route::get('/show/{id}', 'show')->name('show'); // Muestra un producto
     Route::get('/edit/{id}', 'edit')->name('edit'); // Muestra el formulario para editar un producto
     Route::post('/update/{id}', 'update')->name('update'); // Actualiza un producto
     Route::get('/destroy/{id}', 'destroy')->name('destroy'); // Elimina un producto
 });

//Usuarios
Route::get('/', function () {
    return view('welcome');
    return redirect()->route('user.index');
});

Route::prefix('usuarios')
 ->name('usuarios.')
 ->controller(UsersController::class)->group(function () {
     Route::get('/index', 'index')->name('index'); // Lista todos de usuarios
     Route::get('/create', 'create')->name('create'); // Muestra el formulario para crear nuevos usuarios
     Route::post('/store', 'store')->name('store'); // Crea un nuevo usuario
     Route::get('/show/{id}', 'show')->name('show'); // Muestra un usuario
     Route::get('/edit/{id}', 'edit')->name('edit'); // Muestra el formulario para editar un usuaurio
     Route::post('/update/{id}', 'update')->name('update'); // Actualiza un usuario
     Route::get('/destroy/{id}', 'destroy')->name('destroy'); // Elimina un usuario
 });

