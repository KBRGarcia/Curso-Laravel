<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    //por convencion al metodo que se encarga de manejar la pagina principal se le llama index
    public function index() {

        $cursos = Curso::paginate();

        return view('cursos.index', compact('cursos'));
    }

    //por convencion al metodo que se encarga de manejar un formulario donde se puede crar un curso o lo que sea se le llama create
    public function create() {
        return view('cursos.create');
    }

    //por convencion al metodo que se encarga de manejar u elemento en particular en este caso a un surso en particular se le llama show
    public function show($id){
        // return view('cursos.show', ['curso' => $curso]);

        $curso = Curso::find($id);

        // -#-#-#- otra forma de pasar la variable al archivo show.php sería
        return view('cursos.show', compact('curso'));
    }
}
