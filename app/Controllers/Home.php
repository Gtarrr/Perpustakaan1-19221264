<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return "Selamat datang";
        return view('dashboard/pustakawan', [
            'pengguna' => session()->get('pengguna')
        ]);
    }

    public function dashboard()
    {
        return view('dashboard/perpustakaan.php');
    }
}
