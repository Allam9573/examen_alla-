<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TipoAsientoModel;

class TipoAsiento extends Controller
{
    public function index()
    {
        $tiposAsientos = TipoAsientoModel::all();
        return view("tipoAsientos", compact("tiposAsientos"));
    }
    public function agregarTipoAsiento()
    {
        return view("agregarTipoAsiento");
    }
    public function guardarTipoAsiento(Request $request)
    {
        $nuevoTipoAsiento = new TipoAsientoModel();
        $nuevoTipoAsiento->descripcion = $request->input("descripcion");
        $nuevoTipoAsiento->precio = $request->input("precio");
        $nuevoTipoAsiento->estado = $request->input("estado");
        $nuevoTipoAsiento->save();
        return redirect("/tipo-asiento");
    }
    public function editarTipoAsiento($id)
    {
        $tipoAsiento = TipoAsientoModel::find($id);
        return view("editarAsiento", compact("tipoAsiento"));
    }
    public function actualizarTipoAsiento(Request $request, $id)
    {
        $tipoAsiento = TipoAsientoModel::find($id);
        $tipoAsiento->descripcion = $request->input("descripcion");
        $tipoAsiento->precio = $request->input("precio");
        $tipoAsiento->estado = $request->input("estado");
        $tipoAsiento->save();
        return redirect("/tipo-asiento");

    }
    public function eliminarTipoAsiento($id)
    {
        $tipoAsiento = TipoAsientoModel::find($id);
        if($tipoAsiento->estado == "A"){
            $tipoAsiento->estado = "I";
        }
        $tipoAsiento->save();
        return redirect("tipoAsiento");

    }
}
