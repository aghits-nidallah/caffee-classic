<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class User extends ResourceController
{
    protected $modelName = \App\Models\UserModel::class;

    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        return view('Admin/User/index', [
            'users' => $this->model->findAll(),
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
        return view('Admin/User/new');
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        if ($this->request->getPost('password') != $this->request->getPost('password_confirm')) {
            return redirect()->back()->with('error', 'Password konfirmasi tidak sama.')->withInput();
        }

        try {
            $inserted = $this->model->insert($this->request->getPost([
                'name',
                'username',
                'email',
                'password',
            ]), true);

            if (!$inserted) {
                return redirect()->back()->with('validation_errors', $this->model->errors())->withInput();
            }

            $this->model->update($inserted, [
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menambahkan user: ' . $e->getMessage())->withInput();
        }

        return redirect()->back()->with('success', 'Berhasil menambahkan user.');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        return view('Admin/User/edit', [
            'user' => $this->model->find($id),
        ]);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        if ($this->request->getPost('password') && ($this->request->getPost('password') == $this->request->getPost('password_confirmation'))) {
            $this->model->update($id, [
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            ]);
        } else {
            return redirect()->back()->with('error', 'Password konfirmasi tidak sama.')->withInput();
        }

        try {
            $this->model->setValidationRules([
                'password' => 'permit_empty|string',
            ]);

            $inserted = $this->model->update($id, $this->request->getPost([
                'name',
                'username',
                'email',
            ]), true);

            if (!$inserted) {
                return redirect()->back()->with('validation_errors', $this->model->errors())->withInput();
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal memperbarui user: ' . $e->getMessage())->withInput();
        }

        return redirect()->back()->with('success', 'Berhasil memperbarui user.');
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
            return redirect()->back()->with('error', 'Gagal menghapus data: ' . $e->getMessage());
        }

        return redirect()->back()->with('success', 'Berhasil menghapus data.');
    }
}
