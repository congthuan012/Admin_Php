<?php 
class khachhang extends model{
    var $table = 'khachhang';
    function __construct()
    {
        parent::__construct();
    }

    function reset_pass($id,$pass)
    {
        return $this->setquery('update `khachhang` set password=? WHERE id=?')->save([$pass,$id]);
    }
}