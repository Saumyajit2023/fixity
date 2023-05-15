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

    public function getFooter()
    {
        $blog  = $this->homeModel->getBlogImage();
        $blog[0]['desc'] = implode(' ', array_slice(explode(' ', $blog[0]['description']), 0, 6));
        $data['blogImage'] = $blog[0]['banner_img'];
        $data['descript']  = $blog[0]['desc'];
        $data['title']     = $blog[0]['title'];
        return $data;
    }

    public function index()
    {
        $data['page']       = 'fixityHome/Home';
        $data['module']     = 'Fixity';
        $data['js']         = array('external'=> array('fixity-js'=>'fixityHome/fixity_js.php','footer-js'=>'fixityHome/js/footer-js.php'));
        $data['logo']       = $this->homeModel->getLogoList();
        $data['blog_footer']= $this->getFooter();
      //  print_r($data['blog_footer']['title']);die();
        return view('layout/content',$data);
    
    }

    public function career()
    {

        $data['page']       = 'fixityHome/careers';
        $data['module']     = 'Fixity';
        $data['js']         = array('external'=> array('fixity-js'=>'fixityHome/fixity_js.php','footer-js'=>'fixityHome/js/footer-js.php'));
        $data['career']     = $this->homeModel->getCareerList();
        $data['blog_footer']= $this->getFooter();
        return view('layout/content',$data);
    }

    public function about()
    {
        $data['page']       = 'fixityHome/about_us';
        $data['module']     = 'Fixity';
        $data['js']         = array('external'=> array('fixity-js'=>'fixityHome/fixity_js.php','footer-js'=>'fixityHome/js/footer-js.php'));
        $data['blog_footer']= $this->getFooter();
        return view('layout/content',$data);
    }

    public function partners()
    {
        $data['page']       = 'fixityHome/partners';
        $data['module']     = 'Fixity';
        $data['js']         = array('external'=> array('partners-js'=>'fixityHome/js/partners_js.php','footer-js'=>'fixityHome/js/footer-js.php'));
        $data['partnerLogo']= $this->homeModel->getPartnerLogoList();
        $data['blog_footer']= $this->getFooter();
        return view('layout/content',$data);
    }

    public function resource()
    {
        $data['page']       = 'fixityHome/resource';
        $data['module']     = 'Fixity';
        $data['js']         = array('external'=> array('resource-js'=>'fixityHome/js/resource_js.php','footer-js'=>'fixityHome/js/footer-js.php'));
        $data['blog']       = $this->resource_model->getBlogDetails();
        $data['blog_footer']= $this->getFooter();
        return view('layout/content',$data);
    }

    public function contact()
    {
        $data['page']       = 'fixityHome/contact';
        $data['module']     = 'Fixity';
        $data['js']         = array('external'=> array('fixity-js'=>'fixityHome/fixity_js.php','footer-js'=>'fixityHome/js/footer-js.php'));
        $data['blog_footer']= $this->getFooter();
        return view('layout/content',$data);
    }

    public function blog()
    {
        $data['page']       = 'fixityHome/blog';
        $data['module']     = 'Fixity';
        $data['js']         = array('external'=> array('fixity-js'=>'fixityHome/fixity_js.php','footer-js'=>'fixityHome/js/footer-js.php'));
        $data['blog_footer']= $this->getFooter();
        return view('layout/content',$data);
    }

    public function privacyPolicy()
    {
        $data['page']       = 'fixityHome/privacy';
        $data['module']     = 'Fixity';
        $data['js']         = array('external'=> array('fixity-js'=>'fixityHome/fixity_js.php','footer-js'=>'fixityHome/js/footer-js.php'));
        $data['blog_footer']= $this->getFooter();
        return view('layout/content',$data);
    }

}









