<?php

namespace Tests\Feature;

use App\Models\Receta;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RecetaTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_Existe_una_receta()
    {

        $receta = Receta::factory()->make();

        $this->assertEquals('/recetas/'. $receta->titulo, $receta->path());
    }

    public function test_actualizar_titulo_receta()
    {

        $receta = Receta::factory()->make();

        $receta->ActualizarTitulo("RECETA-Pollo");

        $this->assertEquals($receta->titulo, "RECETA-Pollo");
    }
}
