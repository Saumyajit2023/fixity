<?php

namespace App\Controllers;
use App\Controllers\fixityHome;
use App\Models\fixityHome_Model;


class Services extends BaseController
{
    function __construct()
    {
        $this->homeModel = new fixityHome_Model();
        $this->fixity = new fixityHome();
        $this->fixityHome  = new fixityHome();
    }

    public function service_page()
    {
        $data['page']       = 'fixityHome/services';
        $data['module']     = 'Fixity';
        $data['js']         = array('external'=> array('fixity-js'=>'fixityHome/fixity_js.php','footer-js'=>'fixityHome/js/footer-js.php'));
        $data['blog_footer']= $this->fixityHome->getFooter();
        return view('layout/content',$data);
    }

    public function staffing()
    {
        $data['page']       = 'services_submenu/staffing';
        $data['module']     = 'Services';
        $data['js']         = array('external'=> array('fixity-js'=>'fixityHome/fixity_js.php','footer-js'=>'fixityHome/js/footer-js.php'));
        $data['blog_footer']= $this->fixityHome->getFooter();
        return view('layout/content',$data);
    }

    public function htd()
    {
        $data['page']       = 'services_submenu/htd';
        $data['module']     = 'Services';
        $data['js']         = array('external'=> array('fixity-js'=>'fixityHome/fixity_js.php','footer-js'=>'fixityHome/js/footer-js.php'));
        $data['blog_footer']= $this->fixityHome->getFooter();
        return view('layout/content',$data);
    }

    public function solution()
    {
        $data['page']       = 'services_submenu/solution';
        $data['module']     = 'Services';
        $data['js']         = array('external'=> array('fixity-js'=>'fixityHome/fixity_js.php','footer-js'=>'fixityHome/js/footer-js.php'));
        $data['blog_footer']= $this->fixityHome->getFooter();
        return view('layout/content',$data);
    }

    public function product_development()
    {
        $data['page']       = 'services_submenu/product_development';
        $data['module']     = 'Services';
        $data['js']         = array('external'=> array('fixity-js'=>'fixityHome/fixity_js.php','footer-js'=>'fixityHome/js/footer-js.php'));
        $data['blog_footer']= $this->fixityHome->getFooter();
        return view('layout/content',$data);
    }


}









