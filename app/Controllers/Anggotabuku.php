<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BukuModel;

class Anggotabuku extends BaseController
{
    public function show()
    {
        $m = new BukuModel();

        return view('/anggotabuku/databuku.php', [
            'data_buku' => $m->findAll()
        ]);
    }
}
