<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class DocumentsController extends Controller
{
    public function getData(){
        try {
            $data = Document::get();
            return response()->json($data, 200);
        } catch (\Throwable $th) {
            return response()->json(['Error ' => $th->getMessage()], 500);
        }
    }

    public function createDocument(Request $request){
        try {
            $data['titulo_documento']=$request['titulo_documento'];
            $data['descripcion']=$request['descripcion'];
            $data['fondo']=$request['fondo'];
            $data['seccion']=$request['seccion'];
            $data['serie']=$request['serie'];
            $data['area']=$request['area'];
            $data['expediente']=$request['expediente'];
            $data['año']=$request['año'];
            $data['seccion_especifica']=$request['seccion_especifica'];
            $data['seccion_comun']=$request['seccion_comun'];
            $data['inmueble']=$request['inmueble'];
            $data['mueble']=$request['mueble'];
            $data['posicion']=$request['posicion'];
            $data['observaciones']=$request['observaciones'];
            $res= Document::create($data);
            return response()->json($res, 200);
        } catch (\Throwable $th) {
            return response()->json(['Error '=> $th->getMessage()], 500);
        }
    }

    public function updateDocument(Request $request, $id){
        try {
            $data['titulo_documento']=$request['titulo_documento'];
            $data['descripcion']=$request['descripcion'];
            $data['fondo']=$request['fondo'];
            $data['seccion']=$request['seccion'];
            $data['serie']=$request['serie'];
            $data['area']=$request['area'];
            $data['expediente']=$request['expediente'];
            $data['año']=$request['año'];
            $data['seccion_especifica']=$request['seccion_especifica'];
            $data['seccion_comun']=$request['seccion_comun'];
            $data['inmueble']=$request['inmueble'];
            $data['mueble']=$request['mueble'];
            $data['posicion']=$request['posicion'];
            $data['observaciones']=$request['observaciones'];
            Document::find($id)->update($data);
            $res = Document::find($id);
            return response()->json($res, 200);
        } catch (\Throwable $th) {
            return response()->json(['Error '=> $th->getMessage()], 500);
        }
    }

    public function deleteDocument($id){
        try {
            $res= Document::find($id)->delete();
            return response()->json(["Eliminado"=>$res], 200);
        } catch (\Throwable $th) {
            return response()->json(['Error '=> $th->getMessage()], 500);
        }
    }

    public function findById($id){
        try {
            $data = Document::find($id);
            return response()->json($data, 200);
        } catch (\Throwable $th) {
            return response()->json(['Error '=> $th->getMessage()], 500);
        }
    }
}
