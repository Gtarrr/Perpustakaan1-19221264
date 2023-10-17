<?php

namespace App\Controllers;{
}

class Home extends BaseController
{
    public function index(): string
    {
        return "selamat Datang"; 
    }

    public function dashboard(){
         return view('dashboard/utama');
    }
}