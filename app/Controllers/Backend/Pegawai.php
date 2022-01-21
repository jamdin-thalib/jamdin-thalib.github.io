<?php
namespace App\Controllers\Backend;
use App\Models\Pegawai_Model_Pns;
class Pegawai extends BaseController
{
    protected $Pegawai_Model_Pns;

    public function __construct(){
        $this->Pegawai_Model_Pns = new Pegawai_Model_Pns();
    }
    public function index()
    {
        $data = [
            'pns' => $this->Pegawai_Model_Pns->findAll(),
        ];
        
        echo view('backend/layout-admin/header');
        echo view('backend/pegawai/pegawai',$data);
        echo view('backend/layout-admin/footer');
    }
    public function pns()
    {
        echo view('backend/layout-admin/header');
        echo view('backend/pegawai/input_asn');
        echo view('backend/layout-admin/footer');
    }
    public function ptt()
    {
        echo view('backend/layout-admin/header');
        echo view('backend/pegawai/input_ptt');
        echo view('backend/layout-admin/footer');
    }
    public function duk()
    {
        $data = [
            'duk' => $this->Pegawai_Model_Pns->findAll(),
        ];
        
        echo view('backend/layout-admin/header');
        echo view('backend/pegawai/duk',$data);
        echo view('backend/layout-admin/footer');
    }
    public function struktur()
    {
        $data = [
            'struktur' => $this->Pegawai_Model_Pns->findAll(),
        ];
        echo view('backend/layout-admin/header');
        echo view('backend/pegawai/struktur',$data);
        echo view('backend/layout-admin/footer');
    }

}