<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function index()
    {
        return view('Admin/index', [
            'product_count' => (new \App\Models\ProductModel)->countAll(),
            'checkout_count' => (new \App\Models\CheckoutModel)->countAll(),
            'orders_not_sent' => (new \App\Models\CheckoutModel)->where('is_sent', null)->countAllResults(),
            'user_count' => (new \App\Models\UserModel)->countAll(),
        ]);
    }
}
