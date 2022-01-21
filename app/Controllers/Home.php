<?php
namespace App\Controllers;
use App\Models\Rka_model;
use App\Models\Dpa_model;
use App\Models\Rfk_model;
use App\Models\Aplikasi1_model;
use App\Models\Aplikasi2_model;
use App\Models\Hukum_model;
use App\Models\Domainbolmut_model;
use App\Models\Domaindesa_model;
use App\Models\Pegawai_Model_Pns;
class Home extends BaseController
{
    protected $Rka_model;
    protected $Dpa_model;
    protected $Rfk_model;
    protected $Aplikasi1_model;
    protected $Aplikasi2_model;
    protected $Hukum_model;
    protected $Domainbolmut_model;
    protected $Domaindesa_model;
    protected $Pegawai_Model_Pns;
    public function __construct(){
        $this->Rka_model = new Rka_model();
        $this->Dpa_model = new Dpa_model();
        $this->Rfk_model = new Rfk_model();
        $this->Aplikasi1_model = new Aplikasi1_model();
        $this->Aplikasi2_model = new Aplikasi2_model();
        $this->Hukum_model = new Hukum_model();
        $this->Domainbolmut_model = new Domainbolmut_model();
        $this->Domaindesa_model = new Domaindesa_model();
        $this->Pegawai_Model_Pns = new Pegawai_Model_Pns();
    }
    public function index()
    {
        echo view('layout\header');
        echo view('index');
        echo view('layout\footer');
    }
    public function profil()
    {
        echo view('layout/header');
        echo view('web/profil');
        echo view('layout/footer');
    }
    public function struktur()
    {
        echo view('layout/header');
        echo view('web/struktur');
        echo view('layout/footer');
    }
    public function hukum()
    {
        $data = [
            'hukum' => $this->Hukum_model->findAll(),
        ];
        echo view('layout/header');
        echo view('web/hukum',$data);
        echo view('layout/footer');
    }
    public function duk()
    {
        $data = [
            'pns' => $this->Pegawai_Model_Pns->findAll(),
        ];
        echo view('layout/header');
        echo view('web/duk',$data);
        echo view('layout/footer');
    }
    public function dpa()
    {
        $data = [
            'rka' => $this->Rka_model->findAll(),
            'dpa' => $this->Dpa_model->findAll(),
            'rfk' => $this->Rfk_model->findAll()
        ];
        echo view('layout/header',$data);
        echo view('web/dpa');
        echo view('layout/footer');
    }
    public function domain()
    {
        $data = [
            'bolmut' => $this->Domainbolmut_model->findAll(),
            'desa' => $this->Domaindesa_model->findAll()
        ];
        echo view('layout/header');
        echo view('web/domain',$data);
        echo view('layout/footer');
    }
    public function layanan()
    {
        echo view('layout/header_seleksi');
        echo view('web/seleksi');
        echo view('layout/footer_seleksi');
    }
    public function pendaftaran()
    {
        echo view('layout/header_seleksi');
        echo view('web/seleksi/portfolio-pendaftaran');
        echo view('layout/footer_seleksi');
    }
    public function aplikasi()
    {
        $data = [
            'aplikasi1' => $this->Aplikasi1_model->findAll(),
            'aplikasi2' => $this->Aplikasi2_model->findAll()
        ];
        echo view('layout/header',$data);
        echo view('web/aplikasi');
        echo view('layout/footer');
    }
    public function Profiladmin()
    {
        echo view('admin\layout\headeradmin');
        echo view('admin\profiladmin');
        echo view('admin\layout\foteradmin');
    }
    public function Editor()
    {
        echo view('admin\layout\headeradmin');
        echo view('admin\profil\editor');
        echo view('admin\layout\foteradmin');
    }
    // public function Backend()
    // {
    //     echo view('layout\header_admin');
    //     echo view('backend\admin-index');
    //     echo view('layout\footer_admin');
    // }
    
}


