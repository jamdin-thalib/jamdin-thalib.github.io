<?php
namespace App\Controllers;
class Mailbox2 extends BaseController
{
    public function index()
    {
        echo view('backend/layout-admin/header');
        echo view('backend/data-table/data-table');
        echo view('backend/layout-admin/footer');
    }

}