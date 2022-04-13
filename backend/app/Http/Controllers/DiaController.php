<?php

namespace App\Http\Controllers;

use App\Models\Dia;
use DateTime;
use Illuminate\Http\Request;

class DiaController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            "inicio" => "required|date",
            "termino" => "required|date",
        ]);

        try {
            $inicio = new DateTime($request->inicio);
            $termino = new DateTime($request->termino);
            $start = $inicio;
            do {
                $dia = new Dia();
                $dia->fecha = $start;
                $dia->descripcion = "Carga Inicial";
                $dia->estado = false;
                $dia->imagenes = "";
                $dia->save();
                $start->modify("+ 1 days");
            } while ($start <= $termino);
        } catch (\Throwable $th) {
            return json_encode(["status" => "ERROR", "message" => "Hubo un problema, por favor reintente"]);
        }
        return json_encode(["status" => "OK", "message" => ($inicio->diff($termino))->days . " días agregados"]);
    }

    public function show($inicio = null, $termino = null)
    {
        $dias = ($inicio and $termino) ? Dia::whereBetween("fecha", [$inicio, $termino])->get() : Dia::all();
        return $dias->toJson();
    }
}
