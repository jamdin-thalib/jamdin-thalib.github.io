<?php namespace App\Models;
use CodeIgniter\Model;
use SessionIdInterface;

class Domainbolmut_model extends Model

{ 
    protected $table = 'domain_bolmut';
    
    // datatables
    private function _get_datatables_query()
	{
        $column_search = array('tgl_pembuatan.domain_bolmut','nama_subdomain.domain_bolmut','status_domain.domain_bolmut','pengelola.domain_bolmut','nama_pengelola.domain_bolmut','no_telpon.domain_bolmut','link.domain_bolmut','deskripsi.domain_bolmut',null);
        $column_order = array('tgl_pembuatan.domain_bolmut','nama_subdomain.domain_bolmut','status_domain.domain_bolmut','pengelola.domain_bolmut','nama_pengelola.domain_bolmut','no_telpon.domain_bolmut','link.domain_bolmut','deskripsi.domain_bolmut',null);
        $orders = array('id' => 'asc');

        $this->db->table('domain_bolmut');

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
        $this->table('domain_bolmut');
        return $this->countAllResults();
    }
    // get all
    public function get_all(){
        $this->db->table('domain_bolmut');
        return $this->get();
    }
    // get data by id
    public function get_by_id($id){
        $this->db->table('domain_bolmut');
        $this->where('id', $id);
        return $this->get()->getRow();
    }
    public function tambah($data){
        if($this->db->table('domain_bolmut')->insert($data)){
            return TRUE;
        }
        return $this->db->error();
    }
    public function ubah($id, $data){
        if($this->db->table('domain_bolmut')->update($data, array('id'=>$id))){
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