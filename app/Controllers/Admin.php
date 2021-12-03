<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Carbon\Carbon;

class Admin extends BaseController
{
    public function index()
    {
        $db = db_connect();
        $now = Carbon::now()->isoFormat('YYYY-MM-DD');
        $checkout_count_sql = "SELECT * FROM checkouts WHERE created_at BETWEEN '$now 00:00:00' AND '$now 23:59:59' AND deleted_at IS NULL";

        return view('Admin/index', [
            'product_count' => (new \App\Models\ProductModel)->countAll(),
            'checkout_count' => (new \App\Models\CheckoutModel)->countAll(),
            'orders_not_sent' => (new \App\Models\CheckoutModel)->where('is_sent', null)->countAllResults(),
            'user_count' => (new \App\Models\UserModel)->countAll(),
            'checkout_count' => $db->query($checkout_count_sql)->getNumRows(),
        ]);
    }
}
