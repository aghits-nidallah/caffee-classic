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
            'user_count' => (new \App\Models\UserModel)->countAll(),
        ]);
    }
}
