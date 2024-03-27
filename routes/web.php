<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


// -#-#-#- Si no se coloca nada y se entra en la carpeta /public/ en el navegador

Route::get('/', HomeController::class);

// -#-#-#- Para crear un grupo de rutas
// -#-#-#- Se utiliza para tener un código mas limpio

route::controller(CursoController::class)->group(function(){

    route::get('cursos', 'index')->name('cursos.index');

    route::get('cursos/create', 'create')->name('cursos.create');
    
    route::get('cursos/{id}', 'show')->name('cursos.show');
});



// -#-#-#- Si el url de la pagina web aparece como: public/cursos entonces aparecerá lo siguiente

//route::get('cursos', [CursoController::class, 'index']);

// -#-#-#- Suponiendo que queremos crear un formulario donde queramos crear el listado de los cursos

//route::get('cursos/create', [CursoController::class, 'create']);

// -#-#-#- Podemos tomar lo que siga despues de cursos/... como variable y almacenarla en la funcion ...
// -#-#-#- ... para mostrarla por pantalla de la siguiente manera

//route::get('cursos/{curso}', [CursoController::class, 'show']);

// -#-#-#- Dentro de las rutas podemos utilizar mas de una variable
// -#-#-#- Para evitar colocar tantas rutas podemos hacer que la segunda variable sea opcional colocando el ? al final ...
// -#-#-#- ... y luego estableciendo como null la variable dentro de la funcion

// route::get('cursos/{curso}/{categoria?}', function($curso, $categoria = null) {

// -#-#-#- Si la variable categoria teien algun valor imrpimirá:

//if ($categoria) {

//  return "Bienvenido al curso $curso de la categoria $categoria";

// -#-#-#- Por otro lado, si la variable se encuentra vacia imprimirá:

//  } else {

//      return "Bienvenido al Curso: $curso";
//  }
    
//});




//LEYENDA:
//Texto: // -#-#-#- ...texto...
//Código: //...código...