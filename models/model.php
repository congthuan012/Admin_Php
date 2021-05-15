<?php 
class model extends database
{
    var $table;
    function __construct()
    {
        parent::__construct();
    }
    function get()
    {
        return $this->setquery('SELECT * FROM `'.$this->table.'` WHERE trangthai!=0 AND ISNULL(deleted_at)')->loadrows();
    }
    function find($id)
    {
        return $this->setquery('SELECT * FROM `'.$this->table.'` WHERE trangthai!=0 and id=?')->loadrow([$id]);
    }
    function insert($fields)
    {   
        $column = $question ='';
        $params = [];
        foreach ($fields as $key => $value) {
            $column .= "`$key`,";
            $question .= "?,";
            $params[] = trim($value);
        }
        $column = rtrim($column,',');
        $question = rtrim($question,',');
        $table = $this->table;
        $sql = 'INSERT INTO `'.$table.'` ('.$column.') VALUES('.$question.')';
        return $this->setquery($sql)->save($params);
    }
    function update($fields,$id)
    {
        // UPDATE sanpham SET soluong = 10 WHERE ma = 1
        $column  ='';
        $params = [];
        foreach ($fields as $key => $value) {
            $column .= "`$key` = ?,";
            $params[] = trim($value);
        }
        
        $column = rtrim($column,',');
        $sql = 'UPDATE `'.$this->table.'` SET '.$column.' WHERE id = '.$id;
        return $this->setquery($sql)->save($params);
    }
    function delete($id)
    {
        return $this->setquery('update `'.$this->table.'` set trangthai=0 WHERE id=?')->save([$id]);
    }
    function timKiemTheoCot($col,$val){
        return $this->setquery('SELECT * FROM `'.$this->table.'` WHERE trangthai!=0 and '.$col.'=?')->loadrow([$val]);
    }

    function trash()
    {
        return $this->setquery('SELECT * FROM `'.$this->table.'` WHERE trangthai = 0 AND ISNULL(deleted_at)')->loadrows();
    }

    function restore($id)
    {
        return $this->setquery('update `'.$this->table.'` set trangthai=1 WHERE id=?')->save([$id]);
    }

    function destroy($id)
    {
        return $this->setquery('update `'.$this->table.'` set deleted_at=NOW() WHERE id=?')->save([$id]);
    }
}