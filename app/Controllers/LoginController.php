<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PenggunaModel;

class LoginController extends BaseController
{
    public function index()
    {
        //
    }

    public function login()
    {
        $e = request()->getPost('email');
        $k = request()->getPost('katasandi');

        $m = new PenggunaModel();
        $r = $m->where('email', $e)
            ->where('katasandi', $k)->first();

        if ($r == null) {
            return "Login Gagal";
        } else {
            session()->set('pengguna', $r);
            return redirect()->to(base_url('/'));
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('/'));
    }

    public function lupapassword()
    {
    }
}
