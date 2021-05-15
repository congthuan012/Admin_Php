<?php 
class nhacungcap extends model{
    var $table = 'nhacungcap';

    function __construct()
    {
        parent::__construct();
    }
    
    // function get()
    // {
    //     return $this->setquery('SELECT * FROM `sanpham` WHERE trangthai!=0')->loadrows();
    // }
    // function find($id)
    // {
    //     return $this->setquery('SELECT * FROM `sanpham` WHERE trangthai!=0 and id=?')->loadrow([$id]);
    // }
    // function delete($id)
    // {
    //     return $this->setquery('update `sanpham` set trangthai=0 WHERE id=?')->save([$id]);
    // }
}