<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){ //Método encargado de mostrar la página principal
        
        $cursos=Curso::orderBy('id', 'desc')->paginate();

        return view('cursos.index', compact('cursos'));
    }


    public function store(StoreCurso $request){


        $curso=Curso::create($request->all());

        return redirect()->route('cursos.show', $curso);
    }

    public function show(Curso $curso){ //Meétodo encargado para mostrar un elemento en particular
        /*compact('curso'); //['curso' -> $curso]*/
 
        return view('cursos.show',compact('curso'));
    }

    public function edit(Curso $curso){
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso){

        $request->validate([
            'name'=>'required|min:3',
            'slug'=>'required|unique:cursos,slug,'.$curso->id,
            'descripcion'=>'required',
            'categoria'=>'required'
            ]);

        // $curso->name=$request->name;
        // $curso->descripcion=$request->descripcion;
        // $curso->categoria=$request->categoria;

        // $curso->save();

        $curso->update($request->all());

        return view('cursos.show',compact('curso'));
    }

    public function destroy(Curso $curso){
        $curso->delete();

        return redirect()->route('cursos.index');
    }
}
