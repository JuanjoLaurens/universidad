<?php

namespace App\Http\Controllers;

use App\Models\Estudiantes;



use Illuminate\Http\Request;

class EstudiantesController extends Controller
{

    public function index()
    {
        $estudiantes = Estudiantes::all(); 
        return $estudiantes;
    }


    public function store(Request $request)
    {
        Estudiantes::create($request->all());

    }

    public function show($id)
    {
        $estudiantes = Estudiantes::find($id);
        return $estudiantes;
    }


    public function update(Request $request, $id)
    {
        Estudiantes::find($id)->update($request->all());

    }


    public function destroy($id)
    {
        Estudiantes::find($id)->delete();


    }
}
