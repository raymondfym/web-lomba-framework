<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        return view('admin/v_admin_index');
    }

    public function lomba_cpc()
    {
        return view('admin/v_lomba_cpc');
    }

    public function lomba_lct()
    {
        return view('admin/v_lomba_lct');
    }

    public function settings()
    {
        $KLomba = model('KategoriLombaModel');
        // $SLomba = model('StatusLombaModel');
        // $KPeserta = model('KategoriPesertaModel');
        // $Users = model('UsersModel');

        $data = [
            'lomba' => $KLomba->findAll(),
            'status' => $KLomba->getStatus()->getResult()
        ];
        return view('admin/v_admin_settings', $data);
    }

    public function save()
    {
        $KLomba = model('KategoriLombaModel');
        $data = [
            'nama_lomba' => $this->request->getPost('nama_lomba'),
            'status'     => $this->request->getPost('status')
        ];

        $KLomba->insert($data);
        return redirect()->to('/settings');
    }
}
