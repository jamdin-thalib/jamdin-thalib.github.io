<?php
namespace App\Controllers;
use App\Models\Pendaftaran_model;

class Pendaftaran extends BaseController
{
    protected $Pendaftaran_model;
    
    public function __construct(){
        $this->Pendaftaran_model = new Pendaftaran_model();
        
    }
    public function index()
    {
        $data = [
            'pendaftaran' => $this->Pendaftaran_model->findAll(),
            'pesan' => $this->session->getFlashData('success')
        ];
        echo view('backend/layout-admin/header');
        echo view('backend/pendaftaran/admin_pendaftaran', $data);
        echo view('backend/layout-admin/footer');
    }
    public function pendaftaran()
    {
        $data = array(
            'modal_title'=>'Create Pendafataran Peserta Seleksi',
            'action'=>'insert',
            'modal_s'=>'modal-lg',
            'scroll'=>'',
            'btn'=>'Create',
            'pesan'=> $this->session->getFlashData('error')
        );

        echo view('backend/layout-admin/header',$data);
        echo view('backend/pendaftaran/admin_pendaftaran');
        echo view('backend/layout-admin/footer');
    }
    public function edit_pendaftaran($id)
    {
        $get = $this->Pendaftaran_model->get_by_id($id);
        $data = array('modal_title'=>'Update Peserta Seleksi','action'=>'update','modal_s'=>'','scroll'=>'','get'=>$get,'btn'=>'Update',
            'pesan'=> $this->session->getFlashData('error')
        );

        echo view('backend/layout-admin/header',$data);
        echo view('backend/pendaftaran/admin_pendaftaran');
        echo view('backend/layout-admin/footer');
    }
    public function create_pendaftaran(){
        
        $data = array('modal_title'=>'Create Peserta Seleksi','action'=>'insert','modal_s'=>'modal-lg','scroll'=>'','btn'=>'Create');
        echo view('App\Views\backend\pendaftaran\admin_pendaftaran',$data);
    }
    public function update_pendaftaran($id){
        
        $get = $this->Pendaftaran_model->get_by_id($id);
        $data = array('modal_title'=>'Update Peserta Seleksi','action'=>'update','modal_s'=>'','scroll'=>'','get'=>$get,'btn'=>'Update');
        echo view('App\Views\backend\pendaftaran\admin_pendaftaran',$data);
    }
    public function save_pendafataran(){
        $data = array(
				'nik' => $this->request->getPost('nik'),
				'nama_depan' => $this->request->getPost('nama_depan'),
				'nama_belakang' => $this->request->getPost('nama_belakang'),
				'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
				'agama' => $this->request->getPost('agama'),
				'tempat_lahir' => $this->request->getPost('tempat_lahir'),
				'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
				'no_telpon' => $this->request->getPost('no_telpon'),
				'nama_kampus' => $this->request->getPost('nama_kampus'),
				'pendidikan_terkahir' => $this->request->getPost('pendidikan_terkahir'),
				'program_study' => $this->request->getPost('program_study'),
				'ipk' => $this->request->getPost('ipk'),
				'email' => $this->request->getPost('email'),
				'alamat' => $this->request->getPost('alamat'),
				'rt' => $this->request->getPost('rt'),
				'rw' => $this->request->getPost('rw'),
				'kelurahan' => $this->request->getPost('kelurahan'),
				'kecamatan' => $this->request->getPost('kecamatan'),
				'kabupaten' => $this->request->getPost('kabupaten'),
		    );
        switch ($this->request->getPost('action')) {
        case 'insert':
            $cek = $this->Pendaftaran_model->tambah($data);
            if($cek){
                $this->session->setFlashData('success','Data Tersimpan');
                return redirect()->to('backend/pendaftaran');
            }else{
                $this->session->setFlashData('error','Data Gagal Disimpan');
                return redirect()->to('backend/pendaftaran/pendaftaran');
            }
            break;
        case 'update':
            $cek = $this->Pendaftaran_model->ubah($this->request->getPost('id') ,$data);
            if($cek){
                $this->session->setFlashData('success','Data Diubah');
                return redirect()->to('backend/pendaftaran');
            }else{
                $this->session->setFlashData('error','Data Gagal DiUbah');
                return redirect()->to('backend/pendaftaran/edit_pendafataran');
            }
            break;
        }       
    }
    public function hapus($id){
        if($this->Pendaftaran_model->delete($id)){
            $this->session->setFlashData('success','Data Berhasil Dihapus');
            return redirect()->to('backend/pendaftaran');
        }else{
            $this->session->setFlashData('success','Data Gagal Dihapus');
            return redirect()->to('backend/pendaftaran');
        }
    }
    
    public function add()
    {
        echo view('backend/layout-admin/header');
        echo view('backend/layanan/pendaftaran');
        echo view('backend/layout-admin/footer');
    }
}