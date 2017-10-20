<?php

namespace App\Repository;

class OrderRepository
{

    public function createOrder()
    {
        return factory(\App\Order::class)->create();
    }
}
