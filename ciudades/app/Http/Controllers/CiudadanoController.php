<?php

namespace App\Http\Controllers;

use App\Models\Ciudadano;
use Illuminate\Http\Request;

class CiudadanoController extends Controller
{
    //

    public function store(Request $request){
        //dd($_GET["ciudad_id"]);
        Ciudadano::create($request->all());
        return redirect("api/ciudadanos/{$request->ciudad_id}");
    }
}
