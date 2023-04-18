<?php

namespace App\Controllers;
use App\Models\fixityHome_Model;

class fixityHome extends BaseController
{
    function __construct()
    {
        $this->homeModel = new fixityHome_Model();
    }

    public function index()
    {
        $data['page']       = 'fixityHome/Home';
        $data['module']     = 'Fixity';
        $data['js']         = array('external'=> array('fixity-js'=>'fixityHome/fixity_js.php'));
        $data['logo']       = $this->homeModel->getLogoList();
        //print_r($data['logo']);die();
       
        return view('layout/content',$data);
    
    }

    public function career()
    {

        $data['page']       = 'fixityHome/careers';
        $data['module']     = 'Fixity';
        $data['js']         = array('external'=> array('fixity-js'=>'fixityHome/fixity_js.php'));
        $data['career']       = $this->homeModel->getCareerList();
        return view('layout/content',$data);
    }

    public function about()
    {
        $data['page']       = 'fixityHome/about_us';
        $data['module']     = 'Fixity';
        $data['js']         = array('external'=> array('fixity-js'=>'fixityHome/fixity_js.php'));
       
         return view('layout/content',$data);
    }

    public function partners()
    {
        $data['page']       = 'fixityHome/partners';
        $data['module']     = 'Fixity';
        $data['js']         = array('external'=> array('partners-js'=>'fixityHome/js/partners_js.php'));
        return view('layout/content',$data);
    }

    public function resource()
    {
        $data['page']       = 'fixityHome/resource';
        $data['module']     = 'Fixity';
        $data['js']         = array('external'=> array('resource-js'=>'fixityHome/js/resource_js.php'));
       
         return view('layout/content',$data);
    }

    public function contact()
    {
        $data['page']       = 'fixityHome/contact';
        $data['module']     = 'Fixity';
        $data['js']         = array('external'=> array('fixity-js'=>'fixityHome/fixity_js.php'));
       
        return view('layout/content',$data);
    }

    public function blog()
    {
        $data['page']       = 'fixityHome/blog';
        $data['module']     = 'Fixity';
        $data['js']         = array('external'=> array('fixity-js'=>'fixityHome/fixity_js.php'));
       
        return view('layout/content',$data);
    }

}









