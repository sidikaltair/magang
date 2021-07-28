<?php

namespace App\Controllers;

class Supplier extends BaseController

{
    public function Kertas()
    { {
            $data = [
                'title' => 'Kertas',
                'jumbo' => 'Kertas'
            ];
            return view('subbahan/Kertas', $data);
        }
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
