<?php
namespace App\Controllers\Backend;
class Profil extends BaseController
{
    public function index()
    {
        echo view('backend/layout-admin/header');
        echo view('backend/profil/profil');
        echo view('backend/layout-admin/footer');
    }

}