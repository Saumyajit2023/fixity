<?php
 namespace App\Models;

//use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class Login_Model extends Model
{

    public function check_login($u_name,$pass) {
       $query = $this->db->query('select * from user where email="'.$u_name.'" and password="'.md5($pass).'"');
        return  $query->getRowArray();
    }

    public function check_mail($email)
    {
        $query = $this->db->query('select * from user where email="'.$email.'"');
        return  $query->getResultArray();   
    }

    public function updatePass($pass)
    {
         return $this->db->table('user')
                        ->where('id','1')
                        ->set('password',md5($pass))
                        ->update();
    }

    public function getmenus($id)
    {
        $query = $this->db->query('select * from menu where is_active= 1 and parent_id="'.$id.'"');
        return  $query->getResultArray();
    }

    public function getAdminInfo()
    {
        $query = $this->db->query('select * from user');
        return $query->getRow();
    }

    public function updateImage($data)
    {
          return $this->db->table('user')
                        ->where('id','1')
                        ->set('image',$data['image'])
                        ->update();
    }

    public function updateInfo($data)
    {
        return $this->db->table('user')
                        ->where('id',1)
                        ->set('password',$data['password'])
                        ->set('email',$data['email'])
                        ->update();
    }

    public function updateLogin($lastlogin)
    {
         return $this->db->table('user')
                        ->where('id',1)
                        ->set('lastlogin',$lastlogin)
                        ->update();
    }

}
?>

