<?php namespace App\Models;
use CodeIgniter\Model;
class Rfk_model extends Model

{ 
    protected $table = 'tabel_rfk';
    protected $allowedFields = ['tgl_pengesahan_rfk','nama_dok_rfk','file_rfk','uraian_rfk'];
    // datatables
    private function _get_datatables_query()
	{
        $column_order = array('tabel_rfk.tgl_pengesahan_rfk','tabel_rfk.nama_dok_rfk','tabel_rfk.file_rfk','tabel_rfk.uraian_rfk',null);
        $column_search = array('tabel_rfk.tgl_pengesahan_rfk','tabel_rfk.nama_dok_rfk','tabel_rfk.file_rfk','tabel_rfk.uraian_rfk',null);
        $orders = array('id' => 'asc');

        $this->db->table('tabel_rfk');

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
        $this->table('tabel_rfk');
        return $this->countAllResults();
    }
    // get all
    public function get_all(){
        $this->db->table('tabel_rfk');
        return $this->get();
    }
    // get data by id
    public function get_by_id($id){
        $this->db->table('tabel_rfk');
        $this->where('id', $id);
        return $this->get()->getRow();
    }
    public function tambah($data){
        if($this->db->table('tabel_rfk')->insert($data)){
            return TRUE;
        }
        return $this->db->error();
    }
    public function ubah($id, $data){
        if($this->db->table('tabel_rfk')->update($data, array('id'=>$id))){
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