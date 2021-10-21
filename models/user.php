<?php 
class user extends model{
    var $table;
    function __construct()
    {
        parent::__construct();
        $this->table = 'quantri';   
    }
    function login($us,$pass)
    {
        $user =  $this->setquery('SELECT * FROM `quantri` WHERE trangthai!=0 and tendangnhap=?')->loadrow([$us]);
        if($user && password_verify($pass,$user->matkhau))
        {
            return $user;
        }else
            return false;
    }

    function isExist($ten)
    {
        return $this->setquery('SELECT * FROM `quantri` WHERE tendangnhap=?')->loadrow([$ten]);
    }

    function changePassword($pass,$id)
    {
        return $this->setquery('UPDATE `quantri` SET matkhau=? WHERE id=?')->save([$pass,$id]);
    }
    
    function reset_pass($id,$pass)
    {
        return $this->setquery('update `quantri` set password=? WHERE id=?')->save([$pass,$id]);
    }
}