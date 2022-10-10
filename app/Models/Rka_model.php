<?php namespace App\Models;
use CodeIgniter\Model;
use SessionIdInterface;

class Rka_model extends Model

{ 
    protected $table = 'tabel_rka';
    protected $allowedFields = ['tgl_pengesahan_rka','nama_dok_rka','file_rka','uraian_rka'];
    // datatables
    private function _get_datatables_query()
	{
        $column_order = array('tabel_rka.tgl_pengesahan_rka','tabel_rka.nama_dok_rka','tabel_rka.file_rka','tabel_rkauraian_rka',null);
        $column_search = array('tabel_rka.tgl_pengesahan_rka','tabel_rka.nama_dok_rka','tabel_rka.file_rka','tabel_rkauraian_rka',null);
        $orders = array('id' => 'asc');

        $this->db->table('tabel_rka');

		$i = 0;
        foreach ($column_search as $item){
            if($_POST['search']['value']){
                if($i===0){
                    $this->groupStart();
                    $this->like($item, $_POST['search']['value']);
                }else{
                    $this->orLike($item, $_POST['search']['value']);
                }
                if(count($column_search) - 1 == $i) //last loop
                    $this->groupEnd();
            }
            $i++;
        }
        if(isset($_POST['order'])){
            $this->orderBy($column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        }else if(isset($orders)){
            $order = $orders;
            $this->orderBy(key($order), $order[key($order)]);
        }
	}
    public function get_datatables(){
        $this->_get_datatables_query();
        if($_POST['length'] != -1) $this->limit($_POST['length'], $_POST['start']);
        $query = $this->get();
        return $query->getResult();
    }
    public function count_filtered(){
        $this->_get_datatables_query();
        $query = $this->get();
        return $query->getNumRows();
    }
    public function count_all(){
        $this->table('tabel_rka');
        return $this->countAllResults();
    }
    // get all
    public function get_all(){
        $this->db->table('tabel_rka');
        return $this->get();
    }
    // get data by id
    public function get_by_id($id){
        $this->db->table('tabel_rka');
        $this->where('id', $id);
        return $this->get()->getRow();
    }
    public function tambah($data){
        if($this->db->table('tabel_rka')->insert($data)){
            return TRUE;
        }
        return $this->db->error();
    }
    public function ubah($id, $data){
        if($this->db->table('tabel_rka')->update($data, array('id'=>$id))){
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
}