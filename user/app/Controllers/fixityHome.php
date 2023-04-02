<?php

namespace App\Controllers;


class fixityHome extends BaseController
{
    public function index()
    {
        $data['page']       = 'fixityHome/Home';
        $data['module']     = 'Fixity';
        $data['js']         = array('external'=> array('fixity-js'=>'fixityHome/fixity_js.php'));
       
         return view('layout/content',$data);
    
    }

    public function career()
    {

        $data['page']       = 'fixityHome/careers';
        $data['module']     = 'Fixity';
        $data['js']         = array('external'=> array('fixity-js'=>'fixityHome/fixity_js.php'));
       
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

}









