<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\VuelosModel;
use Illuminate\Http\Request;

class Vuelos extends Controller
{
    public function index()
    {
        $vuelos = VuelosModel::all();
        return view("vuelos", compact("vuelos"));
    }
    public function agregarVuelo()
    {
        return view("nuevoVuelo");
    }
    public function guardarVuelo(Request $request)
    {
        $nuevoVuelo = new VuelosModel();
        $nuevoVuelo->numeroVuelo = $request->input("numeroVuelo");
        $nuevoVuelo->origen = $request->input("origen");
        $nuevoVuelo->destino = $request->input("destino");
        $nuevoVuelo->fechaDeSalida = $request->input("fecha");
        $nuevoVuelo->numeroAsientos = $request->input("cantidad");
        $nuevoVuelo->save();
        return redirect("vuelos");
    }
    public function editarVuelo($id){
        $vuelo = VuelosModel::find($id);
        return view("editarVuelo", compact("vuelo"));
    }
    public function actualizarVuelo(Request $request, $id){
        $vuelo = VuelosModel::find($id);
        $vuelo->origen = $request->input("origen");
        $vuelo->destino = $request->input("destino");
        $vuelo->save();
        return redirect("vuelos");
    }
    public function eliminarVuelo($id){
        $vuelo = VuelosModel::find($id);
        $vuelo->delete();
        return redirect("vuelos");
    }
}
