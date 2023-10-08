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
    public function from()
    {
        return view('anggota/form');
    }
    public function tambah()
    {
        $m = new AnggotaModel();
        return $m->insert([
            'email' => request()->getvar('email'),
            'katasandi' => request()->getvar('katasandi'),
            'nama_lengkap' => request()->getvar('nama_lengkap'),
            'jenis_kelamin' => request()->getvar('jenis_kelamin'),
            'alamat' => request()->getvar('alamat'),

        ]);
    }
}
