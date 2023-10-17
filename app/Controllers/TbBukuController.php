<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BukuModel;

class TbBukuController extends BaseController
{
    public function index()
    {
        //
    }

    public function tampil()
    {
        return view('buku/tampildata');
    }

    public function create()
    {
        $m = new BukuModel();
        $data = [
            'judul' => request()->getPost('judul'),
            'edisi' => request()->getPost('edisi'),
            'cetakan' => request()->getPost('cetakan'),
            'sinopsis' => request()->getPost('sinopsis'),
            'tb_kategori_id' => request()->getPost('tb_kategori_id'),
            'tb_penerbit_id' => request()->getPost('tb_penerbit_id'),
            'isbn' => request()->getPost('isbn'),
            'penulis' => request()->getPost('penulis'),
        ];
        $id = (int) request()->getPost('id');
        if ($id > 0) {
            $r = $m->update($id, $data);
        } else {
            $r = $m->insert($data);
            $id = $r;
        }
        if ($r != false) {
            return redirect()->to(base_url('buku'));
        }
    }

    public function show()
    {
        $m = new BukuModel();
        return view('buku/table.php', [
            'data_buku' => $m->findAll()
        ]);
    }

    public function form()
    {
        return view('buku/form.php');
    }

    public function delete()
    {
        $id = request()->getPost('id');
        $m = new BukuModel();
        $r = $m->delete('id');
        return redirect()->to(base_url('buku'));
    }

    public function edit($id)
    {
        $m = new BukuModel();
        $data = $m->where('id', $id)->first();
        return view('buku/form.php', [
            'data' => $data
        ]);
    }
}
