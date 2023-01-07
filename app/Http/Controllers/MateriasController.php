<?php

namespace App\Http\Controllers;

use App\Models\Materias;
use Illuminate\Support\Facades\Validator;



use Illuminate\Http\Request;

class MateriasController extends Controller
{

    public function index()
    {
        $materias = Materias::all();
        return response()->json($materias);

    }


    public function store(Request $request)
    {

        
        $respuesta = [];
        $validar = $this->validar($request->all());
        if(!is_array($validar)){
            Materias::create($request->all());
            array_push($respuesta,['status'=>'success']);
            return response()->json($respuesta);
        }
        else{
            return response()->json($validar);
        }

    }

    public function show($id)
    {
        $materias = Materias::find($id);
        return response()->json($materias);

    }


    public function update(Request $request, $id)
    {
        $respuesta=[];
        $validar = $this->validar($request->all());
        if(!is_array($validar)){
            $profesor = materias::find($id);
            if($profesor){
                $profesor->fill($request->all())->save();
                array_push($respuesta,['status'=>'success']);
            }
            else{
                array_push($respuesta,['status'=>'error']);
                array_push($respuesta,['errors'=>['id' => ['No existe el ID']]]);
            }
            return response()->json($respuesta);
        }
        else{
            return response()->json($validar);
        }

    }


    public function destroy($id)
    {
        $respuesta=[];
        $materias = materias::find($id);
        if($materias){
            $materias->delete();
            array_push($respuesta,['status'=>'success']);
        }
        else{
            array_push($respuesta,['status'=>'error']);
            array_push($respuesta,['errors'=>['id' => ['No existe el ID']]]);
        }
        return response()->json($respuesta);

       

    }
    public function validar($parametros){
        $respuesta = [];
        $messages= [
            'max' => 'El campo :attribute NO debe tener más de :max caracteres',
            'required' => 'El campo :attribute NO debe de estar vacío',
            'price.numeric' => 'El precio debe ser numérico'
        ];
        $attributes = [
            'descripcion' => 'descripcion',
            'nombre' => 'nombre',
            'creditos' => 'creditos',
            'area_conocimiento' => 'area_conocimiento',
            'opciones' => 'opciones',

        ];
        $validacion= Validator::make($parametros,
        [
            'descripcion'=>'required|max:80',
            'nombre'=>'required|max:150',
            'creditos'=>'required|numeric|max:10',
            'area_conocimiento'=>'required|max:100',
            'opciones'=>'required|',
        ],$messages,$attributes);
        if($validacion->fails()){
            array_push($respuesta,['status'=>'error']);
            array_push($respuesta,['errors'=>$validacion->errors()]);
            return $respuesta;
        }
        else{
            return true;
        }
    }


}