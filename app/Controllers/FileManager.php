<?php
namespace App\Controllers;
class FileManager extends BaseController
{
    public function index()
    {
        echo view('backend/layout-admin/header');
        echo view('backend/file-manager/file-manager');
        echo view('backend/layout-admin/footer');
    }

}