<?php
namespace App\Controllers\Backend;
use App\Models\Profil_model;
class Profil extends BaseController
{
    protected $Profil_model;
    public function __construct(){
        $this->Profil_model = new Profil_model();
    }
    public function index()
    {
        $data = [
            'profil' => $this->Profil_model->findAll(),
        ];
        echo view('backend/layout-admin/header');
        echo view('backend/profil/profil_admin',$data);
        echo view('backend/layout-admin/footer');
    }
    public function profil()
    {
        $data = array(
            'modal_title'=>'Create Profil',
            'action'=>'insert',
            'modal_s'=>'modal-lg',
            'scroll'=>'',
            'btn'=>'Create',
            'pesan'=> $this->session->getFlashData('error')
        );
        echo view('backend/layout-admin/header',$data);
        echo view('backend/profil/profil_form');
        echo view('backend/layout-admin/footer');
    }
}