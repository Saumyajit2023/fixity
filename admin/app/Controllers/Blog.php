<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Blog_Model;
use CodeIgniter\I18n\Time;

class Blog extends BaseController
{

    function __construct()
    {
    	
		$this->blogModel = new Blog_Model();
		$session = \Config\Services::session();
		// if($_SESSION['isLogin'] == TRUE)
		// {	
		// 	header('Location: '.site_url('dashboard'));
  //           exit(); 
		// }
    }

    public function index()
    { 
        $data['page']        = 'blog/blog_page_list';
        $data['page-title']  = 'Blog';
        $data['js']          = array('plugin' => array('admin/assets/js/libs/datatable-btns.js?ver=2.9.0','admin/assets/js/editors.js?ver=2.9.0','admin/assets/js/libs/editors/tinymce.js?ver=2.9.0'),'external'=> array('blog-js' => 'blog/blog-js.php')); 
        $data['css']         = array('admin/assets/css/editors/tinymce.css?ver=2.9.0');
        return view('layout/content',$data);
    }

    public function blog_list()
    {
        $response = $this->blogModel->getBlogList();    
        echo json_encode($response);
    }

    public function getDetailsById()
    {
        $response = $this->blogModel->getBlogDetailsById($_POST['ids']);    
        echo json_encode($response);
    }

    public function blogAdd()   
    {
       // print_r($_POST);die();
        if($_POST['id'])
        {
            $thumbnail_img = '';
            $banner_img = '';
            helper(['form', 'url']);
           
            if($this->request->getFile('banner_img') != '' || $this->request->getFile('banner_img') != null)
            {
                 $isValid = $this->validate([
                    'banner_img' => [
                        'uploaded[banner_img]',
                        'mime_in[banner_img, image/jpg,image/jpeg,image/gif,image/png,image/webp,image/svg]',
                        'max_size[banner_img, 4098]',
                    ],
                
                ]);

                 if($isValid)
                 {
                    $file = $this->request->getFile('banner_img');
                    $file->move(WRITEPATH . 'blog_banner');
                    $banner_img = $file->getClientName();
                 }

                $response = [
                    'success' => false,
                    'data' => '',
                    'msg' => "Error occured"
                ];
            }

            if($this->request->getFile('thumbnail_img') != '' || $this->request->getFile('thumbnail_img') != null)
            {
                $isValidBanner = $this->validate([
                    'thumbnail_img' => [
                        'uploaded[thumbnail_img]',
                        'mime_in[thumbnail_img, image/jpg,image/jpeg,image/gif,image/png,image/webp,image/svg]',
                        'max_size[thumbnail_img, 4098]',
                    ],
                
                ]);

                if($isValidBanner)
                 {
                    $file1 = $this->request->getFile('thumbnail_img');
                    $file1->move(WRITEPATH . 'blog_thumbnail');
                    $thumbnail_img = $file1->getClientName();
                 }

                $response = [
                    'success' => false,
                    'data' => '',
                    'msg' => "Error occured"
                ];

            }

            if($thumbnail_img == '' && $banner_img == '')
            {
             $data = [
                     'visible_on'    => $_POST['date1'],
                     'title'         => $_POST['title'],
                     'description'   => $_POST['description'],
                     'is_active'     => 1,
                     'updated_dt'    => date('Y-m-d H:i:s')
                ];
            }
            else if($thumbnail_img == '')
            {
                $data = [
                     'banner_img'    => $banner_img,
                     'visible_on'    => $_POST['date1'],
                     'title'         => $_POST['title'],
                     'description'   => $_POST['description'],
                     'is_active'     => 1,
                     'updated_dt'    => date('Y-m-d H:i:s')
                ];
            }
            else if($banner_img == '')
            {
                $data = [
                     'thumbnail_img'    => $thumbnail_img,
                     'visible_on'    => $_POST['date1'],
                     'title'         => $_POST['title'],
                     'description'   => $_POST['description'],
                     'is_active'     => 1,
                     'updated_dt'    => date('Y-m-d H:i:s')
                ];
            }
            else
            {
                $data = [
                     'banner_img'    => $banner_img,
                     'thumbnail_img'    => $thumbnail_img,
                     'visible_on'    => $_POST['date1'],
                     'title'         => $_POST['title'],
                     'description'   => $_POST['description'],
                     'is_active'     => 1,
                     'updated_dt'    => date('Y-m-d H:i:s')
                ];
            }

            
            $update =$this->blogModel->updateBlogDetails($data,$_POST['id']);
            if($update){
                                  
                $response = [
                            'success' => true,
                            'msg' => "Data Updation successfully!"
                        ];
            }
            else
            {
                $response = [
                            'success' => false,
                            'msg' => "Data Updation Fail!"
                       ];
            }  
            

        }
        else
        {
            helper(['form', 'url']);
           
            $isValid = $this->validate([
              'banner_img' => [
                  'uploaded[banner_img]',
                  'mime_in[banner_img, image/jpg,image/jpeg,image/gif,image/png,image/webp,image/svg]',
                  'max_size[banner_img, 4098]',
                ],
                'thumbnail_img' => [
                  'uploaded[thumbnail_img]',
                  'mime_in[thumbnail_img, image/jpg,image/jpeg,image/gif,image/png,image/webp,image/svg]',
                  'max_size[thumbnail_img, 4098]',
                ],
            ]);
  
            $response = [
                'success' => false,
                'data' => '',
                'msg' => "Error occured"
            ];

            if ($isValid) {
                $file = $this->request->getFile('banner_img');
                $file->move(WRITEPATH . 'blog_banner');

                $file1 = $this->request->getFile('thumbnail_img');
                $file1->move(WRITEPATH . 'blog_thumbnail');

                $data = [
                    'banner_img'    => $file->getClientName(),
                    'thumbnail_img' => $file1->getClientName(),
                    'visible_on'    => $_POST['date1'],
                    'title'         => $_POST['title'],
                    'description'   => $_POST['description'],
                    'is_active'     => 1,
                    'created_dt'    => date('Y-m-d H:i:s')
                ];
             
                
                    $save =$this->blogModel->addBlogDetails($data);
                    if($save){
                                  
                        $response = [
                            'success' => true,
                            'msg' => "Data Added successfully!"
                        ];
                    }
                    else
                    {
                        $response = [
                            'success' => false,
                            'msg' => "Data Add Fail!"
                       ];
                    }
              
            }  
        }

        return $this->response->setJSON($response);
    } 

