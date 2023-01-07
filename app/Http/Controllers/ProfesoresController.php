<?php

namespace App\Http\Controllers;

use App\Models\Profesores;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;


class ProfesoresController extends Controller
{

    public function index()
    {
        $profesores = Profesores::all();
        return response()->json($profesores);

    }


    public function store(Request $request)
    {

        
        $respuesta = [];
        $validar = $this->validar($request->all());
        if(!is_array($validar)){
            Profesores::create($request->all());
            array_push($respuesta,['status'=>'success']);
            return response()->json($respuesta);
        }
        else{
            return response()->json($validar);
        }

    }

    public function show($id)
    {
        $profesores = Profesores::find($id);
        return response()->json($profesores);

    }


    public function update(Request $request, $id)
    {
        $respuesta=[];
        $validar = $this->validar($request->all());
        if(!is_array($validar)){
            $profesor = Profesores::find($id);
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
        $profesores = Profesores::find($id);
        if($profesores){
            $profesores->delete();
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
            'documento' => 'documento',
            'nombre' => 'nombre',
            'apellido' => 'apellido',
            'email' => 'email',
            'telefono' => 'telefono',
            'dirección' => 'direccion',
            'ciudad' => 'ciudad'
        ];
        $validacion= Validator::make($parametros,
        [
            'documento'=>'required|numeric|',
            'nombre'=>'required|max:80',
            'apellido'=>'required|max:150',
            'email'=>'required|email|max:150',
            'telefono'=>'required|max:150',
            'direccion'=>'required|max:150',
            'ciudad'=>'required|max:150'
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

