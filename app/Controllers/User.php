<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        return view('user/v_user_index');
    }

}
