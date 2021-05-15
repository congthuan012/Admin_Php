<?php
class trangthai extends model{
    var $table ='trang_thai_don_hang';
    function __construct()
    {
        parent::__construct();
    }

    function get()
    {
        return $this->setquery('SELECT * FROM `trang_thai_don_hang`')->loadrows();
    }
    function find($id)
    {
        return $this->setquery('SELECT * FROM `trang_thai_don_hang` WHERE id=?')->loadrow([$id]);
    }
}