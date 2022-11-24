<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosis extends Model
{
    use HasFactory;
    public $gramos;
    public $onzas;
    public $cucharadas;

    public function __construct()
    {
    }

    //METODO PARA ACTUALIZAR
    public function Actualizar($gramos)
    {
        $this->gramos = $gramos;
        return $this->gramos;
    }
}
