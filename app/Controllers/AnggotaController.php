<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AnggotaModel;

class AnggotaController extends BaseController
{
    public function index()
    {
        //
    }
    public function tampil()
    {
        return view('anggota/tampildata');
    }

    public function create()
    {

        $model = new AnggotaModel();
        $data = [
            'email' => request()->getPost('email'),
            'katasandi' => request()->getPost('katasandi'),
            'nama_lengkap' => request()->getPost('nama_lengkap'),
            'jenis_kelamin' => request()->getPost('jenis_kelamin'),
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
            return redirect()->to(base_url('anggota'));
        }
    }

    public function show()
    {
        $model = new AnggotaModel();

        return view('anggota/tableanggota', [
            'data_anggota' => $model->findAll()

        ]);
    }

    public function form()
    {
        return view('anggota/form');
    }

    public function delete()
    {
        $id = request()->getPost('id');
        $model = new AnggotaModel();
        $r = $model->delete($id);
        return redirect()->to(base_url('anggota'));
    }

    public function edit($id)
    {
        $model = new AnggotaModel();
        $data = $model->where('id', $id)->first();
        return view('anggota/form', [
            'data' => $data
        ]);
    }
}
