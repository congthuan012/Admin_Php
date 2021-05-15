<?php
class role extends model
{
    var $table = 'chucnang';
    function __construct()
    {
        parent::__construct();
    }
    function get_users()
    {
        $this->setquery('select * from quantri where trangthai=1');
        return $this->loadrows();
    }
    function get_user($id)
    {
        $this->setquery('select * from quantri where trangthai=1 and id=?');
        return $this->loadrow([$id]);
    }
    function get_functions($parent_id = 0)
    {
        $this->setquery('select * from chucnang where trangthai=1 and macha=? and allow != 1');
        return $this->loadrows([$parent_id]);
    }
    function grant($fid, $uid)
    {
        $this->setquery('insert into phanquyen values(?,?)');
        return $this->save([$fid, $uid]);
    }
    function deny($uid)
    {
        $this->setquery('delete from phanquyen where maquantri=?');
        return $this->save([$uid]);
    }
    function checked($fid, $uid)
    {
        $this->setquery('select * from phanquyen where machucnang=? and maquantri=?');
        return $this->loadrows([$fid, $uid]);
    }

    function get_functionsforuser($parent_id = 0, $uid)
    {
        $this->setquery('SELECT c.* FROM phanquyen p join chucnang c on p.machucnang = c.id
        where p.maquantri = ? and c.macha=? and hienthimenu=1');
        return $this->loadrows([$uid, $parent_id]);
    }
    function checkrole($controller, $action, $uid)
    {
        //    xemmang(["index.php?controller=$controller&action=$action",$uid]);
        if ($this->setquery('SELECT id FROM chucnang WHERE lienket = ? and trangthai=1 and allow=1')->loadrow(["index.php?controller=$controller&action=$action"]))
            return true;
        return $this->setquery('SELECT * FROM `phanquyen` where machucnang = (SELECT id FROM chucnang WHERE lienket = ?) 
        and maquantri = ?')->loadrow(["index.php?controller=$controller&action=$action", $uid]);
    }
}
