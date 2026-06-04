<?php

namespace App\Controllers;
use App\Models\BiodataModel;

class Home extends BaseController
{
    public function index()
    {
        $model = new BiodataModel();
        $data = $model->getBiodata();
        $data['title'] = "Beranda - M3 UI";

        return view ('beranda', $data);
    }

    public function profil()
    {
        $data['title'] = "Profil - M3 UI";
        return view('profil');
    }
}