    public function updateToPopular() // delete single and multiple Logo
    {

        $ids = array();
        is_array($_POST['ids']) ? $ids = $_POST['ids'] : $ids = (array)$_POST['ids'];
       
        $data = $this->blogModel->updatePopular($ids);
        
        if($data)   
        {
            $response = [
                        'success' => true,
                        'msg' => "Details Update Successfully",
                    ];
        } 
        else
        {
            $response = [
                        'success' => false,
                        'msg' => "Failed to Update Details",
                    ];
        }

        return $this->response->setJSON($response);
    }

    public function deleteBlogDetails() // delete single and multiple Logo
    {

        $ids = array();
        is_array($_POST['ids']) ? $ids = $_POST['ids'] : $ids = (array)$_POST['ids'];
       
        $data = $this->blogModel->deleteDetail($ids);
        
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
     
        $data = $this->blogModel->updateStatus($id,$status);

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

     public function removePopular() // delete single and multiple Logo
    {

        $ids = array();
        is_array($_POST['ids']) ? $ids = $_POST['ids'] : $ids = (array)$_POST['ids'];
       
        $data = $this->blogModel->removePopularBlog($ids);
        
        if($data)   
        {
            $response = [
                        'success' => true,
                        'msg' => "Details Update Successfully",
                    ];
        } 
        else
        {
            $response = [
                        'success' => false,
                        'msg' => "Failed to Update Details",
                    ];
        }

        return $this->response->setJSON($response);
    }


	
}