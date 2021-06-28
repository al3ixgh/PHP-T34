<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/probando/ruta', function () {
    return 'funcion get';
});

Route::post('/probando/ruta', function () {
    return 'funcion post';
});

Route::put('/probando/ruta', function () {
    return 'funcion put';
});

Route::delete('/probando/ruta', function () {
    return 'funcion delete';
});


//EJERCICIO 1
Route::get('/api/user', function () {
    return 'devolviendo ruta api/user';
});

Route::get('/paises', function () {
    return 'devolviendo lista paises';
});

Route::post('/paises', function () {
    return 'funcion post en paises';
});

Route::get('/paises/{pais}', function ($pais) {
    return 'devolviendo '.$pais;
});

Route::put('/paises/{pais}', function ($pais) {
    return 'puteando '.$pais;
});

Route::delete('/paises/{pais}', function ($pais) {
    return 'borrando '.$pais;
});

Route::get('/paises/{pais}/departamentos', function ($pais) {
    return 'devolviendo departamentos de '.$pais;
});

Route::post('/paises/{pais}/departamentos', function ($pais) {
    return 'posteando departamento de '.$pais;
});

Route::get('/paises/{pais}/departamentos/{departamento}', function ($pais, $departamento) {
    return 'devolviendo '.$departamento.' de '.$pais;
});

Route::put('/paises/{pais}/departamentos/{departamento}', function ($pais, $departamento) {
    return 'puteando '.$departamento.' de '.$pais;
});

Route::delete('/paises/{pais}/departamentos/{departamento}', function ($pais, $departamento) {
    return 'borrando '.$departamento.' de '.$pais;
});

//EJERCICIO 2
Route::get('/colaboradores/{colaborador}', function ($colaborador) {
    return 'devolviendo '.$colaborador.' de colaboradores';
});

Route::post('/colaboradores/{colaborador}', function ($colaborador) {
    return 'posteando '.$colaborador.' de colaboradores';
});

Route::put('/colaboradores/{colaborador}', function ($colaborador) {
    return 'puteando '.$colaborador.' de colaboradores';
});

Route::delete('/colaboradores/{colaborador}', function ($colaborador) {
    return 'borrando '.$colaborador.' de colaboradores';
});

Route::get('/tienda/productos/{id}', function ($id) {
    return 'devolviendo producto '.$id.' de tienda';
});

Route::post('/tienda/productos/{id}', function ($id) {
    return 'posteando producto '.$id.' de tienda';
});

Route::put('/tienda/productos/{id}', function ($id) {
    return 'puteando producto '.$id.' de tienda';
});

Route::delete('/tienda/productos/{id}', function ($id) {
    return 'borrando producto '.$id.' de tienda';
});

Route::get('/agenda/{mes}/{año}', function ($mes, $año) {
    return 'mostrando agenda de '.$mes.' de '.$año;
});

Route::post('/agenda/{mes}/{año}', function ($mes, $año) {
    return 'posteando agenda de '.$mes.' de '.$año;
});

Route::put('/agenda/{mes}/{año}', function ($mes, $año) {
    return 'puteando agenda de '.$mes.' de '.$año;
});

Route::delete('/agenda/{mes}/{año}', function ($mes, $año) {
    return 'borrando agenda de '.$mes.' de '.$año;
});

Route::get('/categoria/{cat}/{pag?}', function ($cat, $pag=1) {
    return 'mostrando pagina '.$pag.' de '.$cat;
});

Route::post('/categoria/{cat}/{pag?}', function ($cat, $pag=1) {
    return 'posteando pagina '.$pag.' de '.$cat;
});

Route::put('/categoria/{cat}/{pag?}', function ($cat, $pag=1) {
    return 'puteando pagina '.$pag.' de '.$cat;
});

Route::delete('/categoria/{cat}/{pag?}', function ($cat, $pag=1) {
    return 'borrando pagina '.$pag.' de '.$cat;
});

