<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Home_Model;
use CodeIgniter\I18n\Time;

class Home extends BaseController
{

    function __construct()
    {
    	
		$this->homeModel = new Home_Model();
		$session = \Config\Services::session();
		// if($_SESSION['isLogin'] == TRUE)
		// {	
		// 	header('Location: '.site_url('dashboard'));
  //           exit(); 
		// }
    }

    public function index()
    { 
        $data['page']        = 'home/home_page_list';
        $data['page-title']  = 'Home';
        $data['js']          = array('plugin' => array('assets/js/libs/datatable-btns.js?ver=2.9.0','assets/excel/cdnjs/xlsx.full.min.js?ver=0.15.6'),'external'=> array('home-js' => 'home/home-js.php')); 
     
        return view('layout/content',$data);
    }

    public function home_list()
    {
        $response = $this->homeModel->getLogoList();    

        echo json_encode($response);
    }

    public function uploadLogo()   // user image upload
    {
        helper(['form', 'url']);
        $session = \Config\Services::session();
        $isValid = $this->validate([
              'userLogofile' => [
                  'uploaded[userLogofile]',
                  'mime_in[userLogofile, image/jpg,image/jpeg,image/gif,image/png]',
                  'max_size[userLogofile, 4098]',
                ],
            ]);
  
            $response = [
                'success' => false,
                'data' => '',
                'msg' => "Error occured"
            ];

            if ($isValid) {
                $file = $this->request->getFile('userLogofile');
                $file->move(WRITEPATH . 'homeLogo');

                $data = [
                    'image_name' => $file->getClientName(),
                    'is_active' => 1,
                    'created_dt' => date('Y-m-d H:i:s'),
                    'created_by' => 1
                ];
             
                if($_POST['id'])
                {
                    $update = [
                        'image_name' => $file->getClientName(),
                        'is_active' => 1,
                        'updated_dt' => date('Y-m-d H:i:s'),
                        'modified_by' => 1
                    ];
                    $update =$this->homeModel->updateLogo($update,$_POST['id']);
                    if($update)
                    {
                                  
                        $response = [
                            'success' => true,
                            'msg' => "File has uploaded  successfully!"
                        ];
                    }
                    else
                    {
                        $response = [
                            'success' => false,
                            'msg' => "File upload Fail!"
                       ];
                    }
                }
                else
                {
                    $save =$this->homeModel->addImage($data);
                    if($save){
                                  
                        $response = [
                            'success' => true,
                            'msg' => "File has uploaded  successfully!"
                        ];
                    }
                    else
                    {
                        $response = [
                            'success' => false,
                            'msg' => "File upload Fail!"
                       ];
                    }
               }
              
        }

        return $this->response->setJSON($response);
    } 

    public function deleteLogo() // delete single and multiple Logo
    {

        $ids = array();
        is_array($_POST['ids']) ? $ids = $_POST['ids'] : $ids = (array)$_POST['ids'];
       
        $data = $this->homeModel->deleteLogoDetail($ids);
        
        if($data)   
        {
            $response = [
                        'success' => true,
                        'msg' => "Logo Details Deleted Successfully",
                    ];
        } 
        else
        {
            $response = [
                        'success' => false,
                        'msg' => "Failed to Delete Logo Details",
                    ];
        }

        return $this->response->setJSON($response);
    }

    public function changeLogoStatus() // student change status
    {
        $id = $_POST['ids'];
        $status = $_POST['status'];
        if($status == 1)
        {
            $status = 0;
        }
        else
        {
            $status = 1;
        }
     
        $data = $this->homeModel->updateStatus($id,$status);

        if($data)   
        {
            $response = [
                        'success' => true,
                        'msg' => "Status Changed Successfully",
                    ];
        } 
        else
        {
            $response = [
                        'success' => false,
                        'msg' => "Failed to change status Details",
                    ];
        }

        return $this->response->setJSON($response);
    }


	
}