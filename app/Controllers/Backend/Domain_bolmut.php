<?php
namespace App\Controllers\Backend;
use App\Models\Domainbolmut_model;
use App\Models\Domaindesa_model;

class Domain_bolmut extends BaseController
{
    protected $Domainbolmut_model;
    protected $Domaindesa_model;

    public function __construct(){
        $this->Domainbolmut_model = new Domainbolmut_model();
        $this->Domaindesa_model = new Domaindesa_model();
    }
    public function index()
    {
        $data = [
            'bolmut' => $this->Domainbolmut_model->findAll(),
            'desa' => $this->Domaindesa_model->findAll()
        ];
        echo view('backend/layout-admin/header');
        echo view('backend/domain/domain_bolmut',$data);
        echo view('backend/layout-admin/footer');
    }
    public function Bolmut()
    {
        echo view('backend/layout-admin/header');
        echo view('backend/domain/input_domain_bolmut');
        echo view('backend/layout-admin/footer');
    }
}