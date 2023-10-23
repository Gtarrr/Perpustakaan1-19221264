<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PenerbitModel;

class TbPenerbit extends BaseController
{
    public function index() {
    }
    
    public function tampil()
    {
        return view('penerbit/tampildata');
    }

    public function create()
    {

        $model = new PenerbitModel();
        $data = [
            'penerbit' => request()->getPost('penerbit'),
            'kota' => request()->getPost('kota'),
        ];
        // var_dump($data);
        // return;

        $id = (int) request()->getPost('id');
        if ($id > 0) {
            $r = $model->update($id, $data);
        } else {
            $r = $model->insert($data);
        }
        if ($r != false) {
            return redirect()->to(base_url('penerbit'));
        }
    }

    public function show()
    {
        $model = new PenerbitModel();

        return view('penerbit/table', [
            'data_penerbit' => $model->findAll()

        ]);
    }

    public function form()
    {
        return view('penerbit/form');
    }

    public function delete()
    {
        $id = request()->getPost('id');
        $model = new PenerbitModel();
        $r = $model->delete($id);
        return redirect()->to(base_url('penerbit'));
    }

    public function edit($id)
    {
        $model = new PenerbitModel();
        $data = $model->where('id', $id)->first();
        return view('penerbit/form', [
            'data' => $data
        ]);
    }
}