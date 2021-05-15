<?php
class usercontroller extends controller
{

    function login()
    {
        $thongbao = '';
        if (isset($_COOKIE['src'], $_COOKIE['name']) && $_COOKIE['src'] && $_COOKIE['id']) {
            //chac chan se dang nhap dc
            $_SESSION['status_login'] = true;
            $_SESSION['login_name'] = $_COOKIE['name'];
            $_SESSION['login_id'] =  $_COOKIE['id'];
        }
        //kiem tra ong co dc vao hay khong
        if (islogin())
            chuyentrang('index.php');
        if (isset($_POST['username'], $_POST['password'])) {
            $user = (new user())->login($_POST['username'], $_POST['password']);
            if ($user) {
                if ($user->trangthai == 1) {
                    //goi ss tao cờ trạng thái
                    $_SESSION['status_login'] = true;
                    $_SESSION['login_name'] = $user->ten;
                    $_SESSION['login_avt'] = $user->avt;
                    $_SESSION['login_id'] = $user->id;
                    //check ong muon luu k
                    if (isset($_POST['remember']) && $_POST['remember'] == 1) {
                        //luu ck
                        $time = time() + 3600;
                        setcookie('src', 1, $time);
                        setcookie('name', $_SESSION['login_name'], $time);
                        setcookie('avt', $_SESSION['login_avt'], $time);
                        setcookie('id', $_SESSION['login_id'], $time);
                    }
                    chuyentrang('index.php');
                } else {
                    $thongbao = msg('tài khoản của bạn bị khóa', 'danger');
                }
            } else {
                $thongbao = msg('thông tin đănng nhập không đúng', 'danger');
            }
        }
        $this->view('views/users/login', ['thongbao' => $thongbao], 'layout-no-menu');
    }
    function logout()
    {
        session_destroy();
        setcookie('src', false, time() - 1);
        setcookie('name', false, time() - 1);
        setcookie('avt', false, time() - 1);
        setcookie('id', 0, 0);
        chuyentrang('index.php');
    }

    function index()
    {
        $list = (new user)->get();
        $trash = (new user)->trash();
        $this->view('views/users/index', [
            'list' => $list,
            'trash' => $trash
        ]);
    }

    function edit()
    {
        $users = new user;
        $nhom = new nhom;
        $msg = 'Có lỗi xảy ra';
        $status = 'danger';
        if ($_POST) {
            if($_POST['trangthai']==null)
            {
                $_POST['trangthai'] = 2;
            }
            $_POST['matkhau'] = password_hash($_POST['matkhau'],PASSWORD_DEFAULT);
            $edit = $users->update($_POST, $_GET['id']);
            if ($edit == true) {
                $msg = 'Chỉnh sửa user thành công';
                $status = 'success';
                chuyentrang(href('user', 'index'), ['msg' => $msg, 'status' => $status]);
            } else {
                $msg = 'Có lỗi xảy ra';
                $status = 'danger';
            }
        }
        $user = $users->find($_GET['id']);
        $dsNhom = $nhom->get();
        if ($user) {
            $this->view('views/users/chitiet', ['user' => $user, 'dsNhom' => $dsNhom, 'msg' => $msg, 'status' => $status]);
        } else {
            chuyentrang(href('user', 'index'), ['msg' => $msg, 'status' => $status]);
        }
    }

    function delete()
    {
        $msg = 'Xóa thất bại!';
        $status = 'danger';
        if ($_GET['id'] && $_GET['id'] !=  $_SESSION['login_id']) {
            $delete = (new user)->delete($_GET['id']);
            if ($delete) {
                $msg = 'Xóa thành công!';
                $status = 'success';
            }
        }
        chuyentrang(href('user','index'),['msg'=>$msg,'status'=>$status]);
    }

    function create()
    {
        $users  = new user;
        $nhom   = new nhom;
        $msg    = '';
        $status = '';
        if ($_POST) {
            if($_POST['trangthai']==null)
            {
                $_POST['trangthai'] = 2;
            }
            $isExist = $users->isExist($_POST['tendangnhap']);
            if (!$isExist) {
                $_POST['matkhau'] = password_hash($_POST['matkhau'],PASSWORD_DEFAULT);
                $edit = $users->insert($_POST);
                if ($edit == true) {
                    $msg    = 'Thêm user thành công';
                    $status = 'success';
                } else {
                    $msg    = 'Có lỗi xảy ra';
                    $status = 'danger';
                }
            } else {
                $msg = 'Tên đăng nhập đã tồn tại';
                $status = 'warning';
            }
            chuyentrang(href('user', 'create'), ['msg' => $msg, 'status' => $status]);
        }
        $dsNhom = $nhom->get();
        $this->view('views/users/them', ['dsNhom' => $dsNhom]);
    }

    function thongtin(){
        $user = (new user)->find($_SESSION['login_id']);
        $this->view('views/users/thongtinchung',['user'=>$user]);
    }
    function doimatkhau(){
        if($_POST){
            $newpass = $_POST['newpassword'];
            $pass = (new user)->find($_SESSION['login_id'])->matkhau;
            if(password_verify($_POST['password'],$pass) && $_POST['cfpassword'] == $newpass)
            {
                $newpass = password_hash($newpass,PASSWORD_DEFAULT);
                $update = (new user)->changePassword($newpass,$_SESSION['login_id']);
                if($update)
                {
                    $msg = 'Đổi mật khẩu thành công!';
                    $status = 'success';
                }else{
                    $msg = 'Có lỗi xảy ra!';
                    $status = 'danger';
                }
            }
            else{
                $msg = 'Mật khẩu không chính xác!';
                $status = 'danger';
            }
            chuyentrang(href('user','doimatkhau'),['msg'=>$msg,'status'=>$status]);
        }
        $this->view('views/users/doimatkhau');
    }

    function destroy()
    {
        $msg = 'Xóa thất bại!';
        $status = 'danger';
        if ($_GET['id'] && $_GET['id'] !=  $_SESSION['login_id']) {
            $delete = (new user)->destroy($_GET['id']);
            if ($delete) {
                $msg = 'Xóa thành công!';
                $status = 'success';
            }
        }
        chuyentrang(href('user','index'),['msg'=>$msg,'status'=>$status]);
    }

    function restore()
    {
        $msg = 'Xóa thất bại!';
        $status = 'danger';
        $delete = (new user)->restore($_GET['id']);
        if ($delete) {
            $msg = 'Khôi phục thành công!';
            $status = 'success';
        }
        chuyentrang(href('user','index'),['msg'=>$msg,'status'=>$status]);
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
        chuyentrang(href('user','index'),['msg'=>$msg,'status'=>$status]);
    }
}
