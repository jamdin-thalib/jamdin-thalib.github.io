<?php
namespace App\Controllers;
class Mailbox extends BaseController
{
    public function index()
    {
        echo view('backend/layout-admin/header');
        echo view('backend/data-table/static-table');
        echo view('backend/layout-admin/footer');
    }

}