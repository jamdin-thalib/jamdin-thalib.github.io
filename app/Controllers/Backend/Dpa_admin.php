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
            'rfk' => $this->Rfk_model->findAll(),
            'pesan' => $this->session->getFlashData('success')
        ];
        echo view('backend/layout-admin/header');
        echo view('backend/dpa_rka/dpa_admin',$data);
        echo view('backend/layout-admin/footer');
    }
    
    public function rka()
    {
        $data = array(
            'modal_title'=>'Create RKA',
            'action'=>'insert',
            'modal_s'=>'modal-lg',
            'scroll'=>'',
            'btn'=>'Create',
            'pesan'=> $this->session->getFlashData('error')
        );

        echo view('backend/layout-admin/header',$data);
        echo view('backend/dpa_rka/input_rka');
        echo view('backend/layout-admin/footer');
    }
    public function edit_rka($id)
    {
        $get = $this->Rka_model->get_by_id($id);
        $data = array('modal_title'=>'Update Dokumen RKA','action'=>'update','modal_s'=>'','scroll'=>'','get'=>$get,'btn'=>'Update',
            'pesan'=> $this->session->getFlashData('error')
        );
        echo view('backend/layout-admin/header',$data);
        echo view('backend/dpa_rka/input_rka');
        echo view('backend/layout-admin/footer');
    }
    public function create_rka(){
        
        $data = array('modal_title'=>'Create Dokumen RKA','action'=>'insert','modal_s'=>'modal-lg','scroll'=>'','btn'=>'Create');
        echo view('App\Views\backend\dpa_rka\input_rka',$data);
    }
    public function update_domainbomut($id){
        
        $get = $this->Rka_model->get_by_id($id);
        $data = array('modal_title'=>'Update Dokumen RKAt','action'=>'update','modal_s'=>'','scroll'=>'','get'=>$get,'btn'=>'Update');
        echo view('App\Views\backend\dpa_rka\input_rka',$data);
    }
    public function save_rka(){
        $data = array(
				'tgl_pengesahan_rka' => $this->request->getPost('tgl_pengesahan_rka'),
				'nama_dok_rka' => $this->request->getPost('nama_dok_rka'),
				'file_rka' => $this->request->getPost('file_rka'),
				'uraian_rka' => $this->request->getPost('uraian_rka'),
		    );
        switch ($this->request->getPost('action')) {
        case 'insert':
            $cek = $this->Rka_model->tambah($data);
            if($cek){
                $this->session->setFlashData('success','Data Tersimpan');
                return redirect()->to('backend/dpa_admin');
            }else{
                $this->session->setFlashData('error','Data Gagal Disimpan');
                return redirect()->to('backend/dpa_admin/rka');
            }
            break;
        case 'update':
            $cek = $this->Rka_model->ubah($this->request->getPost('id') ,$data);
            if($cek){
                $this->session->setFlashData('success','Data Diubah');
                return redirect()->to('backend/dpa_admin');
            }else{
                $this->session->setFlashData('error','Data Gagal DiUbah');
                return redirect()->to('backend/dpa_admin/edit_rka');
            }
            break;
        }       
    }
    public function hapus_rka($id){
        if($this->Rka_model->delete($id)){
            $this->session->setFlashData('success','Data Berhasil Dihapus');
            return redirect()->to('backend/dpa_admin');
        }else{
            $this->session->setFlashData('success','Data Gagal Dihapus');
            return redirect()->to('backend/dpa_admin');
        }
    }
    public function dpa()
    {
        $data = array(
            'modal_title'=>'Create DPA',
            'action'=>'insert',
            'modal_s'=>'modal-lg',
            'scroll'=>'',
            'btn'=>'Create',
            'pesan'=> $this->session->getFlashData('error')
        );
        echo view('backend/layout-admin/header',$data);
        echo view('backend/dpa_rka/input_dpa');
        echo view('backend/layout-admin/footer');
    }
    public function edit_dpa($id)
    {
        $get = $this->Dpa_model->get_by_id($id);
        $data = array('modal_title'=>'Update Dokumen DPA','action'=>'update','modal_s'=>'','scroll'=>'','get'=>$get,'btn'=>'Update',
            'pesan'=> $this->session->getFlashData('error')
        );
        echo view('backend/layout-admin/header',$data);
        echo view('backend/dpa_rka/input_dpa');
        echo view('backend/layout-admin/footer');
    }
    public function create_dpa(){
        
        $data = array('modal_title'=>'Create Dokumen DPA','action'=>'insert','modal_s'=>'modal-lg','scroll'=>'','btn'=>'Create');
        echo view('App\Views\backend\dpa_rka\input_dpa',$data);
    }
    public function update_dpa($id){
        
        $get = $this->Rka_model->get_by_id($id);
        $data = array('modal_title'=>'Update Dokumen DPA','action'=>'update','modal_s'=>'','scroll'=>'','get'=>$get,'btn'=>'Update');
        echo view('App\Views\backend\dpa_rka\input_dpa',$data);
    }
    public function save_dpa(){
        $data = array(
				'tgl_pengesahan_dpa' => $this->request->getPost('tgl_pengesahan_dpa'),
				'nama_dok_dpa' => $this->request->getPost('nama_dok_dpa'),
				'file_dpa' => $this->request->getPost('file_dpa'),
				'uraian_dpa' => $this->request->getPost('uraian_dpa'),
		    );
        switch ($this->request->getPost('action')) {
        case 'insert':
            $cek = $this->Dpa_model->tambah($data);
            if($cek){
                $this->session->setFlashData('success','Data Tersimpan');
                return redirect()->to('backend/dpa_admin');
            }else{
                $this->session->setFlashData('error','Data Gagal Disimpan');
                return redirect()->to('backend/dpa_admin/dpa');
            }
            break;
        case 'update':
            $cek = $this->Dpa_model->ubah($this->request->getPost('id') ,$data);
            if($cek){
                $this->session->setFlashData('success','Data Diubah');
                return redirect()->to('backend/dpa_admin');
            }else{
                $this->session->setFlashData('error','Data Gagal DiUbah');
                return redirect()->to('backend/dpa_admin/edit_dpa');
            }
            break;
        }       
    }
    public function hapus_dpa($id){
        if($this->Dpa_model->delete($id)){
            $this->session->setFlashData('success','Data Berhasil Dihapus');
            return redirect()->to('backend/dpa_admin');
        }else{
            $this->session->setFlashData('success','Data Gagal Dihapus');
            return redirect()->to('backend/dpa_admin');
        }
    }
    public function rfk()
    {
        $data = array(
            'modal_title'=>'Create RFK',
            'action'=>'insert',
            'modal_s'=>'modal-lg',
            'scroll'=>'',
            'btn'=>'Create',
            'pesan'=> $this->session->getFlashData('error')
        );
        echo view('backend/layout-admin/header',$data);
        echo view('backend/dpa_rka/input_rfk');
        echo view('backend/layout-admin/footer');
    }
    public function edit_rfk($id)
    {
        $get = $this->Rfk_model->get_by_id($id);
        $data = array('modal_title'=>'Update Dokumen RFK','action'=>'update','modal_s'=>'','scroll'=>'','get'=>$get,'btn'=>'Update',
            'pesan'=> $this->session->getFlashData('error')
        );
        echo view('backend/layout-admin/header',$data);
        echo view('backend/dpa_rka/input_rfk');
        echo view('backend/layout-admin/footer');
    }
    public function create_rfk(){
        
        $data = array('modal_title'=>'Create Dokumen RFK','action'=>'insert','modal_s'=>'modal-lg','scroll'=>'','btn'=>'Create');
        echo view('App\Views\backend\dpa_rka\input_rfk',$data);
    }
    public function update_rfk($id){
        
        $get = $this->Rfk_model->get_by_id($id);
        $data = array('modal_title'=>'Update Dokumen RFK','action'=>'update','modal_s'=>'','scroll'=>'','get'=>$get,'btn'=>'Update');
        echo view('App\Views\backend\dpa_rka\input_rfk',$data);
    }
    public function save_rfk(){
        $data = array(
				'tgl_pengesahan_rfk' => $this->request->getPost('tgl_pengesahan_rfk'),
				'nama_dok_rfk' => $this->request->getPost('nama_dok_rfk'),
				'file_rfk' => $this->request->getPost('file_rfk'),
				'uraian_rfk' => $this->request->getPost('uraian_rfk'),
		    );
        switch ($this->request->getPost('action')) {
        case 'insert':
            $cek = $this->Rfk_model->tambah($data);
            if($cek){
                $this->session->setFlashData('success','Data Tersimpan');
                return redirect()->to('backend/dpa_admin');
            }else{
                $this->session->setFlashData('error','Data Gagal Disimpan');
                return redirect()->to('backend/dpa_admin/rfk');
            }
            break;
        case 'update':
            $cek = $this->Rfk_model->ubah($this->request->getPost('id') ,$data);
            if($cek){
                $this->session->setFlashData('success','Data Diubah');
                return redirect()->to('backend/dpa_admin');
            }else{
                $this->session->setFlashData('error','Data Gagal DiUbah');
                return redirect()->to('backend/dpa_admin/edit_rfk');
            }
            break;
        }       
    }
    public function hapus_rfk($id){
        if($this->Rfk_model->delete($id)){
            $this->session->setFlashData('success','Data Berhasil Dihapus');
            return redirect()->to('backend/dpa_admin');
        }else{
            $this->session->setFlashData('success','Data Gagal Dihapus');
            return redirect()->to('backend/dpa_admin');
        }
    }
}