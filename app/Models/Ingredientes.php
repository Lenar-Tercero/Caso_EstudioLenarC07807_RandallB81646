<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredientes extends Model
{
    use HasFactory;
    public $ingrediente1;
    public $ingrediente2;

    public function __construct()
    {
    }

    //METODO PARA ACTUALIZAR
    public function Actualizar($ingrediente1)
    {
        $this->ingrediente1 = $ingrediente1;
        return $this->ingrediente1;
    }
}
