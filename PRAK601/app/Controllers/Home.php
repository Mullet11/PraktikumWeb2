<?php

namespace App\Controllers;

use App\Models\BiodataModel;

class Home extends BaseController
{
    public function index(): string
    {
        $model = new BiodataModel();
        $data = $model->getBiodata();

        return view('beranda', $data);
    }

    public function profil(): string
    {
        return view('profil');
    }
}
