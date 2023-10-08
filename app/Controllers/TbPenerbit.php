<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PenerbitModel;

class TbPenerbit extends BaseController
{
    public function index()
    {
        //
    }
    public function tampil()
    {
        return view('penerbit/tampildata');
    }
    public function from()
    {
        return view('penerbit/from');
    }
    public function tambah()
    {
        $m = new PenerbitModel();
        return $m->insert([
            'penerbit' => request()->getvar('penerbit'),
            'kota' => request()->getvar('kota')
        ]);
    }

}
