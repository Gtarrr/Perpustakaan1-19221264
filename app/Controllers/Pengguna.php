<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PenggunaModel;

class Pengguna extends BaseController
{
    public function index()
    {
        //
    }

    public function tampil()
    {
        return view('pengguna/tampildata');
    }

    public function from()
    {
        return view('pengguna/from');
    }

    public function tambah()
    {
        $m = new PenggunaModel();
        return $m->insert([
            'email' => request()->getvar('email'),
            'nama_lengkap' => request()->getvar('nama_lengkap'),
            'tingkat' => request()->getVar('tingkat'),
            'katasandi' => request()->getvar('katasandi'),

        ]);
    }
}
