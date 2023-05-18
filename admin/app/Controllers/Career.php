<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Career_Model;
use CodeIgniter\I18n\Time;

class Career extends BaseController
{

    function __construct()
    {
    	
		$this->careerModel = new Career_Model();
		$session = \Config\Services::session();
		// if($_SESSION['isLogin'] == TRUE)
		// {	
		// 	header('Location: '.site_url('dashboard'));
  //           exit(); 
		// }
    }

    public function index()
    { 
        $data['page']        = 'Career/career_listing';
        $data['page-title']  = 'Career';
        $data['js']          = array('plugin' => array('assets/js/libs/datatable-btns.js?ver=2.9.0','assets/excel/cdnjs/xlsx.full.min.js?ver=0.15.6','admin/assets/js/editors.js?ver=2.9.0','admin/assets/js/libs/editors/tinymce.js?ver=2.9.0'),'external'=> array('career-js' => 'Career/career-js.php')); 
        $data['css']         = array('admin/assets/css/editors/tinymce.css?ver=2.9.0');
        return view('layout/content',$data);
    }

    public function getDetails()
    {
        $response = $this->careerModel->getList();    

        echo json_encode($response);
    }

    public function editDetails()
    {
        $response = $this->careerModel->getEditList($_POST['ids']);    
        echo json_encode($response); 
    }

    public function addDetails()
    {
        if($_POST['cid']){

            $data = array(
                'title'       => $_POST['title'],
                'description' => $_POST['description'],
                'url'         => $_POST['url'],
                'created_dt'  => date('Y-m-d H:i:s')
            );

            $response      = $this->careerModel->updateDetails($data,$_POST['cid']);

            if($response){

                echo json_encode(array('status' => TRUE,'message'=>'Successfully updated', 'data'=>$response));
    
            }else{
    
                echo json_encode(array('status' => FALSE,'message'=>'Something went wrong', 'data'=>$response));
            }

        }else{

            unset($_POST['cid']);
            $data = array(
                'title'       => $_POST['title'],
                'description' => $_POST['description'],
                'url'         => $_POST['url'],
                'is_active'   => 1,
                'created_dt'  => date('Y-m-d H:i:s')
            );
           
            $response      = $this->careerModel->addDetails($data);

            if($response){

                echo json_encode(array('status' => TRUE,'message'=>'Successfully insert', 'data'=>$response));
    
            }else{
    
                echo json_encode(array('status' => FALSE,'message'=>'Something went wrong', 'data'=>$response));
            }

        }

    }


   
    public function deleteDetails() // delete single and multiple Logo
    {

        $ids = array();
        is_array($_POST['ids']) ? $ids = $_POST['ids'] : $ids = (array)$_POST['ids'];
       
        $data = $this->careerModel->deleteDetail($ids);
        
        if($data)   
        {
            $response = [
                        'success' => true,
                        'msg' => "Details Deleted Successfully",
                    ];
        } 
        else
        {
            $response = [
                        'success' => false,
                        'msg' => "Failed to Delete Details",
                    ];
        }

        return $this->response->setJSON($response);
    }

    public function changeStatus() // student change status
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
     
        $data = $this->careerModel->updateStatus($id,$status);

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