<?php
namespace App\Controllers\Backend;
class Admin extends BaseController
{
    public function index()
    {
        echo view('backend/layout-admin/header');
        echo view('backend/admin-index');
        echo view('backend/layout-admin/footer');
    }
}