<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/pacientes', 'App\Http\Controllers\PacientesController@index')->name('listar_pacientes');
Route::get('/pacientes/criar', 'App\Http\Controllers\PacientesController@create')->name('form_criar_paciente');
Route::post('/pacientes/criar', 'App\Http\Controllers\PacientesController@store');
Route::delete('/pacientes/{id}', 'App\Http\Controllers\PacientesController@destroy');

Route::get('/pacientes/{pacienteId}/consultas', 'App\Http\Controllers\ConsultasController@index')->name('listar_consultas');
Route::get('/pacientes/{pacienteId}/consultas/criar', 'App\Http\Controllers\ConsultasController@create')->name('form_criar_consulta');
Route::post('/pacientes/{pacienteId}/consultas/criar', 'App\Http\Controllers\ConsultasController@store');
Route::delete('/pacientes/{pacienteId}/consultas', 'App\Http\Controllers\ConsultasController@destroy');

Route::get('/login', 'App\Http\Controllers\UsuariosController@index')->name('page_login');
Route::post('/login', 'App\Http\Controllers\UsuariosController@log');
Route::get('/login/criar', 'App\Http\Controllers\UsuariosController@create');
Route::post('/login/criar', 'App\Http\Controllers\UsuariosController@store');