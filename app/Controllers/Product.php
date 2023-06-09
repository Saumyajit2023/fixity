<?php

namespace App\Controllers;
use App\Controllers\fixityHome;
use App\Models\fixityHome_Model;

class Product extends BaseController
{
    function __construct()
    {
        $this->fixityHome  = new fixityHome();
    }
    
    public function product()
    {
        $data['page']       = 'fixityHome/product';
        $data['module']     = 'Fixity';
        $data['js']         = array('external'=> array('fixity-js'=>'fixityHome/fixity_js.php','footer-js'=>'fixityHome/js/footer-js.php'));
        $data['blog_footer']= $this->fixityHome->getFooter();
        return view('layout/content',$data);
    }

    public function deal()
    {
        $data['page']       = 'product_submenu/quilkdeals';
        $data['module']     = 'product';
        $data['js']         = array('external'=> array('fixity-js'=>'fixityHome/fixity_js.php','footer-js'=>'fixityHome/js/footer-js.php'));
        $data['blog_footer']= $this->fixityHome->getFooter();
        return view('layout/content',$data);
    }

    public function good_governance()
    {
        $data['page']       = 'product_submenu/goodgovernance';
        $data['module']     = 'product';
        $data['js']         = array('external'=> array('fixity-js'=>'fixityHome/fixity_js.php','footer-js'=>'fixityHome/js/footer-js.php'));
        $data['blog_footer']= $this->fixityHome->getFooter();
        return view('layout/content',$data);
    }

    public function legacy()
    {
        $data['page']       = 'product_submenu/legacy';
        $data['module']     = 'product';
        $data['js']         = array('external'=> array('fixity-js'=>'fixityHome/fixity_js.php','footer-js'=>'fixityHome/js/footer-js.php'));
        $data['blog_footer']= $this->fixityHome->getFooter();
        return view('layout/content',$data);
    }

    public function product_1()
    {
        $data['page']       = 'product_submenu/product_1';
        $data['module']     = 'product';
        $data['js']         = array('external'=> array('fixity-js'=>'fixityHome/fixity_js.php','footer-js'=>'fixityHome/js/footer-js.php'));
        $data['blog_footer']= $this->fixityHome->getFooter();
        return view('layout/content',$data);
    }

    public function product_2()
    {
        $data['page']       = 'product_submenu/product_2';
        $data['module']     = 'product';
        $data['js']         = array('external'=> array('fixity-js'=>'fixityHome/fixity_js.php','footer-js'=>'fixityHome/js/footer-js.php'));
        $data['blog_footer']= $this->fixityHome->getFooter();
        return view('layout/content',$data);
    }

    public function product_3()
    {
        $data['page']       = 'product_submenu/product_3';
        $data['module']     = 'product';
        $data['js']         = array('external'=> array('fixity-js'=>'fixityHome/fixity_js.php','footer-js'=>'fixityHome/js/footer-js.php'));
        $data['blog_footer']= $this->fixityHome->getFooter();
        return view('layout/content',$data);
    }

    public function asset_management()
    {
        $data['page']       = 'product_submenu/amts';
        $data['module']     = 'product';
        $data['js']         = array('external'=> array('fixity-js'=>'fixityHome/fixity_js.php','footer-js'=>'fixityHome/js/footer-js.php'));
        $data['blog_footer']= $this->fixityHome->getFooter();
        return view('layout/content',$data);
    }

    public function password_protector()
    {
        $data['page']       = 'product_submenu/pass_protector';
        $data['module']     = 'product';
        $data['js']         = array('external'=> array('fixity-js'=>'fixityHome/fixity_js.php','footer-js'=>'fixityHome/js/footer-js.php'));
        $data['blog_footer']= $this->fixityHome->getFooter();
        return view('layout/content',$data);
    }



}









