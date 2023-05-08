<?php

namespace App\Controllers;
use App\Models\resource_model;
use App\Models\fixityHome_Model;

class Resources extends BaseController
{
    function __construct()
    {
        $this->resource_model = new resource_model();
    }

    public function resource()
    {
        $data['page']       = 'fixityHome/resource';
        $data['module']     = 'Fixity';
        $data['js']         = array('external'=> array('resource-js'=>'fixityHome/js/resource_js.php','footer-js'=>'fixityHome/js/footer-js.php'));
        $data['blog']       = $this->resource_model->getBlogDetails();
         return view('layout/content',$data);
    }

    public function awards()
    {
        $data['page']       = 'resource_submenu/awards';
        $data['module']     = 'product';
        $data['js']         = array('external'=> array('fixity-js'=>'fixityHome/fixity_js.php','footer-js'=>'fixityHome/js/footer-js.php'));
       
        return view('layout/content',$data);
    }

    public function blogs()
    {
        $data['page']       = 'resource_submenu/blogs';
        $data['module']     = 'product';
        $data['js']         = array('external'=> array('fixity-js'=>'fixityHome/fixity_js.php','blog-js'=>'resource_submenu/blog-js.php','footer-js'=>'fixityHome/js/footer-js.php'));
        $data['blog']       = $this->resource_model->getAllBlogDetails();
       // print_r($data['blog']);die();
        return view('layout/content',$data);
    }

    public function blog_Detail($id)
    {
        $ids = base64_decode(urldecode($id));
        $data['page']       = 'resource_submenu/blogs_details';
        $data['module']     = 'product';
        $data['js']         = array('external'=> array('fixity-js'=>'fixityHome/fixity_js.php','blog-js'=>'resource_submenu/blog-js.php','footer-js'=>'fixityHome/js/footer-js.php'));
        $data['blogDetail']  =  $this->resource_model->getBlogDetailsById($ids); 
        return view('layout/content',$data);

    }

    public function whitepapers()
    {
        $data['page']       = 'resource_submenu/whitepapers';
        $data['module']     = 'product';
        $data['js']         = array('external'=> array('fixity-js'=>'fixityHome/fixity_js.php','footer-js'=>'fixityHome/js/footer-js.php'));
       
        return view('layout/content',$data);
    }

}









