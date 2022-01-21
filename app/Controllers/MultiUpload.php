<?php
namespace App\Controllers;
class MultiUpload extends BaseController
{
    public function index()
    {
        echo view('backend/layout-admin/header');
        echo view('backend/file-manager/multi-upload');
        echo view('backend/layout-admin/footer');
    }

}