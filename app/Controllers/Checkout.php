<?php

namespace App\Controllers;

use Carbon\Carbon;
use CodeIgniter\RESTful\ResourceController;

class Checkout extends ResourceController
{
    protected $modelName = \App\Models\CheckoutModel::class;
    private $_has_errors = false;
    private $_last_checkout_id = null;

    public function index()
    {
        $date_from = $this->request->getGet('date_from') ?? Carbon::now()->subDays(30)->isoFormat('YYYY-MM-DD');
        $date_to = $this->request->getGet('date_to') ?? Carbon::now()->isoFormat('YYYY-MM-DD');

        $db = db_connect();
        $sql = "SELECT * FROM checkouts WHERE created_at BETWEEN '$date_from 00:00:00' AND '$date_to 23:59:59' AND deleted_at IS NULL";
        $checkouts = $db->query($sql)->getResultObject();

        return view('Admin/Checkout/index', [
            'date_from' => $date_from,
            'date_to' => $date_to,
            'checkouts' => $checkouts,
        ]);
    }

    public function show($id = null)
    {
        if ($id == null) return "Illegal action";

        return view('Admin/Checkout/show', [
            'checkout_detail' => (new \App\Models\CheckoutDetailModel())
                ->join('products', 'products.id = checkout_details.product_id', 'left')
                ->select('checkout_details.*, products.name, products.product_photo_path')
                ->where('checkout_id', $id)
                ->findAll(),
            'checkout' => $this->model->find($id),
        ]);
    }

    public function update($id = null)
    {
        if ($id == null) return "Illegal action";

        try {
            $this->model->update($id, [
                'courier' => $this->request->getPost('courier'),
                'tracking_id' => $this->request->getPost('tracking_id'),
                'notes' => $this->request->getPost('notes'),
                'is_sent' => 1,
            ]);
        } catch (\Exception $e) {
            return redirect()->to('admin/checkout/' . $id)->with('error', 'Terjadi kesalahan dalam mengkonfirmasi pesanan: ' . $e->getMessage())->withInput();
        }

        return redirect()->to('admin/checkout/' . $id)->with('success', 'Berhasil mengkonfirmasi pesanan.');
    }

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
            $this->_last_checkout_id = $checkout_id;

            if ($this->_has_errors) {
                $this->model->delete($checkout_id);
                return redirect()->to('/checkout')->with('error', 'Terjadi kesalahan dalam menginput detail checkout ke database, mohon hubungi tim pengembang.')->withInput();
            }
        } catch (\Exception $e) {
            $this->model->delete($this->_last_checkout_id);
            return redirect()->to('/checkout')->with('error', 'Terjadi kesalahan dalam menginput data ke database: ' . $e->getMessage())->withInput();
        }

        return redirect()->to('/checkout')->with('success', 'Berhasil menambahkan produk ke keranjang. Tim kami akan segera menghubungi Anda.');
    }

    public function delete($id = null)
    {
        if ($id == null) return "Illegal action";

        try {
            $this->model->delete($id);
        } catch (\Exception $e) {
            return redirect()->to('/admin/checkout')->with('error', 'Terjadi kesalahan dalam menghapus data: ' . $e->getMessage())->withInput();
        }

        return redirect()->to('/admin/checkout')->with('success', 'Berhasil menghapus data.');
    }

    private function _create_checkout_details($checkout_id, $request)
    {
        $checkouts = json_decode($request['checkout_detail']);
        $checkout_detail_model = new \App\Models\CheckoutDetailModel();

        foreach($checkouts as $checkout) {
            $data = [
                'checkout_id' => $checkout_id,
                'product_id' => $checkout->id,
                'quantity' => $checkout->quantity ?? 1,
                'sold_price' => $checkout->price,
                'subtotal' => $checkout->price * ($checkout->quantity ?? 1),
            ];

            $validated = $checkout_detail_model->validate($data);

            if (!$validated) return $this->_has_errors = true;

            $checkout_detail_model->insert($data, true);
        }
    }
}
