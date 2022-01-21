<?php
namespace App\Controllers\Backend;
class Pendaftaran extends BaseController
{
    public function index()
    {
        echo view('backend/layout-admin/header');
        echo view('backend/layanan/admin_pendaftaran');
        echo view('backend/layout-admin/footer');
    }
    public function add()
    {
        echo view('backend/layout-admin/header');
        echo view('backend/layanan/pendaftaran');
        echo view('backend/layout-admin/footer');
    }
}