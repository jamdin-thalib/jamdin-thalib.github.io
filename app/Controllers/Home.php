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
use App\Models\Pegawai_Model_Ptt;
use App\Models\Syarat1_model;
use App\Models\Syarat2_model;
use App\Models\Syarat3_model;
use App\Models\Pendaftaran_model;
use TCPDF;
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
    protected $Pegawai_Model_Ptt;
    protected $Syarat1_model;
    protected $Syarat2_model;
    protected $Syarat3_model;
    protected $Pendaftaran_model;
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
        $this->Pegawai_Model_Ptt = new Pegawai_Model_Ptt();
        $this->Syarat1_model = new Syarat1_model();
        $this->Syarat2_model = new Syarat2_model();
        $this->Syarat3_model = new Syarat3_model();
        $this->Pendaftaran_model = new Pendaftaran_model();
    }
    public function index()
    {
        echo view('\App\Views\layout\header');
        echo view('\App\Views\index');
        echo view('\App\Views\layout\footer');
    }
    public function profil()
    {
        $data = [
            'rka' => $this->Rka_model->findAll(),
            'dpa' => $this->Dpa_model->findAll(),
            'rfk' => $this->Rfk_model->findAll(),
            'pns' => $this->Pegawai_Model_Pns->findAll(),
            'ptt' => $this->Pegawai_Model_Ptt->findAll()
        ];
        echo view('\App\Views\layout\header');
        echo view('\App\Views\web\sidebar-left',$data);
        echo view('\App\Views\layout\footer');
    }
    public function struktur()
    {
        echo view('\App\Views\layout\header');
        echo view('\App\Views\web\struktur');
        echo view('\App\Views\layout\footer');
    }
    public function hukum()
    {
        $data = [
            'hukum' => $this->Hukum_model->findAll(),
        ];
        echo view('\App\Views\layout\header');
        echo view('\App\Views\web\hukum',$data);
        echo view('\App\Views\layout\footer');
    }
    public function aptika()
    {
        $data = [
            'bolmut' => $this->Domainbolmut_model->findAll(),
            'desa' => $this->Domaindesa_model->findAll()
        ];
        echo view('\App\Views\web\aptika\header');
        echo view('\App\Views\web\aptika\aptika',$data);
        echo view('\App\Views\web\aptika\footer');
    }
    public function dpa()
    {
        // $data = [
        //     'rka' => $this->Rka_model->findAll(),
        //     'dpa' => $this->Dpa_model->findAll(),
        //     'rfk' => $this->Rfk_model->findAll()
        // ];
        // echo view('\App\Views\layout\header',$data);
        // echo view('\App\Views\web\dpa');
        // echo view('\App\Views\layout\footer');
    }
    public function domain()
    {
        $data = [
            'bolmut' => $this->Domainbolmut_model->findAll(),
            'desa' => $this->Domaindesa_model->findAll()
        ];
        echo view('\App\Views\layout\header');
        echo view('\App\Views\web\domain',$data);
        echo view('\App\Views\layout\footer');
    }
    public function layanan()
    {
        $data = [
            'persyaratan1' => $this->Syarat1_model->findAll(),
            'persyaratan2' => $this->Syarat2_model->findAll(),
            'persyaratan3' => $this->Syarat3_model->findAll()
        ];
        echo view('\App\Views\layout\header_seleksi');
        echo view('\App\Views\web\seleksi', $data);
        echo view('\App\Views\layout\footer_seleksi');
    }
    public function pendaftaran(){
        if (! $this->ionAuth->loggedIn()){
            return redirect()->to('login');
        }
        $user = $this->ionAuth->user();
        $user_id = $this->session->get('user_id');
        $get = $this->Pendaftaran_model->get_by_user_id($user_id);
        $data = [
            'posisi' => $user->posisi,
            'get' => $get,
            'file_upload' => $this->Pendaftaran_model->getBerkas($get->id)
        ];
        echo view('\App\Views\layout\header_seleksi');
        echo view('\App\Views\web\seleksi\portfolio-pendaftaran', $data);
        echo view('\App\Views\layout\footer_seleksi');
    }

    public function kaseMuncul($id)
    {
        if (! $this->ionAuth->loggedIn()){
            return redirect()->to('login');
        }
        $file_upload = $this->Pendaftaran_model->getLihatBerkas($id);
        foreach ($file_upload as $row){
            $type = 'pdf';
            $fa = 'fa-file-pdf-o';
            if ($row->id == 3 || $row->id == 4) {
                $type = 'foto';
                $fa = 'fa-image';
            }
            echo '<div class="input-group mg-b-pro-edt item">
                <span class="input-group-addon"><i class="fa '.$fa.'"></i></span> ';
                if ($row->id == 3 || $row->id == 4) {
                    echo '<a href="#" onClick="klik(\''.site_url('home/lihatpdf/img/'.$row->file_berkas).'\')">'.$row->nama_berkas .'</a>';
                }else{
                    echo '<a href="#" onClick="klik(\''.base_url('home/lihatpdf/pdf/'.$row->file_berkas).'\')">'.$row->nama_berkas .'</a>';
                }
            echo    '</div>';
        }
    }
    public function lihatPdf($tipe,$nama_file){
        if (! $this->ionAuth->loggedIn()){
            return redirect()->to('login');
        }
        if ($tipe == 'pdf') {
            $this->response->setContentType('application/pdf');
            $file = './pdf/'.$nama_file;
            //$pdf->Output($file, 'I');
            header('Content-Type: application/pdf');
            header('Content-Disposition: inline; filename='.$file);
            header('Content-Transfer-Encoding: binary');
            header('Accept-Ranges: bytes');
            readfile($file);
        }else{
            echo '<center><img src="'.base_url('assets/img/'.$nama_file).'" alt="'.$nama_file.'" class="responsive" style="height:250px;width:300px;"></center>';
        }
        
    }
    public function aplikasi()
    {
        $data = [
            'aplikasi1' => $this->Aplikasi1_model->findAll(),
            'aplikasi2' => $this->Aplikasi2_model->findAll()
        ];
        echo view('\App\Views\layout\header',$data);
        echo view('\App\Views\web\aplikasi');
        echo view('\App\Views\layout\footer');
    }
    public function Profiladmin()
    {
        echo view('\App\Views\admin\layout\headeradmin');
        echo view('\App\Views\admin\profiladmin');
        echo view('\App\Views\admin\layout\foteradmin');
    }
    public function Editor()
    {
        echo view('\App\Views\admin\layout\headeradmin');
        echo view('\App\Views\admin\profil\editor');
        echo view('\App\Views\admin\layout\foteradmin');
    }
     public function Backend()
     {
         echo view('\App\Views\layout\header_admin');
         echo view('\App\Views\backend\admin-index');
         echo view('\App\Views\layout\footer_admin');
        }
    
}


