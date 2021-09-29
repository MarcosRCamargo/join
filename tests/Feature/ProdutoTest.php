<?php

namespace Tests\Feature;

use App\Models\Produto;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ProdutoTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use DatabaseMigrations;

    public function testProdutoTest()
    {
        $response = $this->get('/produto');

        $response->assertStatus(200);
    }
}
