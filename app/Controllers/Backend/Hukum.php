<?php
namespace App\Controllers\Backend;
use App\Models\Hukum_model;
class Hukum extends BaseController
{
    protected $Hukum_model;
    public function __construct(){
        $this->Hukum_model = new Hukum_model();
    }
    public function index()
    {
        $data = [
            'hukum' => $this->Hukum_model->findAll(),
        ];

        echo view('backend/layout-admin/header');
        echo view('backend/hukum/hukum_admin',$data);
        echo view('backend/layout-admin/footer');
    }
    public function hukum_input()
    {
        echo view('backend/layout-admin/header');
        echo view('backend/hukum/input_hukum');
        echo view('backend/layout-admin/footer');
    }
}