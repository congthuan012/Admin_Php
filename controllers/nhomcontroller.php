<?php
class nhomcontroller extends controller
{
    function index(){
        $dsNhom = (new nhom)->get();
        $trash = (new nhom)->trash();
        $this->view('views/nhom/index',['dsNhom'=>$dsNhom,'trash'=>$trash]);
    }

    function delete(){
        if($_GET['id'])
        {
            $delete = (new nhom)->delete($_GET['id']);
            if($delete == true)
            {
                chuyentrang(href('nhom','index'),['msg'=>'Xóa nhóm thành công','status'=>'success']);
            }
        }
        chuyentrang(href('nhom','index'),['msg'=>'Có lỗi xảy ra','status'=>'danger']);
    }

    function create(){
        if($_POST)
        {
            $isExist = (new nhom)->timKiemTheoCot('ten',$_POST['ten']);
            if($isExist == false)
            {
                if($_POST['trangthai']==null)
                {
                    $_POST['trangthai'] = 2;
                }
                $them = (new nhom)->insert($_POST);
                if($them)
                {
                    $msg = 'Thêm thành công!';
                    $status = 'success';
                }else{
                    $msg = 'Có lỗi xảy ra!';
                    $status = 'danger';
                }
            }else{
                $msg = 'Nhóm đã tồn tại';
                $status = 'warning';
            }
            chuyentrang(href('nhom','create'),['msg'=>$msg,'status'=>$status]);
        }
        $this->view('views/nhom/them');
    }

    function edit(){
        $nhom = new nhom;
        $item = $nhom->find($_GET['id']);
        if($_POST)
        {
            $isExist = (new nhom)->timKiemTheoCot('ten',$_POST['ten']);
            if($isExist == false || $_POST['ten'] == $item->ten)
            {
                if($_POST['trangthai']==null)
                {
                    $_POST['trangthai'] = 2;
                }
                $sua = $nhom->update($_POST,$_GET['id']);
                if($sua)
                {
                    $msg = 'Sửa thành công!';
                    $status = 'success';
                }else{
                    $msg = 'Có lỗi xảy ra!';
                    $status = 'danger';
                }
                chuyentrang(href('nhom','index'),['msg'=>$msg,'status'=>$status]);
            }else{
                chuyentrang(href('nhom','edit',['id'=>$_GET['id']]),['msg'=>'Nhóm đã tồn tại','status'=>'warning']);
            }

        }
        $this->view('views/nhom/chitiet',['item'=>$item]);
    }

    function destroy(){
        if($_GET['id'])
        {
            $delete = (new nhom)->destroy($_GET['id']);
            if($delete == true)
            {
                chuyentrang(href('nhom','index'),['msg'=>'Xóa nhóm thành công','status'=>'success']);
            }
        }
        chuyentrang(href('nhom','index'),['msg'=>'Có lỗi xảy ra','status'=>'danger']);
    }

    function restore(){
        if($_GET['id'])
        {
            $delete = (new nhom)->restore($_GET['id']);
            if($delete == true)
            {
                chuyentrang(href('nhom','index'),['msg'=>'Khôi phục nhóm thành công','status'=>'success']);
            }
        }
        chuyentrang(href('nhom','index'),['msg'=>'Có lỗi xảy ra','status'=>'danger']);
    }
}