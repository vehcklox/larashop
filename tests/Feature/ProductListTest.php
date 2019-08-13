<?php

namespace Tests\Feature;

use App\Models\Product;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductListTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function it_can_display_the_product_list()
    {
        Product::create([
            'name' => 'Test Product',
            'description' => 'Test product description',
            'price' => 1099
        ]);

        $response = $this->get('/products');

        $response->assertSee('Test Product')
            ->assertSee('$10.99');
    }
}
