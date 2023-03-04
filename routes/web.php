<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    return view('index');
});

Route::get('/acerca-de', function () {

    return view('acerca-de');
})->name('acerca-de');

Route::get('/facultad', function () {

    return view('facultad');
})->name('facultad');

Route::get('/mundo-academico', function () {

    return view('mundo-academico');
})->name('mundo-academico');

Route::get('/vida-estudiantil', function () {

    return view('vida-estudiantil');
})->name('vida-estudiantil');

Route::get('/programas-academicos', function () {

    return view('programas-academicos');
})->name('prog-aca');

Route::get('/noticias', function () {

    return view('noticias');
})->name('noticias');;

Route::get('/admision', function () {

    return view('admision');
})->name('admision');



Route::get('/tienda', function () {

    return view('tienda');
})->name('tienda');


Route::get('/inicio', function () {

    $msj = "Mensaje desde el servidor";
    
    return view('inicio', ['msj' => $msj, 'edad' => '22']);
});



