<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.inicio')->name('inicio');
Route::view('/nosotros', 'pages.nosotros')->name('nosotros');

Route::prefix('productos')->name('productos.')->group(function () {
    // Página general (la que se parece al screenshot)
    Route::view('/', 'pages.productos.index')->name('index');

    // Páginas por línea
    Route::view('/pollo', 'pages.productos.pollo')->name('pollo');
    Route::view('/cerdo', 'pages.productos.cerdo')->name('cerdo');
    Route::view('/preparados', 'pages.productos.preparados')->name('preparados');
    Route::view('/embutidos', 'pages.productos.embutidos')->name('embutidos');
    Route::view('/huevo', 'pages.productos.huevo')->name('huevo');
    Route::view('/aceites', 'pages.productos.aceites')->name('aceites');
    Route::view('/licores', 'pages.productos.licores')->name('licores');
});

Route::view('/descargas', 'pages.descargas')->name('descargas');
Route::view('/contacto', 'pages.contacto')->name('contacto');
