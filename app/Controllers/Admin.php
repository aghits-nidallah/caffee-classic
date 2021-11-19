<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class Admin extends BaseController
{
    private ProductModel $product;

    public function __construct()
    {
        $this->product = new ProductModel();
        $this->product->asObject();
    }

    public function index()
    {
        return view('Admin/index', [
            'product_count' => $this->product->countAll(),
        ]);
    }
}
