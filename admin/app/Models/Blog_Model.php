<?php
 namespace App\Models;

//use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class Blog_Model extends Model
{

    public function getBlogList()
    {
       $query = $this->db->query('select * from blog_page');
       return  $query->getResultArray();
    }

    public function getBlogDetailsById($id)
    {
       $query = $this->db->query('select * from blog_page where id='.$id);
       return  $query->getResultArray();
    }

    public function addBlogDetails($data)
    {
        return $this->db->table('blog_page')->insert($data);
    }

    public function deleteDetail($id)
    {
        return $this->db->table('blog_page')->whereIn('id',$id)->delete();
    }

    public function updateStatus($id,$status)
    {
        return $this->db->query("UPDATE blog_page SET is_active = ".$status." WHERE id =".$id);
    }

    public function updateBlogDetails($data,$id)
    {
        //print_r($data);die();
        $builder = $this->db->table('blog_page');
        $builder->where('id',$id);
        return $builder->update($data);
    }

    public function updatePopular($id)
    {
        $data = array('is_popular' => 1);
        $builder = $this->db->table('blog_page');
        $builder->whereIn('id',$id);
        return $builder->update($data);
    }

    public function removePopularBlog($id)
    {
        $data = array('is_popular' => 0);
        $builder = $this->db->table('blog_page');
        $builder->whereIn('id',$id);
        return $builder->update($data);
    }

  

}
?>

