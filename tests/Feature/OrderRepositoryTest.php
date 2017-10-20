<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Repository\OrderRepository;
use App\Order;
use App\OrderProduct;
use App\Product;

class OrderRepositoryTest extends TestCase
{

    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreateOrder()
    {

        $repo = new OrderRepository;
        $repo->createOrder();
        $this->assertEquals(Order::count(), 1);
    }
}
