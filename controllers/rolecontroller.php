<?php 
class rolecontroller extends controller
{
    function __construct()
    {
        parent::__construct();
    }
    function setrole()
    {
        $msg = '';
        if(!isset($_GET['id']) || !$_GET['id'])
            chuyentrang(href('role','index'));
        $user = $this->role->get_user($_GET['id']);
        if(!$user)
            chuyentrang(href('role','index'));
        if(isset($_POST['user']))
        {
            // ghi vao quyen dc su dung
            if(isset($_POST['funcs']))
            {
                $this->role->deny($_POST['user']);
                foreach($_POST['funcs'] as $func)
                {
                    $this->role->grant($func,$_POST['user']);
                }
            }
            $msg = msg('Ghi thanh cong');
        }
        $data = [
            'functions'=>$this->role->get_functions(),
            'user'=>$user,
            'msg'=>$msg
        ];
        $this->view('views/role/setrole',$data);
    }
}