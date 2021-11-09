<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        return view('v_admin_index');
    }
    public function lomba_cpc()
    {
        return view('v_lomba_cpc');
    }
    public function lomba_lct()
    {
        return view('v_lomba_lct');
    }
}
