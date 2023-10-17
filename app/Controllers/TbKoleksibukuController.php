<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KoleksibukuModel;

class TbKoleksibukuController extends BaseController
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
        $m = new KoleksibukuModel();
        $data = [
            'tb_buku_id' => request()->getPost('tb_buku_id'),
            'nomor_koleksi' => request()->getPost('nomor_koleksi'),
            'status_koleksi' => request()->getPost('status_koleksi'),
        ];
        $id = (int) request()->getPost('id');
        if ($id > 0) {
            $r = $m->update($id, $data);
        } else {
            $r = $m->insert($data);
            $id = $r;
        }
        if ($r != false) {
            return redirect()->to(base_url('koleksibuku'));
        }
    }

    public function show()
    {
        $m = new KoleksibukuModel();
        return view('koleksibuku/table.php', [
            'data_koleksibuku' => $m->findAll()
        ]);
    }

    public function form()
    {
        return view('koleksibuku/form.php');
    }

    public function delete()
    {
        $id = request()->getPost('id');
        $m = new KoleksibukuModel();
        $r = $m->delete('id');
        return redirect()->to(base_url('koleksibuku'));
    }

    public function edit($id)
    {
        $m = new KoleksibukuModel();
        $data = $m->where('id', $id)->first();
        return view('koleksibuku/form.php', [
            'data' => $data
        ]);
    }
}
