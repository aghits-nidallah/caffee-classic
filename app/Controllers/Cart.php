<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;

class Cart extends ResourceController
{
    use ResponseTrait;

    protected $modelName = \App\Models\CartModel::class;

    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        //
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        try {
            $data = $this->model->insert([
                'client_ip' => $this->request->getIPAddress(),
                'product_id' => $this->request->getPost('product_id'),
            ], true);

            if (!$data) {
                return $this->fail([
                    'message' => 'Terjadi kesalahan',
                    'errors' => $this->model->errors(),
                ], 500);
            }
        } catch (\Exception $e) {
            return $this->fail([
                'message' => 'Terjadi kesalahan pada saat menambahkan barang ke keranjang: ' . $e->getMessage(),
            ], 500);
        }

        return $this->respondCreated([
            'data' => $this->model
                ->join('products', 'carts.product_id = products.id')
                ->select('carts.*, products.name, products.description, products.product_photo_path, products.price')
                ->where('client_ip', $this->request->getIPAddress())
                ->findAll(),
            'cart_count' => $this->model->where('client_ip', $this->request->getIPAddress())->countAllResults(),
        ]);
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        try {
            $this->model->delete($id);
        } catch (\Exception $e) {
            return $this->fail([
                'message' => 'Terjadi kesalahan pada saat menghapus barang dari keranjang: ' . $e->getMessage(),
            ], 500);
        }

        return $this->respondDeleted([
            'data' => $this->model
                ->join('products', 'carts.product_id = products.id')
                ->select('carts.*, products.name, products.description, products.product_photo_path, products.price')
                ->where('client_ip', $this->request->getIPAddress())
                ->findAll(),
            'cart_count' => $this->model->where('client_ip', $this->request->getIPAddress())->countAllResults(),
        ]);
    }
}
