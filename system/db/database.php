<?php 
class database 
{
    var $pdo,$sql,$statement;
    function __construct()     
    {
        try{
            //buoc 1: ket noi server
            $option = [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION];
            $this->pdo = new PDO('mysql:host='.HOST.';port='.PORT.';dbname='.DBNAME,USERNAME,PASSWORD,$option);
            //buoc dem  chuyan ve ban gutf8 hien tieng viet
            $this->pdo->query('set names utf8');          
        }catch(PDOException $e){
            exit('khong ket noi duoc ('.$e->getMessage().')');
        }
    }
    function setquery($sql)
    {
        $this->sql = $sql;
        return $this;
    }
    function loadrow($params = [])
    {
        try{
            $this->statement  = $this->pdo->prepare($this->sql);
            $this->statement->execute($params);          
            return $this->statement->fetch(PDO::FETCH_OBJ);
        }
        catch(PDOException $e){
            exit('Thuc thi xay ra lo ('.$e->getMessage().')');
        }
    }
    function loadrows($params = [])
    {
        try{          
            $this->statement  = $this->pdo->prepare($this->sql);           
            $this->statement->execute($params);          
            return $this->statement->fetchAll(PDO::FETCH_OBJ);
        }catch(PDOException $e){
            exit('Thuc thi xay ra lo ('.$e->getMessage().')');
        }
    }
    function save($params = [])
    {
        try{          
            $this->statement  = $this->pdo->prepare($this->sql);           
            return $this->statement->execute($params);    
        }catch(PDOException $e){
            exit('Thuc thi xay ra lo ('.$e->getMessage().')');
        }
    }
    function disconnect()
    {
        $this->pdo = null;
        $this->statement = null;
    }
}
