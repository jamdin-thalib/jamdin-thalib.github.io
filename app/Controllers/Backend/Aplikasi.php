<?php
namespace App\Controllers\Backend;
use App\Models\Aplikasi1_model;
use App\Models\Aplikasi2_model;

class Aplikasi extends BaseController
{
    protected $Aplikasi1_model;
    protected $Aplikasi2_model;

    public function __construct(){
        $this->Aplikasi1_model = new Aplikasi1_model();
        $this->Aplikasi2_model = new Aplikasi2_model();
    }
    public function index()
    {
        $data = [
            'aplikasi1' => $this->Aplikasi1_model->findAll(),
            'aplikasi2' => $this->Aplikasi2_model->findAll()
        ];
        echo view('backend/layout-admin/header');
        echo view('backend/aplikasi/aplikasi_admin', $data);
        echo view('backend/layout-admin/footer');
    }
    public function umum()
    {
        echo view('backend/layout-admin/header');
        echo view('backend/aplikasi/aplikasi_umum');
        echo view('backend/layout-admin/footer');
    }
    public function khusus()
    {
        echo view('backend/layout-admin/header');
        echo view('backend/aplikasi/aplikasi_khusus');
        echo view('backend/layout-admin/footer');
    }
    
}