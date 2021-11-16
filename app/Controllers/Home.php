<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('v_landing_page');
    }
    public function login()
    {
        return view('v_login');
    }
    public function register()
    {
        return view('v_register');
    }
    public function template()
    {
        return view('welcome_message');
    }
    public function akun()
    {
        return view('admin/v_admin_akun');
    }
}
