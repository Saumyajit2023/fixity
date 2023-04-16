<?php
 namespace App\Models;

//use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class fixityHome_Model extends Model
{

    public function getLogoList()
    {
       $query = $this->db->query('select * from home_page where is_deleted=0 and is_active=1');
       return  $query->getResultArray();
    }
  

}
?>

