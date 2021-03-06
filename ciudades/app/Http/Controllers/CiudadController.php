<?php

namespace App\Http\Controllers;

use App\Models\Ciudad;
use Illuminate\Http\Request;
use PHPUnit\Framework\Exception;

class CiudadController extends Controller
{

    public function listar()
    {
        $ciudades = Ciudad::all();
        return view("listar", ["ciudades" => $ciudades]);
    }

    public function store(Request $request)
    {
        $ciudad = Ciudad::create($request->all());
        return response($ciudad);

    }

    public function editar(Request $request)
    {
        $ciudades = Ciudad::find($_GET["id"]);
        $ciudades->update([
            'metro' => $_GET["metro"]
        ]);
        if (isset($_GET["nombre"])){
            if ($_GET["nombre"] != "") {
                $ciudades->update([
                    "nombre" => $_GET["nombre"]
                ]);
            }
            if ($_GET["habitantes"] != "") {
                $habs= $request->validate([
                    "habitantes"=> "numeric|min:1",
                ]);
                $ciudades->update([
                    "habitantes" => $habs["habitantes"]
                ]);
            }
            if ($_GET["postal"] != "") {
                $ciudades->update([
                    "codigo_postal" => $_GET["postal"]
                ]);
            }
        }
        return view("editar", ["ciudad" => Ciudad::find($_GET["id"])]);
    }

    public function listarCiudadanos($id){
        try {
            $ciudadanos= Ciudad::find($id)->ciudadanos;
            if($ciudadanos) {
                return view("ciudadanos", ['ciudadanos' => $ciudadanos, "id" => $id]);
            }
            return redirect("listar");
        } catch (\Exception $e){
            return redirect("api/listar");
        }


    }
}
