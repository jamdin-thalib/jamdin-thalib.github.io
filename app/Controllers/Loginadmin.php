<?php
namespace App\Controllers;

class Loginadmin extends BaseController
{
    public function index()
    {
        echo view('backend/layout-admin/header');
        echo view('backend/admin-index');
        echo view('backend/layout-admin/footer');
    }
}



    