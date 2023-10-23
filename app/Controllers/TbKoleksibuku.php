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
        $m = new KoleksibukuModel();
        return $m->insert([
            'tb_buku_id' => request()->getvar('tb_buku_id'),
            'nomor_koleksi' => request()->getvar('nomor_koleksi'),
            'status_koleksi' => request()->getVar('status_koleksi'),
        ]);
    }
}
