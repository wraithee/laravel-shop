<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{

    use RefreshDatabase;

    public function test_products_page_loads_successfully()
    {
        $response = $this->get('/products');
        $response->assertStatus(200);
    }
}
