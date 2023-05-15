<?php

namespace App\Controllers;
use App\Controllers\fixityHome;
use App\Models\resource_model;
use App\Models\fixityHome_Model;
use APP\Controllers\fixityHome;

class Resources extends BaseController
{
    function __construct()
    {
        $this->homeModel = new fixityHome_Model();
        $this->resource_model = new resource_model();
        $this->fixityHome  = new fixityHome();
    }

    public function resource()
    {
        $data['page']       = 'fixityHome/resource';
        $data['module']     = 'Fixity';
        $data['js']         = array('external'=> array('resource-js'=>'fixityHome/js/resource_js.php','footer-js'=>'fixityHome/js/footer-js.php'));
        $data['blog']       = $this->resource_model->getBlogDetails();
        $data['blog_footer']= $this->fixityHome->getFooter();
        return view('layout/content',$data);
    }

    public function awards()
    {
        $data['page']       = 'resource_submenu/awards';
        $data['module']     = 'product';
        $data['js']         = array('external'=> array('fixity-js'=>'fixityHome/fixity_js.php','footer-js'=>'fixityHome/js/footer-js.php'));
        $data['blog_footer']= $this->fixityHome->getFooter();
        return view('layout/content',$data);
    }

    public function blogs()
    {
        $data['page']       = 'resource_submenu/blogs';
        $data['module']     = 'product';
        $data['js']         = array('external'=> array('fixity-js'=>'fixityHome/fixity_js.php','blog-js'=>'resource_submenu/blog-js.php','footer-js'=>'fixityHome/js/footer-js.php'));
        $data['blog']       = $this->resource_model->getAllBlogDetails();
        $data['blog_footer']= $this->fixityHome->getFooter();
        return view('layout/content',$data);
    }

    public function blog_Detail($id)
    {
        $ids = base64_decode(urldecode($id));
        $data['page']       = 'resource_submenu/blogs_details';
        $data['module']     = 'product';
        $data['js']         = array('external'=> array('fixity-js'=>'fixityHome/fixity_js.php','blog-js'=>'resource_submenu/blog-js.php','footer-js'=>'fixityHome/js/footer-js.php'));
        $data['blogDetail']  =  $this->resource_model->getBlogDetailsById($ids); 
        $data['blog_footer']= $this->fixityHome->getFooter();
        return view('layout/content',$data);
    }

    public function whitepapers()
    {
        $data['page']       = 'resource_submenu/whitepapers';
        $data['module']     = 'product';
        $data['js']         = array('external'=> array('fixity-js'=>'fixityHome/fixity_js.php','footer-js'=>'fixityHome/js/footer-js.php'));
        $data['blog_footer']= $this->fixityHome->getFooter();
        return view('layout/content',$data);
    }

}









