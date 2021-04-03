<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrdersCreateRequest;

class OrdersController extends Controller
{
    public function create(OrdersCreateRequest $request)
    {
        return [
            'status' => 'success',
            'message' => 'Order has been added'
        ];
    }
}
