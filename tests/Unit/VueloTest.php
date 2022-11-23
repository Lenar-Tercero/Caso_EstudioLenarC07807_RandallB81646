<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Vuelo;

class VueloTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */


    public function test_existe_un_vuelo()
    {

        $vuelo = Vuelo::factory()->make();

        $this->assertEquals('/vuelos/' . $vuelo->numeroDeVuelo, $vuelo->obtener_numero_vuelo());
    }


    public function test_actualizar_numero_vuelo()
    {

        $vuelo = Vuelo::factory()->make();

        $vuelo->ActualzarNumeroVuelo("VUE-001");

        $this->assertEquals($vuelo->numeroDeVuelo, "VUE-001");
    }
}