<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Page extends BaseController
{
    public function index()
    {
        return view('index', [
            'products' => (new \App\Models\ProductModel)->findAll(),
        ]);
    }
}
