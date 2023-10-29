<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PenggunaModel;

class Pengguna extends BaseController
{
    public function index()
    {
        //
    }

    public function tampil()
    {
        return view('pengguna/tampildata');
    }

    public function create()
    {

        $model = new PenggunaModel();
        $data = [
            'email' => request()->getPost('email'),
            'katasandi' => request()->getPost('katasandi'),
            'nama_lengkap' => request()->getPost('nama_lengkap'),
            'tingkat' => request()->getVar('tingkat'),
            'alamat' => request()->getPost('alamat'),
        ];
        // var_dump($data);
        // return;

        $id = (int) request()->getPost('id');
        if ($id > 0) {
            $r = $model->update($id, $data);
        } else {
            $r = $model->insert($data);
        }
        if ($r != false) {
            return redirect()->to(base_url('pengguna'));
        }
    }

    public function show()
    {
        $model = new PenggunaModel();

        return view('pengguna/table', [
            'data_pengguna' => $model->findAll()

        ]);
    }

    public function form()
    {
        return view('pengguna/form');
    }

    public function delete()
    {
        $id = request()->getPost('id');
        $model = new PenggunaModel();
        $r = $model->delete($id);
        return redirect()->to(base_url('pengguna'));
    }

    public function edit($id)
    {
        $model = new PenggunaModel();
        $data = $model->where('id', $id)->first();
        return view('pengguna/form', [
            'data' => $data
        ]);
    }
}
