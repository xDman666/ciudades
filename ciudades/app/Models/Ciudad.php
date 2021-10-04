<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    use HasFactory;

    protected  $guarded=[];

    public function toString(){
        $metro = $this->metro ? "Sí" : "No";
        return "ID:".$this->id." |  Nombre: ".$this->nombre."  |  Habitantes: ".$this->habitantes."  |  Código Postal: ".$this->codigo_postal."  |  Tiene Metro: ".$metro;
    }

    public function ciudadanos(){
        return $this->hasMany(Ciudadano::class);
    }
}
