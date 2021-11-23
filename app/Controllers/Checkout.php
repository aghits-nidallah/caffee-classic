<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Checkout extends ResourceController
{
    protected $modelName = \App\Models\CheckoutModel::class;

    public function create()
    {
        $validated = $this->model->validate($this->request->getPost([
            'name',
            'phone_number',
            'address',
            'payment_proof',
        ]));

        if (!$validated) return redirect()->to('/checkout')->with('errors', $this->model->errors())->withInput();

        try {
            $path = $this->request->getFile('payment_proof')->store();

            $this->model->setValidationRule('payment_proof', 'permit_empty');
            $this->model->insert([
                'buyer_name' => $this->request->getPost('name'),
                'buyer_phone_number' => $this->request->getPost('phone_number'),
                'buyer_address' => $this->request->getPost('address'),
                'payment_proof_file' => $path,
            ]);
        } catch (\Exception $e) {
            return redirect()->to('/checkout')->with('error', 'Terjadi kesalahan dalam menginput data ke database: ' . $e->getMessage())->withInput();
        }

        return redirect()->to('/checkout')->with('success', 'Berhasil menambahkan produk ke keranjang.');
    }
}
