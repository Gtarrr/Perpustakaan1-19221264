<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BukuModel;

class TbBuku extends BaseController
{
    public function index()
    {
        //
    }
    public function tampil()
    {
        return view('buku/tampildata');
    }

    public function from()
    {
        return view('buku/from');
    }

    public function tambah()
    {
        $m = new BukuModel();
        return $m->insert([
            'judul' => request()->getvar('judul'),
            'edisi' => request()->getvar('edisi'),
            'cetakan' => request()->getvar('cetakan'),
            'sinopsis' => request()->getvar('sinopsis'),
            'tb_kategori_id' => request()->getvar('tb_kategori_id'),
            'tb_penerbit_id' => request()->getvar('tb_penerbit_id'),
            'isbn' => request()->getvar('isbn'),
            'penulis' => request()->getvar('penulis'),

        ]);
    }
}
