<?php 
class hethongcontroller extends controller
{
    function index()
    {
        $list = (new sanpham)->get();
        $users = (new user)->get();
        $donhang = (new donhang);
        $dsDonHang = $donhang->get();
        $doanhthu = $donhang->getTotaleIncome();
        $this->view('views/hethong/trangchu',['list'=>$list,'users'=>$users,'dsDonHang'=>$dsDonHang,'doanhthu'=>$doanhthu]);
    }

    function _404()
    {
        // $view = 'views/404.php';
        // include 'views/layout.php';
        $this->view('views/404','empty');
    }
    
}