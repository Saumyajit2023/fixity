<?php
namespace App\Models;
use CodeIgniter\Model;

class CommonModel extends Model
{

	public function insert_data($table,$data){
        $result = $this->db->table($table)->insert($data);
        $insert_id = $this->db->insertID();
    // echo "<pre>";print_r($this->db->getLastQuery());die;
        return $insert_id;
    }

	public function update_data($table,$data,$id){
       $builder = $this->db->table($table);
	   $builder->update($data,$id);
    //   echo "<pre>";print_r($builder->getLastQuery());die;
       return true;
    }


    public function getMaster($tablename, $where = FALSE,$select = FALSE)
    {
    	if($where){
    		return $this->db->table($tablename)->where($where)->get()->getResultArray();
        }else{
        	return $this->db->table($tablename)->get()->getResultArray();
        }
        
    }

    public function delete_data($table , $where){

        return $this->db->table($table)->where($where)->delete();
    }

    public function insert_batch_data($tablename,$data){
         $result = $this->db->table($table)->insert_batch($data);
       // $insert_id = $this->db->insertID();
        return true;
    }
    
}
