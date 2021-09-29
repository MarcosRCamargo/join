<?php

namespace Tests\Feature;

use App\Models\Categoria;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CategoriaTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCategoriaTest()
    {
        $response = $this->get('/categoria');

        $response->assertStatus(200);
    }
    public function testCreateCategoria()
    {
        $categoria = Categoria::factory()->create();
        $this->assertModelExists($categoria);
    }
}
