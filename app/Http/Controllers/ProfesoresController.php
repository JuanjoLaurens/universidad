<?php

namespace App\Http\Controllers;

use App\Models\Profesores;
use Dotenv\Validator;
use Illuminate\Http\Request;


class ProfesoresController extends Controller
{

    public function index()
    {
        $profesores = Profesores::all();
        return $profesores;
    }


    public function store(Request $request)
    {

        
        Profesores::create($request->all());

    }

    public function show($id)
    {
        $profesores = Profesores::find($id);
        return $profesores;
    }


    public function update(Request $request, $id)
    {
        $profesores = Profesores::find($id);
        $profesores->update($request->all());
    }


    public function destroy($id)
    {
        $profesores = Profesores::find($id);
        $profesores->delete();
       

    }

}

