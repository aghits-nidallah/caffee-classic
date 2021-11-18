<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class Product extends BaseController
{
    private ProductModel $product;

    public function __construct()
    {
        $this->product = new ProductModel();
        $this->product->asObject();
    }

    public function index()
    {
        return view('Admin/Product/index', [
            'products' => $this->product->paginate(10),
            'pager' => $this->product->pager,
        ]);
    }

    public function new()
    {
        return view('Admin/Product/new');
    }

    public function create()
    {
        $valid = $this->product->validate($this->request->getPost('product_photo'));

        if (!$valid) {
            return redirect()->to('Product/new')->with('validation_errors', $this->product->errors());
        }

        try {
            $path = $this->request->getFile('product_photo')->store();
        } catch (\Exception $e) {
            return redirect()->to('Product/new')->with('error', 'Terjadi kesalahan pada saat mengunggah foto produk: ' . $e->getMessage());
        }

        try {
            $this->product->setValidationRule('product_photo', 'permit_empty');

            $data = [
                'product_photo_path' => $path,
                'name' => $this->request->getPost('name'),
                'price' => $this->request->getPost('price'),
                'stock' => $this->request->getPost('stock'),
                'description' => $this->request->getPost('description'),
            ];

            if (!$this->product->insert($data)) {
                return redirect()->to('Product/new')->with('validation_errors', $this->product->errors());
            }
        } catch (\Exception $e) {
            return redirect()->to('Product/new')->with('error', 'Terjadi kesalahan pada saat menambahkan produk: ' . $e->getMessage());
        }

        return redirect()->to('Product/new')->with('success', 'Berhasil menambah produk.');
    }

    public function show($id)
    {
        if (!$this->product->find($id)) {
            return view('404');
        }

        return view('Product/show', [
            'product' => $this->product->find($id),
        ]);
    }

    public function edit($id)
    {
        return view('Admin/Product/edit', [
            'product' => $this->product->find($id),
        ]);
    }

    public function update($id)
    {
        if ($this->request->getFile('product_photo')->isValid()) {
            $valid = $this->product->validate($this->request->getPost('product_photo'));

            if (!$valid) {
                return redirect()->to('Product/' . $id . '/edit')->with('validation_errors', $this->product->errors());
            }

            try {
                $path = $this->request->getFile('product_photo')->store();

                $this
                    ->product
                    ->setValidationRule('product_photo', 'permit_empty')
                    ->update($id, [
                        'product_photo_path' => $path,
                    ]);
            } catch (\Exception $e) {
                return redirect()->to('Product/' . $id . '/edit')->with('error', 'Terjadi kesalahan pada saat mengunggah foto produk: ' . $e->getMessage());
            }
        }

        try {
            $this->product->setValidationRules([
                ['product_photo' => 'permit_empty'],
                ['product_photo_path' => 'permit_empty'],
            ]);

            $data = [
                'name' => $this->request->getPost('name'),
                'price' => $this->request->getPost('price'),
                'stock' => $this->request->getPost('stock'),
                'description' => $this->request->getPost('description'),
            ];

            if (!$this->product->update($id, $data)) {
                return redirect()->to('Product/' . $id . '/edit')->with('validation_errors', $this->product->errors());
            }
        } catch (\Exception $e) {
            return redirect()->to('Product/' . $id . '/edit')->with('error', 'Terjadi kesalahan pada saat mengubah produk: ' . $e->getMessage());
        }

        return redirect()->to('Product/' . $id . '/edit')->with('success', 'Berhasil mengubah produk.');
    }

    public function delete($id)
    {
        try {
            $this->product->delete($id, true);
        } catch (\Exception $e) {
            return redirect()->to('Product')->with('error', 'Terjadi kesalahan pada saat menghapus produkL ' . $e->getMessage());
        }

        return redirect()->to('Product')->with('success', 'Berhasil menghapus produk.');
    }
}
