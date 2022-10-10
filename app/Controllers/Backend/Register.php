<?php
namespace App\Controllers\Backend;
use App\Models\Register_model;

class Register extends BaseController
{
    protected $Register_model;

    public function __construct(){
        $this->Register_model = new Register_model();
    }
    public function index(){
        $data = [
            'registrasi' => $this->Register_model->findAll(),
            'pesan' => $this->session->getFlashData('success')
        ];
        echo view('backend/layout-admin/header');
        echo view('backend/layout-admin/admin_register', $data);
        echo view('backend/layout-admin/footer');
    }
    public function registrasi()
    {
        $data = array(
            'modal_title'=>'Create Register',
            'action'=>'insert',
            'modal_s'=>'modal-lg',
            'scroll'=>'',
            'btn'=>'Create',
            'pesan'=> $this->session->getFlashData('error')
        );
        echo view('backend/layout-admin/header', $data);
        echo view('backend/layout-admin/admin_register');
        echo view('backend/layout-admin/footer');
    }
    public function edit($id)
    {
        $get = $this->Register_model->get_by_id($id);
        $data = array('modal_title'=>'Update Registrasi','action'=>'update','modal_s'=>'','scroll'=>'','get'=>$get,'btn'=>'Update',
            'pesan'=> $this->session->getFlashData('error')
        );

        echo view('backend/layout-admin/header', $data);
        echo view('backend/layout-admin/admin_register');
        echo view('backend/layout-admin/footer');
    }
    public function create(){
        
        $data = array('modal_title'=>'Create Registrasi','action'=>'insert','modal_s'=>'modal-lg','scroll'=>'','btn'=>'Create');
        echo view('App\Views\register',$data);
    }
    public function update($id){
        
        $get = $this->Register_model->get_by_id($id);
        $data = array('modal_title'=>'Update Aplikasi Umum','action'=>'update','modal_s'=>'','scroll'=>'','get'=>$get,'btn'=>'Update');
        echo view('App\Views\register',$data);
    }
    public function save(){
        $data = array(
				'full_name' => $this->request->getPost('full_name'),
				'username' => $this->request->getPost('username'),
				'pasword' => $this->request->getPost('pasword'),
				'pasword2' => $this->request->getPost('pasword2'),
				'email' => $this->request->getPost('email'),
				'email2' => $this->request->getPost('email2'),
		    );
        switch ($this->request->getPost('action')) {
        case 'insert':
            $cek = $this->Register_model->tambah($data);
            if($cek){
                $this->session->setFlashData('success','Data Tersimpan');
                return redirect()->to('backend/register');
            }else{
                $this->session->setFlashData('error','Data Gagal Disimpan');
                return redirect()->to('backend/register/registrasi');
            }
            break;
        case 'update':
            $cek = $this->Register_model->ubah($this->request->getPost('id') ,$data);
            if($cek){
                $this->session->setFlashData('success','Data Diubah');
                return redirect()->to('backend/layout-admin/admin_register');
            }else{
                $this->session->setFlashData('error','Data Gagal DiUbah');
                return redirect()->to('backend/register/edit');
            }
            break;
        }       
    }
    public function hapus($id){
        if($this->Register_model->delete($id)){
            $this->session->setFlashData('success','Data Berhasil Dihapus');
            return redirect()->to('backend/layout-admin/admin_register');
        }else{
            $this->session->setFlashData('success','Data Gagal Dihapus');
            return redirect()->to('backend/layout-admin/admin_register');
        }
    }
}