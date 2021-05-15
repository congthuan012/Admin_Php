<?php 
class customercontroller extends controller
{
    public function index(){
        $dsKhachHang = (new khachhang)->get();
        $trash = (new khachhang)->trash();
        $this->view('views/khachhang/index',['dsKhachHang'=>$dsKhachHang,'trash'=>$trash]);
    }

    public function create(){
        if($_POST)
        {
            if($_POST['trangthai']==null)
            {
                $_POST['trangthai'] = 2;
            }
            $_POST['password'] = password_hash($_POST['password'],PASSWORD_DEFAULT);
            $_POST['avt'] = str_replace('public/','',$_POST['avt']); 
            $_POST['email'] = trim($_POST['email']);
            $create = (new khachhang)->insert($_POST);
            if($create)
            {
                $msg ='Thêm thành công';
                $status = 'success';
            }else{
                $msg ='Có lỗi xảy ra';
                $status = 'danger';
            }
            chuyentrang('index.php?controller=customer&action=create',['msg'=>$msg,'status'=>$status]);
        }
        $this->view('views/khachhang/create');
    }

    public function delete(){
        if($_GET['id']){
            $delete = (new khachhang)->delete($_GET['id']);
            if($delete)
            {
                $msg ='Xóa thành công';
                $status = 'success';
            }
        }else{
            $msg ='Có lỗi xảy ra';
            $status = 'danger';
        }
        chuyentrang('index.php?controller=customer&action=index',['msg'=>$msg,'status'=>$status]);
    }

    public function edit(){
        $khachHang = new khachhang;
        $msg    = '';
        $status = '';
        $chitiet = $khachHang->find($_GET['id']);
        if($_POST)
        {
            if($_POST['trangthai']==null)
            {
                $_POST['trangthai'] = 2;
            }
            $_POST['avt'] = str_replace('public/','',$_POST['avt']); 
            $_POST['email'] = trim($_POST['email']);
            $msg ='Có lỗi xảy ra';
            $status = 'danger';
            $update = $khachHang->update($_POST,$_GET['id']);
            if($update)
            {
                $msg ='Cập nhật thành công';
                $status = 'success';
            }
            chuyentrang('index.php?controller=customer&action=index',['msg'=>$msg,'status'=>$status]);
        }
        if($chitiet)
            $this->view('views/khachhang/edit',['chitiet'=>$chitiet]);
    }

    public function destroy(){
        if($_GET['id']){
            $delete = (new khachhang)->destroy($_GET['id']);
            if($delete)
            {
                $msg ='Xóa vĩnh viễn thành công';
                $status = 'success';
            }
        }else{
            $msg ='Có lỗi xảy ra';
            $status = 'danger';
        }
        chuyentrang('index.php?controller=customer&action=index',['msg'=>$msg,'status'=>$status]);
    }

    public function restore(){
        if($_GET['id']){
            $delete = (new khachhang)->restore($_GET['id']);
            if($delete)
            {
                $msg ='Khôi phục thành công';
                $status = 'success';
            }
        }else{
            $msg ='Có lỗi xảy ra';
            $status = 'danger';
        }
        chuyentrang('index.php?controller=customer&action=index',['msg'=>$msg,'status'=>$status]);
    }

    public function reset(){
        if($_GET['id']){
            $reset = (new khachhang)->reset_pass($_GET['id'],password_hash('123456',PASSWORD_DEFAULT));
            if($reset)
            {
                $msg ='Đặt lại mật khẩu thành công';
                $status = 'success';
            }
        }else{
            $msg ='Có lỗi xảy ra';
            $status = 'danger';
        }
        chuyentrang('index.php?controller=customer&action=index',['msg'=>$msg,'status'=>$status]);
    }
}