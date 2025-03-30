<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PrincipalController;


Route::get('/', function(){return PrincipalController::principal();})->name('site.principal');
Route::get('/tecnico', function(){return PrincipalController::tecnico();})->name('site.tecnico');
Route::get('/mtec', function(){return PrincipalController::mtec();})->name('site.mtec');
Route::get('/ams', function(){return PrincipalController::ams();})->name('site.ams');
Route::get('/secretaria', function(){return PrincipalController::secretaria();})->name('site.secretaria');
Route::get('/contato', function(){return PrincipalController::contato();})->name('site.contato');
