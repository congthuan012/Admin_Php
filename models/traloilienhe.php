<?php
/**
 * 
 */
class traloilienhe extends model
{
	var $table = 'tra_loi_lien_he';
	function __construct()
	{
		parent::__construct();
	}

	function getRepMail($id)
    {
        return $this->setquery('SELECT * FROM `'.$this->table.'` WHERE trangthai!=0 and tra_loi=?')->loadrows([$id]);
    }
}