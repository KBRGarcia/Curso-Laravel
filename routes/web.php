<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', HomeController::class);

route::controller(CursoController::class)->group(function(){

    route::get('cursos', 'index')->name('cursos.index');

    route::get('cursos/create', 'create')->name('cursos.create');
    
    route::get('cursos/{id}', 'show')->name('cursos.show');
});