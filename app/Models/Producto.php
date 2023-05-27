<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    public function Empleados(){
        return $this->belongsToMany(Empleado::class);
    }

    public function Usuarios(){
        return $this->belongsToMany(Usuario::class);
    }
}


