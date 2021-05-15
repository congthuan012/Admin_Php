<?php
class theodoidonhang extends model
{
    var $table = 'theo_doi_don_hang';
    function __construct(){
        parent::__construct();
    }

    function get()
    {
        return $this->setquery('SELECT * FROM `theo_doi_don_hang`')->loadrows();
    }
    function find($id)
    {
        return $this->setquery('SELECT * FROM `theo_doi_don_hang` WHERE id=?')->loadrow([$id]);
    }
}