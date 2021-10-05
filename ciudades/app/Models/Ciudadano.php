<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudadano extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function ciudad()
    {
        return $this->belongsTo(Ciudad::class);
    }
}
