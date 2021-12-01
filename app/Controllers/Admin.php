<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        return view('admin/v_admin_index');
    }

    public function info_lomba()
    {
        return view('admin/v_info_lomba');
    }

    public function lomba_cpc()
    {
        return view('admin/v_lomba_cpc');
    }

    public function lomba_lct()
    {
        return view('admin/v_lomba_lct');
    }

    public function settings_lomba()
    {
        $KLomba = model('KategoriLombaModel');

        $data = [
            'lomba' => $KLomba->findAll(),
            'status' => $KLomba->getStatus()->getResult()
        ];
        return view('admin/v_admin_settings_lomba', $data);
    }

    public function settings_peserta()
    {
        $KPeserta = model('KategoriPesertaModel');

        $data = [
            'kategori' => $KPeserta->findAll()
        ];
        return view('admin/v_admin_settings_peserta', $data);
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

    public function delete()
    {
        $KLomba = model('KategoriLombaModel');
        $id = $this->request->getPost('id');
        $KLomba->delete($id);
        return redirect()->to('/settings');
    }
}
