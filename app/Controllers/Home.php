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
        return view('auth/v_login');
        // return view('auth/login');
    }
    public function register()
    {
        return view('auth/v_register');
        // return view('auth/register');
    }
    public function template()
    {
        return view('welcome_message');
    }
    public function akun()
    {
        return view('admin/v_admin_akun');
    }
    public function info_lomba_edit()
    {
        return view('admin/v_info_lomba_edit');
    }
}
