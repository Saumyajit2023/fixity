<?php
 namespace App\Models;

//use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class resource_model extends Model
{

    public function getBlogDetails()
    {
       $query = $this->db->query('select * from blog_page where is_popular=1 and is_active=1');
       return  $query->getResultArray();
    }


}
?>

