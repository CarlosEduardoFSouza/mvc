<?php

use Illuminate\Support\Facades\Route;


Route::get(url: '/', action: 'EnderecoController@index')->name(name: 'home');
Route::get(url: '/', adicionar: 'EnderecoController@index')->name(name: 'adicionar');

Route::get(url: '/', buscar: 'EnderecoController@index')->name(name: 'buscar');

Route::post(url: '/', salvar: 'EnderecoController@index')->name(name: 'salvar');
