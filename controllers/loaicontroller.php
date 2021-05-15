<?php
class loaicontroller extends controller
{
    function index(){
        $loai = new loaisp;
        $dsLoai = $loai->get();
        $trash = $loai->trash();
        $this->view('views/loai/index',['dsLoai'=>$dsLoai,'trash'=>$trash,'loai'=>$loai]);
    }

    function delete(){
        if($_GET['id'])
        {
            $delete = (new loaisp)->delete($_GET['id']);
            if($delete == true)
            {
                chuyentrang(href('loai','index'),['msg'=>'Xóa loại sản phẩm thành công','status'=>'success']);
            }
        }
        chuyentrang(href('loai','index'),['msg'=>'Có lỗi xảy ra','status'=>'danger']);
    }

    function create(){
        $loai = new loaisp;
        $dsLoai = $loai->get();
        $msg = '';
        $status = '';
        if($_POST)
        {
            if($_POST['trangthai']==null)
            {
                $_POST['trangthai'] = 2;
            }
            $_POST['icon'] = str_replace('public/','',$_POST['icon']); 
            $_POST['hinhchiase'] = str_replace('public/','',$_POST['hinhchiase']); 
            $them = $loai->insert($_POST);
            if($them == true){
                $msg = 'Thêm loại thành công!';
                $status = 'success';
            }else{
                $msg = 'Có lỗi xảy ra';
                $status = 'danger';
            }
            chuyentrang(href('loai','index'),['msg'=>$msg,'status'=>$status]);
        }
        $this->view('views/loai/them',['dsLoai'=>$dsLoai]);
    }

    function edit(){
        $loai = new loaisp;
        $msg = '';
        $status = '';
        if($_POST)
        {
            if($_POST['trangthai']==null)
            {
                $_POST['trangthai'] = 2;
            }
            $_POST['icon'] = str_replace('public/','',$_POST['icon']);
            $_POST['ten'] = trim($_POST['ten']);
            $_POST['hinhchiase'] = str_replace('public/','',$_POST['hinhchiase']); 
            $sua = $loai->update($_POST,$_GET['id']);
            if($sua == true){
                $msg = 'Sửa loại thành công!';
                $status = 'success';
            }else{
                $msg = 'Có lỗi xảy ra';
                $status = 'danger';
            }
            chuyentrang(href('loai','index'),['msg'=>$msg,'status'=>$status]);
        }
        $item = $loai->find($_GET['id']);
        if($item){
            $dsLoai = $loai->get();
            $this->view('views/loai/chitiet',['item'=>$item,'dsLoai'=>$dsLoai]);
        }else{
            $msg = 'Có lỗi xảy ra';
            $status = 'danger';
            chuyentrang(href('loai','index'),['msg'=>$msg,'status'=>$status]);
        }
        
    }

    function destroy(){
        if($_GET['id'])
        {
            $delete = (new loaisp)->destroy($_GET['id']);
            if($delete == true)
            {
                chuyentrang(href('loai','index'),['msg'=>'Xóa vĩnh viễn thành công','status'=>'success']);
            }
        }
        chuyentrang(href('loai','index'),['msg'=>'Có lỗi xảy ra','status'=>'danger']);
    }

    function restore(){
        if($_GET['id'])
        {
            $delete = (new loaisp)->restore($_GET['id']);
            if($delete == true)
            {
                chuyentrang(href('loai','index'),['msg'=>'Khôi phục thành công','status'=>'success']);
            }
        }
        chuyentrang(href('loai','index'),['msg'=>'Có lỗi xảy ra','status'=>'danger']);
    }
}
