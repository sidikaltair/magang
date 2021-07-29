<?php

namespace App\Controllers;

use App\Models\ModelKertas;

class Createbtn extends BaseController
{
    public function btnkertas()
    {
        $data = [
            'title' => 'HOME | dashboard',
            'jumbo' => 'Tambah kertas'

        ];
        return view('subbahan/create', $data);
    }
}
