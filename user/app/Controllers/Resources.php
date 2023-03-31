<?php

namespace App\Controllers;

class Resources extends BaseController
{
    public function resource()
    {
        $data['page']       = 'fixityHome/resource';
        $data['module']     = 'Fixity';
        $data['js']         = array('external'=> array('resource-js'=>'fixityHome/js/resource_js.php'));
       
         return view('layout/content',$data);
    }

    public function awards()
    {
        $data['page']       = 'resource_submenu/awards';
        $data['module']     = 'product';
        $data['js']         = array('external'=> array('fixity-js'=>'fixityHome/fixity_js.php'));
       
        return view('layout/content',$data);
    }

    public function blogs()
    {
        $data['page']       = 'resource_submenu/blogs';
        $data['module']     = 'product';
        $data['js']         = array('external'=> array('fixity-js'=>'fixityHome/fixity_js.php'));
       
        return view('layout/content',$data);
    }

    public function whitepapers()
    {
        $data['page']       = 'resource_submenu/whitepapers';
        $data['module']     = 'product';
        $data['js']         = array('external'=> array('fixity-js'=>'fixityHome/fixity_js.php'));
       
        return view('layout/content',$data);
    }


}









