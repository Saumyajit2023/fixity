<?php
 namespace App\Models;

//use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class Career_Model extends Model
{

    public function getList()
    {
       $query = $this->db->query('select * from career where is_deleted=0');
       return  $query->getResultArray();
    }

    public function addDetails($data)
    {
        return $this->db->table('career')->insert($data);
    }

    public function deleteDetail($id)
    {
        return $this->db->table('career')->whereIn('id',$id)->delete();
    }

    public function updateStatus($id,$status)
    {
        return $this->db->query("UPDATE career SET is_active = ".$status." WHERE id =".$id);
    }

    public function getEditList($id)
    {
          return $this->db->table('career')->where('id',$id)->get()->getRow();
    }

    public function updateDetails($data,$id)
    {
        $builder = $this->db->table('career');
        $builder->where('id',$id);
        return $builder->update($data);
    }
  

}
?>

