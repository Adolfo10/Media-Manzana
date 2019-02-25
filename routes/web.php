<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () { return view('base');});

/*
Route::get('/face', function () { return view('face');});
Route::get('/baseface', function () { return view('baseface');});
Route::get('/google', function () { return view('google');});
*/

Route::get('/face', 'Controller@showfacereg');
Route::get('/regface', 'Controller@showfacebase');

Route::get('/google', 'Controller@showgooglereg');
Route::get('/regoogle', 'Controller@showregoogle');


/*
Route::get('/contacto','Controller@showregistro');
Route::post('/contacts','Controller@registro');
Route::get('/filtrar','Controller@filtrarnombre');
Route::get('/altatelefono','Controller@showregtelefono');
Route::post('/altatelefono', 'Controller@registrartelefono');
Route::get('/consulta1','Controller@consulta1');
Route::get('/login','Controller@viewlogin');
Route::post('/login', 'Controller@IniciarSesion');
Route::get('/registrarClientazo', 'bdcontroller@viewregistrarclientes');
Route::post('/registrarClientazo', 'bdcontroller@registrarclientes');
Route::get('/registrarBicicletota', 'bdcontroller@viewregistrarbicicleta');
Route::post('/registrarBicicletota', 'bdcontroller@registrarbicicleta');
Route::get('/asignartriciclo', 'bdcontroller@viewasignarbicicleta');
Route::post('/asignartriciclo', 'bdcontroller@asignarbicicleta');
# EXAMEN - REMEDIAL - 
Route::get('/productos', 'Controller@showprod');
Route::post('/productos', 'Controller@registrarprod');
Route::get('/verproductos', 'Controller@showproductos');
Route::get('/ver', 'bdcontroller@verprod');
*/