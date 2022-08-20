<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('prueba-vue', function(){
    return \Inertia\Inertia::render('prueba');
});
Route::get('Paises-vue', function(){
    return \Inertia\Inertia::render('Paises');
});
Route::get('crearpaises-vue', function(){
    return \Inertia\Inertia::render('crearpaises');
});
Route::get('crearestado-vue', function(){
    return \Inertia\Inertia::render('crearestado');
});
Route::get('crearmunicipio-vue', function(){
    return \Inertia\Inertia::render('crearmunicipio');
});
Route::get('Estados-vue', function(){
    return \Inertia\Inertia::render('Estados');
});
Route::get('Municipios-vue', function(){
    return \Inertia\Inertia::render('Municipios');
});
Route::get('ClienteGrupos-vue', function(){
    return \Inertia\Inertia::render('ClienteGrupos');
});
Route::get('Clientes-vue', function(){
    return \Inertia\Inertia::render('Clientes');
});
Route::get('crearclientegrupos-vue', function(){
    return \Inertia\Inertia::render('crearclientegrupos');
});
Route::get('crearcliente-vue', function(){
    return \Inertia\Inertia::render('crearcliente');
});
Route::get('crearclientedireccion-vue', function(){
    return \Inertia\Inertia::render('crearclientedireccion');
});
Route::get('ClienteDirecciones-vue', function(){
    return \Inertia\Inertia::render('ClienteDirecciones');
});
