<?php
namespace App\Controllers\Backend;
use App\Models\Pendaftaran_model;
use TCPDF;
class Pendaftaran extends BaseController
{
    protected $Pendaftaran_model;
    public function __construct(){
        $this->Pendaftaran_model = new Pendaftaran_model();
    }
    public function index()
    {
        if (! $this->ionAuth->isAdmin ()){
            return redirect()->to('login');
        }
        $data = [
            'pendaftaran' => $this->Pendaftaran_model->findAll(),
            'pesan' => $this->session->getFlashData('success'),
            'title'=>'Admin | Pendaftaran',
            'url'=>'backend/pendaftaran/',
            'm_pendaftaran'=>'active',
            'session'=>$this->session
        ];
        echo view('backend/layout-admin/header', $data);
        echo view('backend/layanan/admin_pendaftaran');
        echo view('backend/layout-admin/footer');
    }
    public function ajax_list() {
        if (!$this->ionAuth->loggedIn()){
           return redirect()->to('login');
       }
       $list = $this->Pendaftaran_model->get_datatables();
       $data = array();
       $no = $_GET['offset'] + 1;
       foreach ($list as $rows) {
           $row = array();
           $row['id'] = $rows->id;
           $row['nomor'] = $no++;
           $row['posisi'] = $rows->posisi;
           $row['nik'] = $rows->nik;
           $row['full_name'] = $rows->full_name;
           $row['jenis_kelamin'] = $rows->jenis_kelamin;
           $row['agama'] = $rows->agama;
           $row['tempat_lahir'] = $rows->tempat_lahir;
           $row['tanggal_lahir'] = $rows->tanggal_lahir;
           $row['no_telpon'] = $rows->no_telpon;
           $row['nama_kampus'] = $rows->nama_kampus;
           $row['pendidikan_terkahir'] = $rows->pendidikan_terkahir;
           $row['program_study'] = $rows->program_study;
           $row['ipk'] = $rows->ipk;
           $row['email'] = $rows->email;
           $row['alamat'] = $rows->alamat;
           $row['rt'] = $rows->rt;
           $row['rw'] = $rows->rw;
           $row['kelurahan'] = $rows->kelurahan;
           $row['kecamatan'] = $rows->kecamatan;
           $row['kabupaten'] = $rows->kabupaten;
           $row['status'] = $rows->status;
           $data[] = $row;
       }
       $output = array(
           "total" => $this->Pendaftaran_model->total(),
           "totalNotFiltered" => $this->Pendaftaran_model->countAllResults(),
           "rows" => $data,
       );
       echo json_encode($output);
    }
    public function edit(){
        if (! $this->ionAuth->isAdmin()){
            return redirect()->to('login');
        }
        $id = $this->request->getPost('id');
        $data['get'] = $this->Pendaftaran_model->getBerkas($id);
        $this->data = array('modal_title'=>'Berkas Peserta <b>'. $this->request->getPost('nama').'</b>',
            'action'=>'update',
            'modal_s'=>'',
            'user_id'=>$id,
            'btn'=>'Verifikasi Berkas',
            'body_modal'=> view('backend/layanan/lihat_berkas',$data)
        );
        echo view('modal',$this->data);
    }
    public function create_pendaftaran(){
        if (! $this->ionAuth->loggedIn()){
            return redirect()->to('login');
        }
        $data = array('modal_title'=>'Create Peserta Seleksi','action'=>'insert','modal_s'=>'modal-lg','scroll'=>'','btn'=>'Create');
        echo view('App\Views\backend\layanan/admin_pendafataran',$data);
    }
    public function update_pendaftaran($id){
        if (! $this->ionAuth->loggedIn()){
            return redirect()->to('login');
        }
        $get = $this->Pendaftaran_model->get_by_id($id);
        $data = array('modal_title'=>'Update Peserta Seleksi','action'=>'update','modal_s'=>'','scroll'=>'','get'=>$get,'btn'=>'Update');
        echo view('App\Views\backend\layanan/admin_pendafataran',$data);
    }
    public function save_pendafataran(){
        if (! $this->ionAuth->loggedIn()){
            return redirect()->to('login');
        }
        $data = array(
				'nik' => $this->request->getPost('nik'),
				'full_name' => $this->request->getPost('full_name'),
				'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
				'agama' => $this->request->getPost('agama'),
				'tempat_lahir' => $this->request->getPost('tempat_lahir'),
				'tanggal_lahir' => get_format_date_sql($this->request->getPost('tanggal_lahir')),
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
				'kabupaten' => $this->request->getPost('kabupaten')
		    );
        switch ($this->request->getPost('action')) {
        case 'insert':
            $cek = $this->Pendaftaran_model->tambah($data);
            if($cek){
                $this->session->setFlashData('success','Data Tersimpan');
                return redirect()->to('backend/pendafataran');
            }else{
                $this->session->setFlashData('error','Data Gagal Disimpan');
                return redirect()->to('backend/pendafataran/pendaftaran');
            }
            break;
        case 'update':
            $cek = $this->Pendaftaran_model->update($this->request->getPost('id'),$data);
            if($cek){
                $status['type'] = 'success';
                $status['text'] = 'Data Anda Telah Disubmit';
                $status['title'] = 'Success';
			}else{
                $status['type'] = 'error';
                $status['text'] = 'Data Anda Gagal Di Submit Silahkan Hubungi Tim Teknis Kominfo';
                $status['title'] = 'Error';
			}
            echo json_encode($status);
            break;
        }       
    }
    public function upload(){
        if (! $this->ionAuth->loggedIn()){
            return redirect()->to('login');
        }
        if(!empty($_FILES['file']['name'])){
            $file = $this->request->getFile('file');
            $file_name = $file->getRandomName();
            $id_file = $this->request->getPost('id_file');
            $h_size = 768;
            $w_size = 1024;
            if ($this->request->getPost('persya_id') == "4") {
                $h_size = 709;
                $w_size = 472;
            }
            $data['file_berkas'] = $file_name;
            $success = true;
            if ($this->request->getPost('tipe') == 'foto') {
                if(!$this->ionAuth->upload_img($file,$file_name, '', 0.5, $h_size, $w_size)){
                    $status['type'] = 'error';
                    $status['text'] = $this->ionAuth->errors($this->validationListTemplate);
                    $status['title'] = 'Error';
                    echo json_encode($status);
                    return false;
                }
                $success = true;
            }else{
                if(!$this->ionAuth->upload_pdf($file,$file_name, '', 0.5)){
                    $status['type'] = 'error';
                    $status['text'] = $this->ionAuth->errors($this->validationListTemplate);
                    $status['title'] = 'Error';
                    echo json_encode($status);
                    return false;
                }
                $success = true;
            }
            if($success){
                if ($this->Pendaftaran_model->ubahBerkas($data,$id_file)) {
                    $status['type'] = 'success';
                    $status['text'] = $this->ionAuth->messages();
                    $status['title'] = 'Success';
                }else{
                    $status['type'] = 'error';
                    $status['text'] = "error";
                    $status['title'] = 'Error';
                }
            }
        }else{
            $status['type'] = 'error';
            $status['text'] = 'File Empty';
            $status['title'] = 'Error';
        }
        echo json_encode($status);
    }
    public function finalisasi($id) {
        if (! $this->ionAuth->loggedIn()){
            return redirect()->to('login');
        }
        $this->Pendaftaran_model->ubah($id, ['status'=>1]);
    }
    public function hapus($id){
        if($this->Pendaftaran_model->delete($id)){
            $this->session->setFlashData('success','Data Berhasil Dihapus');
            return redirect()->to('backend/pendafataran');
        }else{
            $this->session->setFlashData('success','Data Gagal Dihapus');
            return redirect()->to('backend/pendafataran');
        }
    }
    public function syarat()
    {
        echo view('backend/layout-admin/header');
        echo view('backend/layanan/admin_syarat');
        echo view('backend/layout-admin/footer');
    }
    public function add()
    {
        echo view('backend/layout-admin/header');
        echo view('backend/layanan/pendaftaran');
        echo view('backend/layout-admin/footer');
    }
    public function cetak($id = 12){
        if (! $this->ionAuth->loggedIn()){
            return redirect()->to('login');
        }
        $pdf = new TCPDF('P', PDF_UNIT, 'F4', true, 'UTF-8', false);
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('diskominfo.bolmutkab.go.id');
        $pdf->SetTitle('Kartu Pendaftaran');
        $pdf->SetSubject('print');
        // remove default header/footer
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        // set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, 10, PDF_MARGIN_RIGHT);
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
        $pdf->SetFont('times', 'B', 15);
        $pdf->AddPage();
        $pdf->Ln(5);
        $html ='<table width="600" align="center" cellspacing="5" cellpadding="0">
            <tr>
                <td align="center"><img src="'.$_SERVER["DOCUMENT_ROOT"].'/assets/img/logokominfo.png" /></td>
            </tr>
            <tr>
                <td>KARTU PENDAFTARAN SELEKSI TENAGA AHLI</td>
            </tr>
            <tr><td><hr style="border-left:50px black solid;height: 5px;"></td></tr>
        </table>';
        //halaman depan
        $pdf->SetFont('times', 'B', 12);
        $pdf->writeHTML($html, true, false, true, false, '');
        $pdf->Ln(0);
        $user = $this->ionAuth->user();
        $posisi = ($user->posisi == 1) ? "Programer" : "Teknisi Jaringan";
        $get =  $this->Pendaftaran_model->get_by_user_id($id);
        $foto =  $this->Pendaftaran_model->getFoto($get->id)->file;
        $html ='<table border="0" cellspacing="0" cellpadding="0">
            <tr><td>Dinas Komunikasi Informatika Dan Persandian Kabupaten Bolaang Mongondow Utara</td></tr>
        </table>';
        $pdf->Ln(5);
        $pdf->writeHTML($html, true, false, true, false, '');
        $html ='<table width="750" border="1" cellspacing="0" cellpadding="5">
            <tr><td>Jabatan Yang Dilamar</td><td>'. $posisi .'</td><td rowspan="5" width="100" ><img src="'.$_SERVER["DOCUMENT_ROOT"].'/assets/img/'.$foto.'" height="150px" width="100" /></td></tr>
            <tr><td>Nama Lengkap</td><td>'. $get->full_name .'</td></tr>
            <tr><td>Nomor Induk Penduduk (NIK)</td><td>'.$get->nik .'</td></tr>
            <tr><td>Jenis Kelamin</td><td>'.$get->jenis_kelamin .'</td></tr>
            <tr><td>Agama</td><td>'.$get->agama .'</td></tr>
            <tr><td>Tempat, Tanggal Lahir</td><td colspan="2">'.$get->tempat_lahir.', '.$get->tanggal_lahir .'</td></tr>
            <tr><td>No Telp</td><td colspan="2">'.$get->no_telpon .'</td></tr>
            <tr><td>Nama Kampus/Sekolah</td><td colspan="2">'.$get->nama_kampus .'</td></tr>
            <tr><td>Pendidikan Terakhir</td><td colspan="2">'.$get->pendidikan_terkahir .'</td></tr>
            <tr><td>Program Study</td><td colspan="2">'.$get->program_study .'</td></tr>
            <tr><td>IPK</td><td colspan="2">'.$get->ipk .'</td></tr>
            <tr><td>e-mail</td><td colspan="2">'.$get->email .'</td></tr>
            <tr><td>Alamat</td><td colspan="2">'.$get->alamat .'</td></tr>
            <tr><td rowspan="5"></td><td>RT</td><td>'.$get->rt .'</td></tr>
            <tr><td>RW</td><td>'.$get->rw .'</td></tr>
            <tr><td>Desa/Kelurahan</td><td>'.$get->kelurahan .'</td></tr>
            <tr><td>Kecamatan</td><td>'.$get->kecamatan .'</td></tr>
            <tr><td>Kabupaten</td><td>'.$get->kabupaten .'</td></tr>
        </table>';
        $pdf->writeHTML($html, true, false, true, false, '');
        $file_upload = $this->Pendaftaran_model->getBerkasCetak($get->id);
        $html ='<table class="table">
            <tr>
                <td>File Upload :</td>
            </tr>';
            foreach ($file_upload as $row) {
                $html .='<tr>
                    <td>'.$row->nama_berkas.'</td>
                </tr>';
            }
        $html .='</table>';
        $pdf->writeHTML($html, true, false, true, false, '');
        $this->response->setContentType('application/pdf');
        //Close and output PDF document
        $pdf->Output('kartu-pendaftaran.pdf', 'I');
    }
    public function verifikasi($id){
        if (! $this->ionAuth->loggedIn()){
            return redirect()->to('login');
        }
        $stts = $this->request->getPost('status');
        if ($this->Pendaftaran_model->ubah($id, ['status'=>$stts])) {
            $status['type'] = 'success';
            $status['text'] = 'success';
            $status['title'] = 'Success';
        }else{
            $status['type'] = 'error';
            $status['text'] = "error";
            $status['title'] = 'Error';
        }
        echo json_encode($status);
    }
}