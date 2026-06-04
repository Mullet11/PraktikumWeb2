<?php

namespace App\Models;
use CodeIgniter\Model;

class BiodataModel extends Model
{
    public function getBiodata()
    {
        return [
            'nama' => "Muhammad Rakha' Athallah",
            'nim' => "2410817310002"
        ];
    }
}