<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PeminjamanModel;

class TbPeminjaman extends BaseController
{
    public function index()
    {
        //
    }
    public function tampil()
    {
        return view('peminjaman/tampildata');
    }

    public function create()
    {

        $model = new PeminjamanModel();
        $data = [
            'tgl_peminjaman' => request()->getPost('tgl_peminjaman'),
            'tgl_harus_kembali' => request()->getPost('tgl_harus_kembali'),
            'tgl_kembali' => request()->getPost('tgl_kembali'),
            'tb_pengguna_id_peminjaman' => request()->getPost('tb_pengguna_id_peminjaman'),
            'tb_pengguna_id_pembelian' => request()->getPost('tb_pengguna_id_pembelian'),
            'tb_anggota_id' => request()->getPost('tb_anggota_id'),
            'tb_koleksibuku_id' => request()->getPost('tb_koleksibuku_id'),
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
            return redirect()->to(base_url('peminjaman'));
        }
    }

    public function show()
    {
        $model = new PeminjamanModel();

        return view('peminjaman/table.php', [
            'data_peminjaman' => $model->findAll()

        ]);
    }

    public function form()
    {
        return view('peminjaman/form.php');
    }

    public function delete()
    {
        $id = request()->getPost('id');
        $model = new PeminjamanModel();
        $r = $model->delete($id);
        return redirect()->to(base_url('peminjaman'));
    }

    public function edit($id)
    {
        $model = new PeminjamanModel();
        $data = $model->where('id', $id)->first();
        return view('peminjaman/form', [
            'data' => $data
        ]);
    }
}
