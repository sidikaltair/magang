<?php

namespace App\Controllers;

use App\Models\ModelKertas;

class Supplier extends BaseController
{
    protected $modelkertas;
    public function __construct()
    {
        $this->modelKertas = new ModelKertas();
    }
    public function Kertas()
    {
        $kertas = $this->modelKertas->findAll();

        $data = [
            'title' => 'Kertas',
            'jumbo' => 'Kertas',
            'kertas' =>  $kertas,
        ];


        return view('subbahan/Kertas', $data);
    }


    public function Lem()
    { {
            $data = [
                'title' => 'Lem',
                'jumbo' => 'Lem'
            ];
            return view('subbahan/Lem', $data);
        }
    }


    public function Plastik()
    { {
            $data = [
                'title' => 'Plastik',
                'jumbo' => 'Plastik'
            ];
            return view('subbahan/Plastik', $data);
        }
    }


    public function Tinta()
    { {
            $data = [
                'title' => 'Tinta',
                'jumbo' => 'Tinta'
            ];
            return view('subbahan/tinta', $data);
        }
    }
}
