<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    use HasFactory;
    public $titulo;
    public $porciones;
    public $instrucciones;

    public function __construct()
    {
    }

 //METODO PARA HACER LA PRUEBA UNITARIA
 public function path()
 {
     return '/recetas/'. $this->titulo;
 }

    //METODO PARA ACTUALIZAR
    public function ActualizarTitulo($titulo)
    {
        $this->titulo = $titulo;
        return $this->titulo;
    }
}
