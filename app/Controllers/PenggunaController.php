<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PenggunaModel;

class PenggunaController extends BaseController
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
        $m = new PenggunaModel();
        $data = [
            'email' => request()->getPost('email'),
            'nama_lengkap' => request()->getPost('nama_lengkap'),
            'tingkat' => request()->getPost('tingkat'),
            'katasandi' => request()->getPost('katasandi'),
        ];
        $id = (int)request()->getPost('id');
        if ($id > 0) {
            $m->update($id, $data);
        } else {
            $m->insert($data);
        }
        return redirect()->to(base_url('pengguna'));
    }

    public function show()
    {
        $m = new PenggunaModel();
        return view('pengguna/table.php', [
            'data_pengguna' => $m->findAll()
        ]);
    }

    public function form()
    {
        return view('pengguna/form.php');
    }

    public function delete()
    {
        $id = request()->getPost('id');
        $m = new PenggunaModel();
        $r = $m->delete('id');
        return redirect()->to(base_url('pengguna'));
    }

    public function edit($id)
    {
        $m = new PenggunaModel();
        $data = $m->where('id', $id)->first();
        return view('pengguna/form.php', [
            'data' => $data
        ]);
    }
}
