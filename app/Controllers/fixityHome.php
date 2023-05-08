<?php

namespace App\Controllers;
use App\Models\fixityHome_Model;
use App\Models\resource_model;

class fixityHome extends BaseController
{
    function __construct()
    {
        $this->homeModel = new fixityHome_Model();
        $this->resource_model = new resource_model();
        

    }

    function getFooter()
    {
        $data  = $this->homeModel->getBlogImage();
        echo json_encode($data);
    }


    public function index()
    {
        $data['page']       = 'fixityHome/Home';
        $data['module']     = 'Fixity';
        $data['js']         = array('external'=> array('fixity-js'=>'fixityHome/fixity_js.php','footer-js'=>'fixityHome/js/footer-js.php'));
        $data['logo']       = $this->homeModel->getLogoList();
        // $data['blogImage']   = $this->homeModel->getBlogImage();
        // $data['blogTitle']   = $this->homeModel->getBlogTitle();

        //print_r($data['logo']);die();
       
        return view('layout/content',$data);
    
    }

    public function career()
    {

        $data['page']       = 'fixityHome/careers';
        $data['module']     = 'Fixity';
        $data['js']         = array('external'=> array('fixity-js'=>'fixityHome/fixity_js.php','footer-js'=>'fixityHome/js/footer-js.php'));
        $data['career']       = $this->homeModel->getCareerList();
        return view('layout/content',$data);
    }

    public function about()
    {
        $data['page']       = 'fixityHome/about_us';
        $data['module']     = 'Fixity';
        $data['js']         = array('external'=> array('fixity-js'=>'fixityHome/fixity_js.php','footer-js'=>'fixityHome/js/footer-js.php'));
       
         return view('layout/content',$data);
    }

    public function partners()
    {
        $data['page']       = 'fixityHome/partners';
        $data['module']     = 'Fixity';
        $data['js']         = array('external'=> array('partners-js'=>'fixityHome/js/partners_js.php','footer-js'=>'fixityHome/js/footer-js.php'));
        $data['partnerLogo']= $this->homeModel->getPartnerLogoList();
        return view('layout/content',$data);
    }

    public function resource()
    {
        $data['page']       = 'fixityHome/resource';
        $data['module']     = 'Fixity';
        $data['js']         = array('external'=> array('resource-js'=>'fixityHome/js/resource_js.php','footer-js'=>'fixityHome/js/footer-js.php'));
        $data['blog']       = $this->resource_model->getBlogDetails();
         return view('layout/content',$data);
    }

    public function contact()
    {
        $data['page']       = 'fixityHome/contact';
        $data['module']     = 'Fixity';
        $data['js']         = array('external'=> array('fixity-js'=>'fixityHome/fixity_js.php','footer-js'=>'fixityHome/js/footer-js.php'));
       
        return view('layout/content',$data);
    }

    public function blog()
    {
        $data['page']       = 'fixityHome/blog';
        $data['module']     = 'Fixity';
        $data['js']         = array('external'=> array('fixity-js'=>'fixityHome/fixity_js.php','footer-js'=>'fixityHome/js/footer-js.php'));
       
        return view('layout/content',$data);
    }

    public function privacyPolicy()
    {
        $data['page']       = 'fixityHome/privacy';
        $data['module']     = 'Fixity';
        $data['js']         = array('external'=> array('fixity-js'=>'fixityHome/fixity_js.php','footer-js'=>'fixityHome/js/footer-js.php'));
       
        return view('layout/content',$data);
    }

}









