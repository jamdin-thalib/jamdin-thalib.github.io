<?php namespace App\Models;
use CodeIgniter\Model;
use SessionIdInterface;

class Syarat1_model extends Model

{ 
    protected $table = 'persyaratan_umum';
    protected $allowedFields = ['item','file'];
    // datatables
    private function _get_datatables_query()
	{
        $column_order = array('persyaratan_umum.item','persyaratan_umum.file',null);
        $column_search = array('persyaratan_umum.item','persyaratan_umum.file');
        $orders = array('id' => 'asc');

        $this->db->table('persyaratan_umum');

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
        $this->table('persyaratan_umum');
        return $this->countAllResults();
    }
    // get all
    public function get_all(){
        $this->db->table('persyaratan_umum');
        return $this->get();
    }
    // get data by id
    public function get_by_id($id){
        $this->db->table('persyaratan_umum');
        $this->where('id', $id);
        return $this->get()->getRow();
    }
    public function tambah($data){
        if($this->db->table('persyaratan_umum')->insert($data)){
            return TRUE;
        }
        return $this->db->error();
    }
    public function ubah($id, $data){
        if($this->db->table('persyaratan_umum')->update($data, array('id'=>$id))){
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