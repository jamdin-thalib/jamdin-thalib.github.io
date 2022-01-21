<?php
namespace App\Controllers\Backend;
use App\Models\Rka_model;
use App\Models\Dpa_model;
use App\Models\Rfk_model;
class Dpa_admin extends BaseController
{
    protected $Rka_model;
    protected $Dpa_model;
    protected $Rfk_model;
    public function __construct(){
        $this->Rka_model = new Rka_model();
        $this->Dpa_model = new Dpa_model();
        $this->Rfk_model = new Rfk_model();
    }
    public function index()
    {
        $data = [
            'rka' => $this->Rka_model->findAll(),
            'dpa' => $this->Dpa_model->findAll(),
            'rfk' => $this->Rfk_model->findAll()
        ];
        echo view('backend/layout-admin/header');
        echo view('backend/dpa_rka/dpa_admin',$data);
        echo view('backend/layout-admin/footer');
    }
    public function rka()
    {
        echo view('backend/layout-admin/header');
        echo view('backend/dpa_rka/input_rka');
        echo view('backend/layout-admin/footer');
    }
    public function dpa()
    {
        echo view('backend/layout-admin/header');
        echo view('backend/dpa_rka/input_dpa');
        echo view('backend/layout-admin/footer');
    }
    public function rfk()
    {
        echo view('backend/layout-admin/header');
        echo view('backend/dpa_rka/input_rfk');
        echo view('backend/layout-admin/footer');
    }
}