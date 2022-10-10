<?php namespace App\Models;
use CodeIgniter\Model;
class Pendaftaran_model extends Model { 
    protected $table = 'pendaftaran';
    protected $allowedFields = ['user_id','nik','full_name','jenis_kelamin','agama','tempat_lahir','tanggal_lahir','no_telpon','nama_kampus','pendidikan_terkahir','program_study','ipk','email','alamat','rt','rw','kelurahan','kecamatan','kabupaten'];
    protected $returnType     = 'object';
    private function _get_datatables(){
        $column_search = array('nik','full_name','jenis_kelamin','agama','tempat_lahir','tanggal_lahir','no_telpon','nama_kampus','pendidikan_terkahir','program_study','ipk','email','alamat','rt','rw','kelurahan','kecamatan','kabupaten');
        $this->select("pendaftaran.id AS id,
        pendaftaran.user_id AS user_id,
        pendaftaran.nik AS nik,
        pendaftaran.full_name AS full_name,
        pendaftaran.jenis_kelamin AS jenis_kelamin,
        pendaftaran.agama AS agama,
        pendaftaran.tempat_lahir AS tempat_lahir,
        pendaftaran.tanggal_lahir AS tanggal_lahir,
        pendaftaran.no_telpon AS no_telpon,
        pendaftaran.nama_kampus AS nama_kampus,
        pendaftaran.pendidikan_terkahir AS pendidikan_terkahir,
        pendaftaran.program_study AS program_study,
        pendaftaran.ipk AS ipk,
        pendaftaran.email AS email,
        pendaftaran.alamat AS alamat,
        pendaftaran.rt AS rt,
        pendaftaran.rw AS rw,
        pendaftaran.kelurahan AS kelurahan,
        pendaftaran.kecamatan AS kecamatan,
        pendaftaran.kabupaten AS kabupaten,
        CASE 
            WHEN pendaftaran.`status` = 0 THEN 'Belum Melakukan Submit'
            WHEN pendaftaran.`status` = 1 THEN 'Submited'
            WHEN pendaftaran.`status` = 2 THEN 'Tidak Lulus Administrasi'
            ELSE 'Lulus Pemberkasan'
        END AS `status`,
        CASE 
            WHEN users.posisi = 1 THEN 'Programer'
            ELSE 'Teknisi Jaringan'
        END AS posisi");
        $i = 0;
        foreach ($column_search as $item){ // loop column 
            if($_GET['search']){
                if($i===0){
                    $this->groupStart(); 
                    $this->like($item,$_GET['search']);
                }else{
                    $this->orLike($item, $_GET['search']);
                }
                if(count($column_search) - 1 == $i)
                    $this->groupEnd();
            }
            $i++;
        }
        if(isset($_GET['order'])){
            $this->orderBy($_GET['sort'], $_GET['order']);
        }else{
            $this->orderBy('id', 'asc');
        }
        $this->join('users','pendaftaran.user_id = users.id','INNER');
    }
    public function get_datatables(){
        $this->_get_datatables();
        return $this->findAll($_GET['limit'],$_GET['offset']);
    }
    public function total(){
        $this->_get_datatables();
        if ($this->tempUseSoftDeletes) {
            $this->where($this->table . '.' . $this->deletedField, null);
        }
        return $this->get()->getNumRows();
    }
    // get all
    public function get_all(){
        $this->db->table('pendaftaran');
        return $this->get();
    }
    // get data by id
    public function get_by_id($id){
        $this->db->table('pendaftaran');
        $this->where('id', $id);
        return $this->get()->getRow();
    }
    public function get_by_user_id($id){
        $this->db->table('pendaftaran');
        $this->where('user_id', $id);
        return $this->get()->getRow();
    }
    public function tambah($data){
        if($this->db->table('pendaftaran')->insert($data)){
            return TRUE;
        }
        return $this->db->error();
    }
    public function ubah($id, $data){
        if($this->db->table('pendaftaran')->update($data, array('id'=>$id))){
            return TRUE;
        }
        return $this->db->error();
    }
    public function hapus($id){
        $this->where('id',$id);
        if ($this->delete()){
            return TRUE;
        }
        return $this->db->error();
    }
    public function addBerkasPendaftar($posisi,$user_id){
        $data = [];
        $id = $this->get_by_user_id($user_id);
        $in = ($posisi == 1 ) ? array('2','1') : array('2');
        $query = $this->db->table('persyaratan_berkas')->whereIn('posisi',$in)->get();
        foreach($query->getResult() as $row){
            array_push($data,array(
                'peserta_id'=>$id->id,
                'id_berkas'=>$row->id
            ));
        }
        $this->db->table('file_berkas')->insertBatch($data);
    }
    public function ubahBerkas($data,$id){
        if($this->db->table('file_berkas')->update($data,array('id' => $id ))){
            return TRUE;
        }
        return $this->db->error();
    }
    public function getBerkasById($id){
        $this->db->table('file_berkas');
        $this->where('id', $id);
        return $this->get()->getRow();
    }
    public function getBerkas($idPeserta)
    {
        $query = $this->db->query("SELECT persyaratan_berkas.id as id, file_berkas.id as berkas_id, file_berkas.file_berkas as file_berkas, persyaratan_berkas.judul as nama_berkas FROM persyaratan_berkas INNER JOIN file_berkas ON file_berkas.id_berkas = persyaratan_berkas.id WHERE file_berkas.peserta_id = '$idPeserta'");
        return $query->getResult();
    }
    public function getLihatBerkas($idPeserta)
    {
        $builder = $this->db->query("SELECT persyaratan_berkas.id as id, file_berkas.id as berkas_id, file_berkas.file_berkas as file_berkas, persyaratan_berkas.judul AS nama_berkas FROM persyaratan_berkas INNER JOIN file_berkas ON file_berkas.id_berkas = persyaratan_berkas.id WHERE file_berkas.peserta_id = '$idPeserta' AND file_berkas.`file_berkas` IS NOT NULL");
        return $builder->getResult();
    }
    public function getFoto($id_peserta){
        $builder = $this->db->query("SELECT file_berkas.`file_berkas` as file FROM file_berkas WHERE file_berkas.id_berkas = '4' AND file_berkas.peserta_id = '$id_peserta'");
        return $builder->getRow();
    }
    public function getBerkasCetak($idPeserta)
    {
        $builder = $this->db->query("SELECT persyaratan_berkas.id as id, file_berkas.id as berkas_id, file_berkas.file_berkas as file_berkas, persyaratan_berkas.judul AS nama_berkas FROM persyaratan_berkas INNER JOIN file_berkas ON file_berkas.id_berkas = persyaratan_berkas.id WHERE file_berkas.peserta_id = '$idPeserta' AND file_berkas.`file_berkas` IS NOT NULL");
        return $builder->getResult();
    }
}
/* End of file Kcb_jekel_model.php */
/* Location: ./application/models/Kcb_jekel_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-10-29 08:24:44 */
/* http://harviacode.com */