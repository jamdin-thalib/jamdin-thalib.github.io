<?php
namespace App\Controllers\Backend;
use App\Models\Pegawai_Model_Pns;
use App\Models\Pegawai_Model_Ptt;
class Pegawai extends BaseController
{
    protected $Pegawai_Model_Pns;
    protected $Pegawai_Model_Ptt;

    public function __construct(){
        $this->Pegawai_Model_Pns = new Pegawai_Model_Pns();
        $this->Pegawai_Model_Ptt = new Pegawai_Model_Ptt();
    }
    public function index()
    {
        $data = [
            'pns' => $this->Pegawai_Model_Pns->findAll(),
            'ptt' => $this->Pegawai_Model_Ptt->findAll(),
        ];
        echo view('backend/layout-admin/header');
        echo view('backend/pegawai/pegawai',$data);
        echo view('backend/layout-admin/footer');
    }
    public function pns()
    {
        $data = array(
            'modal_title'=>'Create Dafatar PNS',
            'action'=>'insert',
            'modal_s'=>'modal-lg',
            'scroll'=>'',
            'btn'=>'Create',
            'pesan'=> $this->session->getFlashData('error')
        );
        echo view('backend/layout-admin/header',$data);
        echo view('backend/pegawai/input_asn');
        echo view('backend/layout-admin/footer');
    }
    public function edit_pns($id)
    {
        $get = $this->Pegawai_Model_Pns->get_by_id($id);
        $data = array('modal_title'=>'Update Data PNS','action'=>'update','modal_s'=>'','scroll'=>'','get'=>$get,'btn'=>'Update',
            'pesan'=> $this->session->getFlashData('error')
        );

        echo view('backend/layout-admin/header',$data);
        echo view('backend/pegawai/input_asn');
        echo view('backend/layout-admin/footer');
    }
    public function create_pns(){
        
        $data = array('modal_title'=>'Create Data PNS','action'=>'insert','modal_s'=>'modal-lg','scroll'=>'','btn'=>'Create');
        echo view('App\Views\backend\pegawai\input_asn',$data);
    }
    public function update_pns($id){
        
        $get = $this->Pegawai_Model_Pns->get_by_id($id);
        $data = array('modal_title'=>'Update Data PNS','action'=>'update','modal_s'=>'','scroll'=>'','get'=>$get,'btn'=>'Update');
        echo view('App\Views\backend\pegawai\input_asn',$data);
    }
    public function save_pns(){
        $data = array(
				'nama_pegawai' => $this->request->getPost('nama_pegawai'),
				'nip' => $this->request->getPost('nip'),
				'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
				'tempat_lahir' => $this->request->getPost('tempat_lahir'),
				'tgl_lahir' => $this->request->getPost('tgl_lahir'),
				'alamat' => $this->request->getPost('alamat'),
				'usia' => $this->request->getPost('usia'),
				'cpns' => $this->request->getPost('cpns'),
				'pns' => $this->request->getPost('pns'),
				'pangkat_gol' => $this->request->getPost('pangkat_gol'),
				'tmt_pangkat' => $this->request->getPost('tmt_pangkat'),
				'tahun' => $this->request->getPost('tahun'),
				'bulan' => $this->request->getPost('bulan'),
				'berkala_awal' => $this->request->getPost('berkala_awal'),
				'berkala_akhir' => $this->request->getPost('berkala_akhir'),
				'jenis_pegawai' => $this->request->getPost('jenis_pegawai'),
				'agama' => $this->request->getPost('agama'),
				'status_kawin' => $this->request->getPost('status_kawin'),
				'nama_pt' => $this->request->getPost('nama_pt'),
				'tingkat_pendidikan' => $this->request->getPost('tingkat_pendidikan'),
				'program_studi' => $this->request->getPost('program_studi'),
				'tahun_lulus' => $this->request->getPost('tahun_lulus'),
				'jabatan' => $this->request->getPost('jabatan'),
				'eselon' => $this->request->getPost('eselon'),
		    );
        switch ($this->request->getPost('action')) {
        case 'insert':
            $cek = $this->Pegawai_Model_Pns->tambah($data);
            if($cek){
                $this->session->setFlashData('success','Data Tersimpan');
                return redirect()->to('backend/pegawai');
            }else{
                $this->session->setFlashData('error','Data Gagal Disimpan');
                return redirect()->to('backend/pegawai/pns');
            }
            break;
        case 'update':
            $cek = $this->Pegawai_Model_Pns->ubah($this->request->getPost('id') ,$data);
            if($cek){
                $this->session->setFlashData('success','Data Diubah');
                return redirect()->to('backend/pegawai');
            }else{
                $this->session->setFlashData('error','Data Gagal DiUbah');
                return redirect()->to('backend/pegawai/edit_pns');
            }
            break;
        }       
    }
    public function hapus_pns($id){
        if($this->Pegawai_Model_Pns->delete($id)){
            $this->session->setFlashData('success','Data Berhasil Dihapus');
            return redirect()->to('backend/pegawai');
        }else{
            $this->session->setFlashData('success','Data Gagal Dihapus');
            return redirect()->to('backend/pegawai');
        }
    }



