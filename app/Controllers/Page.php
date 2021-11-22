<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Page extends BaseController
{
    public function index()
    {
        $carts = (new \App\Models\CartModel())
            ->join('products', 'products.id = carts.product_id', 'left')
            ->select('carts.*, products.name, products.description, products.product_photo_path, products.price')
            ->where('client_ip', $this->request->getIPAddress())
            ->findAll();

        $cart = array_map(function($cart) {
            return $cart->product_id;
        }, $carts);

        return view('index', [
            'products' => (new \App\Models\ProductModel)->findAll(),
            'cart_display' => $carts,
            'products_in_cart' => $cart,
            'cart_count' => count($cart),
        ]);
    }
}
