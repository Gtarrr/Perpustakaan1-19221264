<?php

namespace App\Controllers; {
}

class Home extends BaseController
{
    public function index(): string
    {
        return view(
            'dashboard/pustakawan.php',
            [
                'pengguna' => session()->get('pengguna')
            ]
        );
    }

    public function dashboard_anggota()
    {
        return view('dashboard/perpustakaanAnggota.php', [
            'anggota' => session()->get('anggota')
        ]);
    }
}
