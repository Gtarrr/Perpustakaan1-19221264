<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return "KHOIRUL FADLI RITONGA SIAP SIAP ATM MU DIBEKUKAN";
    }
    
    public function dashboard(){
        return view('dashboard/utama');
    }
}
