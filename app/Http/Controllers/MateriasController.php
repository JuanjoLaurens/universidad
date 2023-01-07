<?php

namespace App\Http\Controllers;

use App\Models\Materias;


use Illuminate\Http\Request;

class MateriasController extends Controller
{

    public function index()
    {
        $materias = Materias::all();
        return $materias;
    }


    public function store(Request $request)
    {
        Materias::create($request->all());

    }

    public function show($id)
    {
        $materias = Materias::all();
        return $materias[$id];
    }


    public function update(Request $request, $id)
    {
        $materias = Materias::find($id);
        $materias->update($request->all());

    }


    public function destroy($id)
    {
        $materias = Materias::find($id);
        $materias->delete();

    }
}
