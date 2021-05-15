<?php
class donhang extends model
{
    var $table = 'donhang';
    function __construct()
    {
        parent::__construct();
    }

    function getTotaleIncome($tt = 4)
    {
        return $this->setquery('SELECT SUM(tongtien) tong FROM `donhang` WHERE trangthai!=0 and trangthaidonhang=?')->loadrow([$tt]);
    }
}