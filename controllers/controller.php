<?php 
class controller
{
    var $role;
    var $parent_menu;
    function __construct()
    {
        if(islogin())
        {
            $this->role = new role();
            $this->parent_menu = $this->role->get_functionsforuser(0,$_SESSION['login_id']);
        }
    }
    //data phai la mang va mang co key tu dinh nghia
    function view( $view,$data=[],$layout = 'layout')
    {
        if(is_array($data))
        {
            //tien hanh giai nen cac phan tu trong mang data
            extract($data);
        }
        include "views/$layout.php";
    }
    function _404()
    {
        // $view = 'views/404.php';
        // include 'views/layout.php';
        $this->view('views/404',[],'empty');
    }
    function _403()
    {
        // $view = 'views/404.php';
        // include 'views/layout.php';
        $this->view('views/403',[]);
    }
}