    public function ptt()
    {
        $data = array(
            'modal_title'=>'Create Dafatar PTT',
            'action'=>'insert',
            'modal_s'=>'modal-lg',
            'scroll'=>'',
            'btn'=>'Create',
            'pesan'=> $this->session->getFlashData('error')
        );
        echo view('backend/layout-admin/header',$data);
        echo view('backend/pegawai/input_ptt');
        echo view('backend/layout-admin/footer');
    }
    public function edit_ptt($id)
    {
        $get = $this->Pegawai_Model_Ptt->get_by_id($id);
        $data = array('modal_title'=>'Update Data PTT','action'=>'update','modal_s'=>'','scroll'=>'','get'=>$get,'btn'=>'Update',
            'pesan'=> $this->session->getFlashData('error')
        );

        echo view('backend/layout-admin/header',$data);
        echo view('backend/pegawai/input_ptt');
        echo view('backend/layout-admin/footer');
    }
    public function create_ptt(){
        
        $data = array('modal_title'=>'Create Data PTT','action'=>'insert','modal_s'=>'modal-lg','scroll'=>'','btn'=>'Create');
        echo view('App\Views\backend\pegawai\input_ptt',$data);
    }
    public function update_ptt($id){
        
        $get = $this->Pegawai_Model_Ptt->get_by_id($id);
        $data = array('modal_title'=>'Update Data PTT','action'=>'update','modal_s'=>'','scroll'=>'','get'=>$get,'btn'=>'Update');
        echo view('App\Views\backend\pegawai\input_ptt',$data);
    }
    public function save_ptt(){
        $data = array(
				'nama_pegawai' => $this->request->getPost('nama_pegawai'),
				'nip' => $this->request->getPost('nip'),
				'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
				'tempat_lahir' => $this->request->getPost('tempat_lahir'),
				'tgl_lahir' => $this->request->getPost('tgl_lahir'),
				'agama' => $this->request->getPost('agama'),
				'alamat' => $this->request->getPost('alamat'),
				'tahun_terangkat' => $this->request->getPost('tahun_terangkat'),
				'pendidikan' => $this->request->getPost('pendidikan'),
				'nama_pt' => $this->request->getPost('nama_pt'),
				'jurusan_pt' => $this->request->getPost('jurusan_pt'),
		    );
        switch ($this->request->getPost('action')) {
        case 'insert':
            $cek = $this->Pegawai_Model_Ptt->tambah($data);
            if($cek){
                $this->session->setFlashData('success','Data Tersimpan');
                return redirect()->to('backend/pegawai');
            }else{
                $this->session->setFlashData('error','Data Gagal Disimpan');
                return redirect()->to('backend/pegawai/ptt');
            }
            break;
        case 'update':
            $cek = $this->Pegawai_Model_Ptt->ubah($this->request->getPost('id') ,$data);
            if($cek){
                $this->session->setFlashData('success','Data Diubah');
                return redirect()->to('backend/pegawai');
            }else{
                $this->session->setFlashData('error','Data Gagal DiUbah');
                return redirect()->to('backend/pegawai/edit_ptt');
            }
            break;
        }       
    }
    public function hapus_ptt($id){
        if($this->Pegawai_Model_Ptt->delete($id)){
            $this->session->setFlashData('success','Data Berhasil Dihapus');
            return redirect()->to('backend/pegawai');
        }else{
            $this->session->setFlashData('success','Data Gagal Dihapus');
            return redirect()->to('backend/pegawai');
        }
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