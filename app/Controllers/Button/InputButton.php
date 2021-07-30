<?php

namespace App\Controllers;

use App\Models\UserModel;

class InputButton extends BaseController
{
    public function create()
    {

        return view('button/create');
    }
}
