<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KategoriModel;

class TbKategori extends BaseController
{
    public function index()
    {
        //
    }
    public function tampil()
    {
        return view('kategori/Tampildata');
    }
    public function from()
    {
            return view('kategori/from');

    }
    public function tambah()
    {
            $m = new KategoriModel();
            return $m ->insert([
                'kategori' =>request()->getvar('kategori'),
                'kode_dcc' =>request()->getvar('kode_dcc'),
            ]);
    }
}
