<?php
class chitietdonhang extends model{
    var $table = 'chitietdonhang';
    function __construct()
    {
        parent::__construct();
    }

    function getSanPham($id){
        return $this->setquery('SELECT * FROM `chitietdonhang` WHERE trangthai!=0 and madonhang=?')->loadrows([$id]);
    }
}