<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vuelo extends Model
{
    use HasFactory;
    public $numeroDeVuelo;
    public $aeropuertoOrigen;
    public $aeropuertoDestino;

    public function __construct()
    {
    }

    //METODO PARA HACER LA PRUEBA UNITARIA
    public function obtener_numero_vuelo()
    {
        return '/vuelos/' . $this->numeroDeVuelo;
    }

    public function ActualzarNumeroVuelo($numeroDeVuelo)
    {
        $this->numeroDeVuelo = $numeroDeVuelo;
        return $this->numeroDeVuelo;
    }
}
