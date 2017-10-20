<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Product;

class ProductTest extends TestCase
{

    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $product = factory(Product::class)->create();
        var_dump((new Product)->updateOrCreate(['id' => $product->id], ['price' => 7.77]));
        var_dump(Product::all());
        die;
        $this->assertTrue(true);
    }
}
