<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Login_Model;
use CodeIgniter\I18n\Time;

class Login extends BaseController
{

    function __construct()
    {
    	
		$this->loginModel = new Login_Model();
		$session = \Config\Services::session();
		// if($_SESSION['isLogin'] == TRUE)
		// {	
		// 	header('Location: '.site_url('dashboard'));
  //           exit(); 
		// }
    }

	public function index()
	{
        return view('authentication/login'); 
	}
	

	public function authentication(){

		
		$session = \Config\Services::session();

		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$query = $this->loginModel->check_login($username, $password);
		
		if(!empty($query))
		{
			$parentMenus = $this->loginModel->getmenus(0);

			foreach($parentMenus as $key => $value){
				
				$parentMenus[$key]['childmenus'] = $this->loginModel->getmenus($parentMenus[$key]['id']);
			}


			$session->set('email',$query['email']);
			$session->set('username',$query['id']);
			$session->set('file',$query['image']);
			$session->set('isLogin',TRUE);
			$session->set('id',$query['id']);	
			$session->set('menus',$parentMenus);

			$lastlogin = date('Y/m/d H:i:s');
            $data = $this->loginModel->updateLogin($lastlogin);
           // print_r($data);die();
			return redirect()->to('admin/index.php/dashboard');
		}
		else
		{
			$session->setFlashdata('msg', 'Invalid Username or Password');
			return redirect()->to(base_url().'/admin');
		}
	}

	public function dashboard()
    {
         
         $data['page']       = 'authentication/dashboard';
         $data['module']     = 'dashboard';
         $data['js']         = array( 'plugin' => array('assets/js/charts/chart-lms.js?ver=2.9.0')); 
       
         return view('layout/content',$data);
    }

   public function profile()
    {
        $data['page']           = 'authentication/profile';
        $data['page-title']     = 'Profile';
        $data['js']             = array('external'=> array('profile-js'=>'authentication/profile-js.php')); 
        $data['admin']          = $this->loginModel->getAdminInfo(); 
        return view('layout/content',$data);
    }

    public function upload()   // user image upload
    {
        helper(['form', 'url']);
        $session = \Config\Services::session();
        $isValid = $this->validate([
              'userfile' => [
                  'uploaded[userfile]',
                  'mime_in[userfile, image/jpg,image/jpeg,image/gif,image/png]',
                  'max_size[userfile, 4098]',
                ],
            ]);
  
            $response = [
                'success' => false,
                'data' => '',
                'msg' => "Error occured"
            ];

            if ($isValid) {
                $file = $this->request->getFile('userfile');
                $file->move(WRITEPATH . 'uploads');
                $data = [
                    'image' => $file->getClientName()
                ];
                $save =$this->loginModel->updateImage($data);
                if($save){
                 $session->set('file',$data['image']);                    
                    $response = [
                        'success' => true,
                        'data' => $_SESSION['file'],
                        'msg' => "File has uploaded  successfully!"
                    ];
               }
               else
               {
                    $response = [
                        'success' => false,
                        'data' => $save,
                        'msg' => "File upload Fail!"
                    ];
               }
        }

        return $this->response->setJSON($response);
    } 

    public function updateProfile()
    {
        $response = $this->loginModel->getAdminInfo();
        return json_encode($response);
    } 
    
    public function update_form()
    {
          $session = \Config\Services::session();
      if ($this->request->getMethod() == "post") {
        $data = [
                    "username"   => $this->request->getVar("username"),
                    "email"      => $this->request->getVar("email"),
                    "password"   => md5($this->request->getVar("password1")),
                ];
                if ($this->loginModel->updateInfo($data)) {
                      $session->set('username',$data['username']); 
                      $session->set('email',$data['email']);  

                    $response = [
                        'success' => true,
                        'result'  => $_SESSION,
                        'msg' => "Profile Update Successfully",
                    ];
                      
                } else {
                    $response = [
                        'success' => false,
                        'msg' => "Profile Update Fail",
                    ];
                }

                return $this->response->setJSON($response);


            }
    }    
	public function updatePassword()
	{
		$response = $this->loginModel->updatePass($_POST['password']);
		echo json_encode($response);
	}

	public function logout()
    {
        session_destroy();
        return redirect()->to(base_url().'/admin');
    }


	
}