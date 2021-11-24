<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Checkout extends ResourceController
{
    protected $modelName = \App\Models\CheckoutModel::class;
    private $_has_errors = false;

    public function create()
    {
        $validated = $this->model->validate($this->request->getPost([
            'name',
            'phone_number',
            'address',
            'payment_proof',
            'total',
        ]));

        if (!$validated) return redirect()->to('/checkout')->with('errors', $this->model->errors())->withInput();

        try {
            $path = $this->request->getFile('payment_proof')->store();

            $this->model->setValidationRule('payment_proof', 'permit_empty');
            $checkout_id = $this->model->insert([
                'buyer_name' => $this->request->getPost('name'),
                'buyer_phone_number' => $this->request->getPost('phone_number'),
                'buyer_address' => $this->request->getPost('address'),
                'payment_proof_file' => $path,
                'total' => $this->request->getPost('total'),
            ], true);

            $this->_create_checkout_details($checkout_id, $this->request->getPost());

            if ($this->_has_errors) {
                return redirect()->to('/checkout')->with('error', 'Terjadi kesalahan dalam menginput detail checkout ke database, mohon hubungi tim pengembang.')->withInput();
            }
        } catch (\Exception $e) {
            return redirect()->to('/checkout')->with('error', 'Terjadi kesalahan dalam menginput data ke database: ' . $e->getMessage())->withInput();
        }

        return redirect()->to('/checkout')->with('success', 'Berhasil menambahkan produk ke keranjang. Tim kami akan segera menghubungi Anda.');
    }

    private function _create_checkout_details($checkout_id, $request)
    {
        $checkouts = json_decode($request['checkout_detail']);
        $checkout_detail_model = new \App\Models\CheckoutDetailModel();

        foreach($checkouts as $checkout) {
            $data = [
                'checkout_id' => $checkout_id,
                'product_id' => $checkout->id,
                'quantity' => $checkout->quantity,
                'sold_price' => $checkout->price,
                'subtotal' => $checkout->price * $checkout->quantity,
            ];

            $validated = $checkout_detail_model->validate($data);

            if (!$validated) return $this->_has_errors = true;

            $checkout_detail_model->insert($data, true);
        }
    }
}
