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
            'desa' => $this->Domaindesa_model->findAll(),
            'pesan' => $this->session->getFlashData('success')
        ];
        echo view('backend/layout-admin/header');
        echo view('backend/domain/domain_bolmut',$data);
        echo view('backend/layout-admin/footer');
    }
    
    public function bolmut()
    {
        $data = array(
            'modal_title'=>'Create Domain Bolmut',
            'action'=>'insert',
            'modal_s'=>'modal-lg',
            'scroll'=>'',
            'btn'=>'Create',
            'pesan'=> $this->session->getFlashData('error')
        );

        echo view('backend/layout-admin/header',$data);
        echo view('backend/domain/input_domain_bolmut');
        echo view('backend/layout-admin/footer');
    }
    public function edit_bolmut($id)
    {
        $get = $this->Domainbolmut_model->get_by_id($id);
        $data = array('modal_title'=>'Update Domain Bolmut','action'=>'update','modal_s'=>'','scroll'=>'','get'=>$get,'btn'=>'Update',
            'pesan'=> $this->session->getFlashData('error')
        );

        echo view('backend/layout-admin/header',$data);
        echo view('backend/domain/input_domain_bolmut');
        echo view('backend/layout-admin/footer');
    }
    public function ajax_list() {
        if (!$this->ionAuth->loggedIn()){
            return redirect()->to('/auth/login');
        }
        $list = $this->Domainbolmut_model->get_datatables();
        $data = array();
        $no = $_POST['start'] + 1;
        foreach ($list as $rows) {
            $row = array();
            $row[] = $no++;
		    $row[] = $rows->tgl_pembuatan;
		    $row[] = $rows->nama_subdomain;
		    $row[] = $rows->status_domain;
		    $row[] = $rows->pengelola;
		    $row[] = $rows->nama_pengelola;
		    $row[] = $rows->no_telpon;
		    $row[] = $rows->deskripsi;
		    $row[] = $rows->link;
		    $data[] = $row;
        }
        $output = array(
            "draw" => $_POST["draw"],
            "recordsTotal" => $this->Domainbolmut_model->count_all(),
            "recordsFiltered" => $this->Domainbolmut_model->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }
    public function create_domainbolmut(){
        
        $data = array('modal_title'=>'Create Domain Bolmut','action'=>'insert','modal_s'=>'modal-lg','scroll'=>'','btn'=>'Create');
        echo view('App\Views\backend\domain\input_domain_bolmut',$data);
    }
    public function update_domainbomut($id){
        
        $get = $this->Domainbolmut_model->get_by_id($id);
        $data = array('modal_title'=>'Update Domain Bolmut','action'=>'update','modal_s'=>'','scroll'=>'','get'=>$get,'btn'=>'Update');
        echo view('App\Views\backend\domain\input_domain_bolmut',$data);
    }
    public function save_bolmut(){
        $data = array(
				'tgl_pembuatan' => $this->request->getPost('tgl_pembuatan'),
				'nama_subdomain' => $this->request->getPost('nama_subdomain'),
				'status_domain' => $this->request->getPost('status_domain'),
				'pengelola' => $this->request->getPost('pengelola'),
				'nama_pengelola' => $this->request->getPost('nama_pengelola'),
				'no_telpon' => $this->request->getPost('no_telpon'),
				'deskripsi' => $this->request->getPost('deskripsi'),
				'link' => $this->request->getPost('link'),
		    );
        switch ($this->request->getPost('action')) {
        case 'insert':
            $cek = $this->Domainbolmut_model->tambah($data);
            if($cek){
                $this->session->setFlashData('success','Data Tersimpan');
                return redirect()->to('backend/domain_bolmut');
            }else{
                $this->session->setFlashData('error','Data Gagal Disimpan');
                return redirect()->to('backend/domain_bolmut/bolmut');
            }
            break;
        case 'update':
            $cek = $this->Domainbolmut_model->ubah($this->request->getPost('id') ,$data);
            if($cek){
                $this->session->setFlashData('success','Data Diubah');
                return redirect()->to('backend/domain_bolmut');
            }else{
                $this->session->setFlashData('error','Data Gagal DiUbah');
                return redirect()->to('backend/domain_bolmut/edit_bolmut');
            }
            break;
        }       
    }
    public function hapus($id){
        if($this->Domainbolmut_model->delete($id)){
            $this->session->setFlashData('success','Data Berhasil Dihapus');
            return redirect()->to('backend/domain_bolmut');
        }else{
            $this->session->setFlashData('success','Data Gagal Dihapus');
            return redirect()->to('backend/domain_bolmut');
        }
    }
    public function desa()
    {
        $data = array(
            'modal_title'=>'Create Domain Bolmut',
            'action'=>'insert',
            'modal_s'=>'modal-lg',
            'scroll'=>'',
            'btn'=>'Create',
            'pesan'=> $this->session->getFlashData('error')
        );

        echo view('backend/layout-admin/header', $data);
        echo view('backend/domain/input_domain_desa');
        echo view('backend/layout-admin/footer');
    }
    public function edit_desa($id)
    {
        $get = $this->Domaindesa_model->get_by_id($id);
        $data = array('modal_title'=>'Update Domain Desa.id','action'=>'update','modal_s'=>'','scroll'=>'','get'=>$get,'btn'=>'Update',
            'pesan'=> $this->session->getFlashData('error')
        );

        echo view('backend/layout-admin/header',$data);
        echo view('backend/domain/input_domain_desa');
        echo view('backend/layout-admin/footer');
    }
    
    public function create_domaindesa(){
        
        $data = array('modal_title'=>'Create Domain Desa.id','action'=>'insert','modal_s'=>'modal-lg','scroll'=>'','btn'=>'Create');
        echo view('App\Views\backend\domain\input_domain_desa',$data);
    }
    public function update_domaindesa($id){
        
        $get = $this->Domaindesa_model->get_by_id($id);
        $data = array('modal_title'=>'Update Domain Desa.id','action'=>'update','modal_s'=>'','scroll'=>'','get'=>$get,'btn'=>'Update');
        echo view('App\Views\backend\domain\input_domain_bolmut',$data);
    }
    public function save_desa(){
        $data = array(
				'nama_domain' => $this->request->getPost('nama_domain'),
				'domain_status' => $this->request->getPost('domain_status'),
				'tgl_daftar' => $this->request->getPost('tgl_daftar'),
				'tgl_akhir' => $this->request->getPost('tgl_akhir'),
				'masa_aktif' => $this->request->getPost('masa_aktif'),
				'link' => $this->request->getPost('link'),
		    );
        switch ($this->request->getPost('action')) {
        case 'insert':
            $cek = $this->Domaindesa_model->tambah($data);
            if($cek){
                $this->session->setFlashData('success','Data Tersimpan');
                return redirect()->to('backend/domain_bolmut');
            }else{
                $this->session->setFlashData('error','Data Gagal Disimpan');
                return redirect()->to('backend/domain_bolmut/desa');
            }
            break;
        case 'update':
            $cek = $this->Domaindesa_model->ubah($this->request->getPost('id') ,$data);
            if($cek){
                $this->session->setFlashData('success','Data Diubah');
                return redirect()->to('backend/domain_bolmut');
            }else{
                $this->session->setFlashData('error','Data Gagal DiUbah');
                return redirect()->to('backend/domain_bolmut/edit_desa');
            }
            break;
        }       
    }
    public function hapus_desa($id){
        if($this->Domaindesa_model->delete($id)){
            $this->session->setFlashData('success','Data Berhasil Dihapus');
            return redirect()->to('backend/domain_bolmut');
        }else{
            $this->session->setFlashData('success','Data Gagal Dihapus');
            return redirect()->to('backend/domain_bolmut');
        }
    }

}