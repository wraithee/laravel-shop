<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{

    use RefreshDatabase;

    public function test_products_page_loads_successfully()
    {
        $user = User::factory()->create();
        User::whereId($user->id)->update(['is_admin' => 1]);
        $user->refresh();
        $this->actingAs($user);

        $response = $this->get('/products');
        $response->assertStatus(200);
    }

    public function test_guest_is_redirect_to_login()
    {
        $response = $this->get('/products');
        $response->assertRedirect('/login');
    }
}
