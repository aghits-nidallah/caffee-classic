<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class WebsiteSettings extends ResourceController
{
    protected $modelName = \App\Models\WebsiteSetting::class;

    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        return view('Admin/WebsiteSettings/index', [
            'settings' => $this->model->findAll(),
        ]);
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
        //
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        return view('Admin/WebsiteSettings/edit', [
            'setting' => $this->model->find($id),
        ]);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        try {
            $inserted = $this->model->update($id, $this->request->getPost([
                'setting_value',
            ]), true);

            if (!$inserted) {
                return redirect()->back()->with('validation_errors', $this->model->errors())->withInput();
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal memperbarui pengaturan: ' . $e->getMessage())->withInput();
        }

        return redirect()->back()->with('success', 'Berhasil memperbarui pengaturan.');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }
}
