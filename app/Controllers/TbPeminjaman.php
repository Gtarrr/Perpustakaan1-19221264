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

    public function from()
    {
        return view('peminjaman/from');
    }

    public function tambah()
    {
        $m = new PeminjamanModel();
        return $m->insert([
            'tgl_peminjaman' =>request()->getvar('tgl_peminjaman'),
            'tgl_harus_kembali' =>request()->getvar('tgl_harus_kembali'),
            'tgl_kembali' =>request()->getvar('tgl_kembali'),
            'tb_pengguna_id_peminjaman' =>request()->getvar('tb_pengguna_id_peminjaman'),
            'tb_pengguna_id_pengembalian' =>request()->getvar('tb_pengguna_tb_id_pengembalian'),
            'tb_anggota_id' =>request()->getvar('tb_anggota_id'),
            'tb_koleksibuku_id' =>request()->getvar('tb_koleksibuku_id'),

        ]);
    }

}
