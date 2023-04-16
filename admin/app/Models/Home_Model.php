<?php
 namespace App\Models;

//use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class Home_Model extends Model
{

    public function getLogoList()
    {
       $query = $this->db->query('select * from home_page where is_deleted=0');
       return  $query->getResultArray();
    }

    public function addImage($data)
    {
        return $this->db->table('home_page')->insert($data);
    }

    public function deleteLogoDetail($id)
    {
        return $this->db->table('home_page')->whereIn('id',$id)->delete();
    }

    public function updateStatus($id,$status)
    {
        return $this->db->query("UPDATE home_page SET is_active = ".$status." WHERE id =".$id);
    }

    public function updateLogo($data,$id)
    {
        //print_r($data);die();
        $builder = $this->db->table('home_page');
        $builder->where('id',$id);
        return $builder->update($data);
    }

  

}
?>

