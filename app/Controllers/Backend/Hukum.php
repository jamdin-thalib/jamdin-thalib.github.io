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
            'pesan' => $this->session->getFlashData('success')
        ];

        echo view('backend/layout-admin/header');
        echo view('backend/hukum/hukum_admin',$data);
        echo view('backend/layout-admin/footer');
    }
    public function hukum()
    {
        $data = array(
            'modal_title'=>'Create Produk Hukum',
            'action'=>'insert',
            'modal_s'=>'modal-lg',
            'scroll'=>'',
            'btn'=>'Create',
            'pesan'=> $this->session->getFlashData('error')
        );

        echo view('backend/layout-admin/header',$data);
        echo view('backend/hukum/hukum_admin');
        echo view('backend/layout-admin/footer');
    }
    public function edit_hukum($id)
    {
        $get = $this->Hukum_model->get_by_id($id);
        $data = array('modal_title'=>'Update Produk Hukum','action'=>'update','modal_s'=>'','scroll'=>'','get'=>$get,'btn'=>'Update',
            'pesan'=> $this->session->getFlashData('error')
        );

        echo view('backend/layout-admin/header',$data);
        echo view('backend/hukum/input_hukum');
        echo view('backend/layout-admin/footer');
    }
    public function create_hukum(){
        
        $data = array('modal_title'=>'Create Produk Hukum','action'=>'insert','modal_s'=>'modal-lg','scroll'=>'','btn'=>'Create');
        echo view('App\Views\backend\hukum\input_hukum',$data);
    }
    public function update_hukum($id){
        
        $get = $this->Hukum_model->get_by_id($id);
        $data = array('modal_title'=>'Update Produk Hukum','action'=>'update','modal_s'=>'','scroll'=>'','get'=>$get,'btn'=>'Update');
        echo view('App\Views\backend\hukum\input_hukum',$data);
    }
    public function save(){
        $data = array(
				'tgl_produkh' => $this->request->getPost('tgl_produkh'),
				'nama_produkh' => $this->request->getPost('nama_produkh'),
				'file_hukum' => $this->request->getPost('file_hukum'),
				'status' => $this->request->getPost('status'),
				'uraianh' => $this->request->getPost('uraianh'),
		    );
        switch ($this->request->getPost('action')) {
        case 'insert':
            $cek = $this->Hukum_model->tambah($data);
            if($cek){
                $this->session->setFlashData('success','Data Tersimpan');
                return redirect()->to('backend/hukum');
            }else{
                $this->session->setFlashData('error','Data Gagal Disimpan');
                return redirect()->to('backend/hukum/hukum');
            }
            break;
        case 'update':
            $cek = $this->Hukum_model->ubah($this->request->getPost('id') ,$data);
            if($cek){
                $this->session->setFlashData('success','Data Diubah');
                return redirect()->to('backend/hukum');
            }else{
                $this->session->setFlashData('error','Data Gagal DiUbah');
                return redirect()->to('backend/hukum/edit_hukum');
            }
            break;
        }       
    }
    public function hapus($id){
        if($this->Hukum_model->delete($id)){
            $this->session->setFlashData('success','Data Berhasil Dihapus');
            return redirect()->to('backend/hukum');
        }else{
            $this->session->setFlashData('success','Data Gagal Dihapus');
            return redirect()->to('backend/hukum');
        }
    }
    public function hukum_input()
    {
        echo view('backend/layout-admin/header');
        echo view('backend/hukum/input_hukum');
        echo view('backend/layout-admin/footer');
    }
}