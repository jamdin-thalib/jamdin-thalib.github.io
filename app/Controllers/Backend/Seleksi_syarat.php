<?php
namespace App\Controllers\Backend;
use App\Models\Syarat1_model;
use App\Models\Syarat2_model;
use App\Models\Syarat3_model;
class Seleksi_syarat extends BaseController
{
    protected $Syarat1_model;
    protected $Syarat2_model;
    protected $Syarat3_model;
    public function __construct(){
        $this->Syarat1_model = new Syarat1_model();
        $this->Syarat2_model = new Syarat2_model();
        $this->Syarat3_model = new Syarat3_model();
    }
    public function index()
    {
        $data = [
            'persyaratan1' => $this->Syarat1_model->findAll(),
            'persyaratan2' => $this->Syarat2_model->findAll(),
            'persyaratan3' => $this->Syarat3_model->findAll(),
            'pesan' => $this->session->getFlashData('success')
        ];
        echo view('backend/layout-admin/header');
        echo view('backend/layanan/admin_syarat',$data);
        echo view('backend/layout-admin/footer');
    }
    public function syarat1()
    {
        $data = array(
            'modal_title'=>'Create Persyaratan Umum',
            'action'=>'insert',
            'modal_s'=>'modal-lg',
            'scroll'=>'',
            'btn'=>'Create',
            'pesan'=> $this->session->getFlashData('error')
        );
        echo view('backend/layout-admin/header',$data);
        echo view('backend/layanan/input_syarat1');
        echo view('backend/layout-admin/footer');
    }
    public function edit_syarat1($id)
    {
        $get = $this->Syarat1_model->get_by_id($id);
        $data = array('modal_title'=>'Update Dokumen Persyaratan Umum','action'=>'update','modal_s'=>'','scroll'=>'','get'=>$get,'btn'=>'Update',
            'pesan'=> $this->session->getFlashData('error')
        );
        echo view('backend/layout-admin/header',$data);
        echo view('backend/layanan/input_syarat1');
        echo view('backend/layout-admin/footer');
    }
    public function create_syarat1(){
        
        $data = array('modal_title'=>'Create Dokumen Persyaratan Umum','action'=>'insert','modal_s'=>'modal-lg','scroll'=>'','btn'=>'Create');
        echo view('App\Views\backend\layanan\input_syarat1',$data);
    }
    public function update_syarat1($id){
        
        $get = $this->Syarat1_model->get_by_id($id);
        $data = array('modal_title'=>'Update Dokumen Persyaratan Umum','action'=>'update','modal_s'=>'','scroll'=>'','get'=>$get,'btn'=>'Update');
        echo view('App\Views\backend\layanan\input_syarat1',$data);
    }
    public function save_syarat1(){
        $data = array(
				'item' => $this->request->getPost('item'),
				'file' => $this->request->getPost('file'),
		    );
        switch ($this->request->getPost('action')) {
        case 'insert':
            $cek = $this->Syarat1_model->tambah($data);
            if($cek){
                $this->session->setFlashData('success','Data Tersimpan');
                return redirect()->to('backend/seeleksi_syarat');
            }else{
                $this->session->setFlashData('error','Data Gagal Disimpan');
                return redirect()->to('backend/seeleksi_syarat/syarat1');
            }
            break;
        case 'update':
            $cek = $this->Syarat1_model->ubah($this->request->getPost('id') ,$data);
            if($cek){
                $this->session->setFlashData('success','Data Diubah');
                return redirect()->to('backend/seeleksi_syarat');
            }else{
                $this->session->setFlashData('error','Data Gagal DiUbah');
                return redirect()->to('backend/seeleksi_syarat/edit_syarat1');
            }
            break;
        }       
    }
    public function hapus_syarat1($id){
        if($this->Syarat1_model->delete($id)){
            $this->session->setFlashData('success','Data Berhasil Dihapus');
            return redirect()->to('backend/seeleksi_syarat');
        }else{
            $this->session->setFlashData('success','Data Gagal Dihapus');
            return redirect()->to('backend/seeleksi_syarat');
        }
    }
    public function syarat2()
    {
        $data = array(
            'modal_title'=>'Create Persyaratan Programer',
            'action'=>'insert',
            'modal_s'=>'modal-lg',
            'scroll'=>'',
            'btn'=>'Create',
            'pesan'=> $this->session->getFlashData('error')
        );

        echo view('backend/layout-admin/header',$data);
        echo view('backend/layanan/input_syarat2');
        echo view('backend/layout-admin/footer');
    }
    public function edit_syarat2($id)
    {
        $get = $this->Syarat2_model->get_by_id($id);
        $data = array('modal_title'=>'Update Dokumen Persyaratan Programer','action'=>'update','modal_s'=>'','scroll'=>'','get'=>$get,'btn'=>'Update',
            'pesan'=> $this->session->getFlashData('error')
        );
        echo view('backend/layout-admin/header',$data);
        echo view('backend/layanan/input_syarat2');
        echo view('backend/layout-admin/footer');
    }
    public function create_syarat2(){
        
        $data = array('modal_title'=>'Create Dokumen Persyaratan Programer','action'=>'insert','modal_s'=>'modal-lg','scroll'=>'','btn'=>'Create');
        echo view('App\Views\backend\layanan\input_syarat2',$data);
    }
    public function update_syarat2($id){
        
        $get = $this->Syarat2_model->get_by_id($id);
        $data = array('modal_title'=>'Update Dokumen Persyaratan Programer','action'=>'update','modal_s'=>'','scroll'=>'','get'=>$get,'btn'=>'Update');
        echo view('App\Views\backend\layanan\input_syarat2',$data);
    }
    public function save_syarat2(){
        $data = array(
				'item' => $this->request->getPost('item'),
				'file' => $this->request->getPost('file'),
		    );
        switch ($this->request->getPost('action')) {
        case 'insert':
            $cek = $this->Syarat2_model->tambah($data);
            if($cek){
                $this->session->setFlashData('success','Data Tersimpan');
                return redirect()->to('backend/seeleksi_syarat');
            }else{
                $this->session->setFlashData('error','Data Gagal Disimpan');
                return redirect()->to('backend/seeleksi_syarat/syarat2');
            }
            break;
        case 'update':
            $cek = $this->Syarat2_model->ubah($this->request->getPost('id') ,$data);
            if($cek){
                $this->session->setFlashData('success','Data Diubah');
                return redirect()->to('backend/seeleksi_syarat');
            }else{
                $this->session->setFlashData('error','Data Gagal DiUbah');
                return redirect()->to('backend/seeleksi_syarat/edit_syarat2');
            }
            break;
        }       
    }
    public function hapus_syarat2($id){
        if($this->Syarat2_model->delete($id)){
            $this->session->setFlashData('success','Data Berhasil Dihapus');
            return redirect()->to('backend/seeleksi_syarat');
        }else{
            $this->session->setFlashData('success','Data Gagal Dihapus');
            return redirect()->to('backend/seeleksi_syarat');
        }
    }
    public function syarat3()
    {
        $data = array(
            'modal_title'=>'Create Persyaratan Tenisi Jaringan',
            'action'=>'insert',
            'modal_s'=>'modal-lg',
            'scroll'=>'',
            'btn'=>'Create',
            'pesan'=> $this->session->getFlashData('error')
        );

        echo view('backend/layout-admin/header',$data);
        echo view('backend/layanan/input_syarat3');
        echo view('backend/layout-admin/footer');
    }
    public function edit_syarat3($id)
    {
        $get = $this->Syarat3_model->get_by_id($id);
        $data = array('modal_title'=>'Update Dokumen Persyaratan Teknisi Jaringan','action'=>'update','modal_s'=>'','scroll'=>'','get'=>$get,'btn'=>'Update',
            'pesan'=> $this->session->getFlashData('error')
        );
        echo view('backend/layout-admin/header',$data);
        echo view('backend/layanan/input_syarat3');
        echo view('backend/layout-admin/footer');
    }
    public function create_syarat3(){
        
        $data = array('modal_title'=>'Create Dokumen Persyaratan Teknisi Jaringan','action'=>'insert','modal_s'=>'modal-lg','scroll'=>'','btn'=>'Create');
        echo view('App\Views\backend\layanan\input_syarat3',$data);
    }
    public function update_syarat3($id){
        
        $get = $this->Syarat3_model->get_by_id($id);
        $data = array('modal_title'=>'Update Dokumen Persyaratan Teknisi Jaringan','action'=>'update','modal_s'=>'','scroll'=>'','get'=>$get,'btn'=>'Update');
        echo view('App\Views\backend\layanan\input_syarat3',$data);
    }
    public function save_syarat3(){
        $data = array(
				'item' => $this->request->getPost('item'),
				'file' => $this->request->getPost('file'),
		    );
        switch ($this->request->getPost('action')) {
        case 'insert':
            $cek = $this->Syarat3_model->tambah($data);
            if($cek){
                $this->session->setFlashData('success','Data Tersimpan');
                return redirect()->to('backend/seeleksi_syarat');
            }else{
                $this->session->setFlashData('error','Data Gagal Disimpan');
                return redirect()->to('backend/seeleksi_syarat/syarat3');
            }
            break;
        case 'update':
            $cek = $this->Syarat3_model->ubah($this->request->getPost('id') ,$data);
            if($cek){
                $this->session->setFlashData('success','Data Diubah');
                return redirect()->to('backend/seeleksi_syarat');
            }else{
                $this->session->setFlashData('error','Data Gagal DiUbah');
                return redirect()->to('backend/seeleksi_syarat/edit_syarat3');
            }
            break;
        }       
    }
    public function hapus_syarat3($id){
        if($this->Syarat3_model->delete($id)){
            $this->session->setFlashData('success','Data Berhasil Dihapus');
            return redirect()->to('backend/seeleksi_syarat');
        }else{
            $this->session->setFlashData('success','Data Gagal Dihapus');
            return redirect()->to('backend/seeleksi_syarat');
        }
    }
}