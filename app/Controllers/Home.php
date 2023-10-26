<?php

namespace App\Controllers;{
}

class Home extends BaseController
{
    public function index(): string
    {

        return "Selamat Datang";
    }

    public function dashboard()
    {
        return view('dashboard/perpustakaan');
      
        return "selamat Datang"; 

    }

    public function dashboard(){
         return view('dashboard/utama');
    }
}