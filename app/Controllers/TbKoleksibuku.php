<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KoleksibukuModel;

class TbKoleksibuku extends BaseController
{
    public function index()
    {
        //
    }

    public function tampil()
    {
        return view('koleksibuku/tampildata');
    }

    public function from()
    {
        return view('koleksibuku/from');
    }

    public function tambah()
    {
        $model = new KoleksibukuModel();
        $data = [
            'tb_buku_id' => request()->getvar('tb_buku_id'),
            'nomor_koleksi' => request()->getvar('nomor_koleksi'),
            'status_koleksi' => request()->getVar('status_koleksi'),
        ];

        $id = (int) request()->getPost('id');
        if ($id > 0) {
            $r = $model->update($id, $data);
        } else {
            $r = $model->insert($data);
        }
        if ($r != false) {
            return redirect()->to(base_url('koleksibuku'));
        }
    }

    public function show()
    {
        $model = new KoleksibukuModel();

        return view('koleksibuku/table', [
            'data_koleksibuku' => $model->findAll()

        ]);
    }

    public function form()
    {
        return view('koleksibuku/form');
    }

    public function delete()
    {
        $id = request()->getPost('id');
        $model = new KoleksibukuModel();
        $r = $model->delete($id);
        return redirect()->to(base_url('koleksibuku'));
    }

    public function edit($id)
    {
        $model = new KoleksibukuModel();
        $data = $model->where('id', $id)->first();
        return view('koleksibuku/form', [
            'data' => $data
        ]);
    }
}
