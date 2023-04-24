<?php
 namespace App\Models;

//use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class Partner_Model extends Model
{

    public function getLogoList()
    {
       $query = $this->db->query('select * from partner_page');
       return  $query->getResultArray();
    }

    public function addImage($data)
    {
        return $this->db->table('partner_page')->insert($data);
    }

    public function deleteLogoDetail($id)
    {
        return $this->db->table('partner_page')->whereIn('pid',$id)->delete();
    }

    public function updateStatus($id,$status)
    {
        return $this->db->query("UPDATE partner_page SET is_active = ".$status." WHERE pid =".$id);
    }

    public function updateLogo($data,$id)
    {
        //print_r($data);die();
        $builder = $this->db->table('partner_page');
        $builder->where('pid',$id);
        return $builder->update($data);
    }

  

}
?>

