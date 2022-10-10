<?php
namespace App\Controllers\Backend;
use App\Models\Aplikasi1_model;
use App\Models\Aplikasi2_model;

class Aplikasi extends BaseController
{
    protected $Aplikasi1_model;
    protected $Aplikasi2_model;

    public function __construct(){
        $this->Aplikasi1_model = new Aplikasi1_model();
        $this->Aplikasi2_model = new Aplikasi2_model();
    }
    public function index()
    {
        $data = [
            'aplikasi1' => $this->Aplikasi1_model->findAll(),
            'aplikasi2' => $this->Aplikasi2_model->findAll(),
            'pesan' => $this->session->getFlashData('success')
        ];
        echo view('backend/layout-admin/header');
        echo view('backend/aplikasi/aplikasi_admin', $data);
        echo view('backend/layout-admin/footer');
    }
    public function umum()
    {
        $data = array(
            'modal_title'=>'Create Aplikasi Umum',
            'action'=>'insert',
            'modal_s'=>'modal-lg',
            'scroll'=>'',
            'btn'=>'Create',
            'pesan'=> $this->session->getFlashData('error')
        );

        echo view('backend/layout-admin/header',$data);
        echo view('backend/aplikasi/aplikasi_umum');
        echo view('backend/layout-admin/footer');
    }
    public function edit_umum($id)
    {
        $get = $this->Aplikasi1_model->get_by_id($id);
        $data = array('modal_title'=>'Update Aplikasi Umum','action'=>'update','modal_s'=>'','scroll'=>'','get'=>$get,'btn'=>'Update',
            'pesan'=> $this->session->getFlashData('error')
        );

        echo view('backend/layout-admin/header',$data);
        echo view('backend/aplikasi/aplikasi_umum');
        echo view('backend/layout-admin/footer');
    }
    public function create_aplikasi_umum(){
        
        $data = array('modal_title'=>'Create Aplikasi Umum','action'=>'insert','modal_s'=>'modal-lg','scroll'=>'','btn'=>'Create');
        echo view('App\Views\backend\aplikasi\aplikasi_umum',$data);
    }
    public function update_aplikasi_umum($id){
        
        $get = $this->Aplikasi1_model->get_by_id($id);
        $data = array('modal_title'=>'Update Aplikasi Umum','action'=>'update','modal_s'=>'','scroll'=>'','get'=>$get,'btn'=>'Update');
        echo view('App\Views\backend\aplikasi\aplikasi_umum',$data);
    }
    public function save_umum(){
        $data = array(
				'tgl_aplikasi1' => $this->request->getPost('tgl_aplikasi1'),
				'nama_aplikasi1' => $this->request->getPost('nama_aplikasi1'),
				'penggagas1' => $this->request->getPost('penggagas1'),
				'manual_book1' => $this->request->getPost('manual_book1'),
				'file_manualbook1' => $this->request->getPost('file_manualbook1'),
				'jenis_aplikasi1' => $this->request->getPost('jenis_aplikasi1'),
				'bahasa_pemograman1' => $this->request->getPost('bahasa_pemograman1'),
				'deskripsi_aplikasi1' => $this->request->getPost('deskripsi_aplikasi1'),
		    );
        switch ($this->request->getPost('action')) {
        case 'insert':
            $cek = $this->Aplikasi1_model->tambah($data);
            if($cek){
                $this->session->setFlashData('success','Data Tersimpan');
                return redirect()->to('backend/aplikasi');
            }else{
                $this->session->setFlashData('error','Data Gagal Disimpan');
                return redirect()->to('backend/aplikasi/umum');
            }
            break;
        case 'update':
            $cek = $this->Aplikasi1_model->ubah($this->request->getPost('id') ,$data);
            if($cek){
                $this->session->setFlashData('success','Data Diubah');
                return redirect()->to('backend/aplikasi');
            }else{
                $this->session->setFlashData('error','Data Gagal DiUbah');
                return redirect()->to('backend/aplikasi/edit_umum');
            }
            break;
        }       
    }
    public function hapus($id){
        if($this->Aplikasi1_model->delete($id)){
            $this->session->setFlashData('success','Data Berhasil Dihapus');
            return redirect()->to('backend/aplikasi');
        }else{
            $this->session->setFlashData('success','Data Gagal Dihapus');
            return redirect()->to('backend/aplikasi');
        }
    }
    public function khusus()
    {
        echo view('backend/layout-admin/header');
        echo view('backend/aplikasi/aplikasi_khusus');
        echo view('backend/layout-admin/footer');
    }
    public function edit_khusus($id)
    {
        $get = $this->Aplikasi2_model->get_by_id($id);
        $data = array('modal_title'=>'Update Aplikasi Khusus','action'=>'update','modal_s'=>'','scroll'=>'','get'=>$get,'btn'=>'Update',
            'pesan'=> $this->session->getFlashData('error')
        );

        echo view('backend/layout-admin/header',$data);
        echo view('backend/aplikasi/aplikasi_khusus');
        echo view('backend/layout-admin/footer');
    }
    public function create_aplikasi_khusus(){
        
        $data = array('modal_title'=>'Create Aplikasi Khusus','action'=>'insert','modal_s'=>'modal-lg','scroll'=>'','btn'=>'Create');
        echo view('App\Views\backend\aplikasi\aplikasi_khusus',$data);
    }
    public function update_aplikasi_khusus($id){
        
        $get = $this->Aplikasi1_model->get_by_id($id);
        $data = array('modal_title'=>'Update Aplikasi Khusus','action'=>'update','modal_s'=>'','scroll'=>'','get'=>$get,'btn'=>'Update');
        echo view('App\Views\backend\aplikasi\aplikasi_khusus',$data);
    }
    public function save_khusus(){
        $data = array(
				'nama_aplikasi2' => $this->request->getPost('nama_aplikasi2'),
				'penggagas2' => $this->request->getPost('penggagas2'),
				'manual_book2' => $this->request->getPost('manual_book2'),
				'file_aplikasi2' => $this->request->getPost('file_aplikasi2'),
				'jenis_aplikasi2' => $this->request->getPost('jenis_aplikasi2'),
				'bahasa_pemograman2' => $this->request->getPost('bahasa_pemograman2'),
				'status_aplikasi2' => $this->request->getPost('status_aplikasi2'),
				'deskripsi_aplikasi2' => $this->request->getPost('deskripsi_aplikasi2'),
		    );
        switch ($this->request->getPost('action')) {
        case 'insert':
            $cek = $this->Aplikasi2_model->tambah($data);
            if($cek){
                $this->session->setFlashData('success','Data Tersimpan');
                return redirect()->to('backend/aplikasi');
            }else{
                $this->session->setFlashData('error','Data Gagal Disimpan');
                return redirect()->to('backend/aplikasi/khusus');
            }
            break;
        case 'update':
            $cek = $this->Aplikasi2_model->ubah($this->request->getPost('id') ,$data);
            if($cek){
                $this->session->setFlashData('success','Data Diubah');
                return redirect()->to('backend/aplikasi');
            }else{
                $this->session->setFlashData('error','Data Gagal DiUbah');
                return redirect()->to('backend/aplikasi/edit_khusus');
            }
            break;
        }       
    }
    public function hapus_khusus($id){
        if($this->Aplikasi2_model->delete($id)){
            $this->session->setFlashData('success','Data Berhasil Dihapus');
            return redirect()->to('backend/aplikasi');
        }else{
            $this->session->setFlashData('success','Data Gagal Dihapus');
            return redirect()->to('backend/aplikasi');
        }
    }
}