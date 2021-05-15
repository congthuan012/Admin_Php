<?php
class nhacungcapcontroller extends controller
{
    function index(){
        $dsNhaCungCap = (new nhacungcap)->get();
        $trash = (new nhacungcap)->trash();
        $this->view('views/nhacungcap/index',['dsNhaCungCap'=>$dsNhaCungCap,'trash'=>$trash]);
    }

    function delete(){
        if($_GET['id'])
        {
            $delete = (new nhacungcap)->delete($_GET['id']);
            if($delete == true)
            {
                chuyentrang(href('nhacungcap','index'),['msg'=>'Xóa nhà cung cấp thành công','status'=>'success']);
            }
        }
        chuyentrang(href('nhacungcap','index'),['msg'=>'Có lỗi xảy ra','status'=>'danger']);
    }

    function create(){
        if($_POST)
        {
            $isExist = (new nhacungcap)->timKiemTheoCot('ten',$_POST['ten']);
            if($isExist == false)
            {
                if($_POST['trangthai']==null)
                {
                    $_POST['trangthai'] = 2;
                }
                $them = (new nhacungcap)->insert($_POST);
                if($them)
                {
                    $msg = 'Thêm thành công!';
                    $status = 'success';
                }else{
                    $msg = 'Có lỗi xảy ra!';
                    $status = 'danger';
                }
            }else{
                $msg = 'Nhà cung cấp đã tồn tại';
                $status = 'warning';
            }
            chuyentrang(href('nhacungcap','create'),['msg'=>$msg,'status'=>$status]);
        }
        $this->view('views/nhacungcap/them');
    }

    function edit(){
        $nhacungcap = new nhacungcap;
        if($_POST)
        {
            if($_POST['trangthai']==null)
            {
                $_POST['trangthai'] = 2;
            }
            $sua = $nhacungcap->update($_POST,$_GET['id']);
            if($sua)
            {
                $msg = 'Sửa thành công!';
                $status = 'success';
            }else{
                $msg = 'Có lỗi xảy ra!';
                $status = 'danger';
            }
            chuyentrang(href('nhacungcap','index'),['msg'=>$msg,'status'=>$status]);
        }
        $item = $nhacungcap->find($_GET['id']);
        $this->view('views/nhacungcap/chitiet',['item'=>$item]);
    }

    function destroy(){
        if($_GET['id'])
        {
            $delete = (new nhacungcap)->destroy($_GET['id']);
            if($delete == true)
            {
                chuyentrang(href('nhacungcap','index'),['msg'=>'Xóa nhà cung cấp thành công','status'=>'success']);
            }
        }
        chuyentrang(href('nhacungcap','index'),['msg'=>'Có lỗi xảy ra','status'=>'danger']);
    }

    function restore(){
        if($_GET['id'])
        {
            $delete = (new nhacungcap)->restore($_GET['id']);
            if($delete == true)
            {
                chuyentrang(href('nhacungcap','index'),['msg'=>'Khôi phục nhà cung cấp thành công','status'=>'success']);
            }
        }
        chuyentrang(href('nhacungcap','index'),['msg'=>'Có lỗi xảy ra','status'=>'danger']);
    }
}