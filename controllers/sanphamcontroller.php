<?php
class sanphamcontroller extends controller
{
    function index()
    {
        $list   = (new sanpham)->get();
        $trash   = (new sanpham)->trash();
        $ncc    = (new nhacungcap);
        $loai    = (new loaisp);
        $this->view('views/sanpham/dssp', [
            'list'  => $list,
            'trash' => $trash,
            'ncc'   => $ncc,
            'loai'  => $loai
        ]);
    }

    function create()
    {
        $dsNcc    = (new nhacungcap)->get();
        $dsLoai   = (new loaisp)->get();
        $sanphamtb = (new sanpham);
        if ($_POST != null) {
            if(!is_numeric($_POST['soluong']) || !is_numeric($_POST['gia']))
            {
                chuyentrang(href('sanpham','create'),['msg'=>'Dữ liệu giá và số lượng không hợp lệ!','status'=>'danger']);
            }else{
                $isExist = $sanphamtb->timKiemTheoCot('ten', $_POST['ten']);
                if (!$isExist) {
                    if(!isset($_POST['trangthai'])||$_POST['trangthai'] == null)
                        $_POST['trangthai'] = 0;
                    $_POST['hinhdaidien'] = str_replace('public/','',$_POST['hinhdaidien']); 
                    $sanpham = $sanphamtb->insert($_POST);
                    if ($sanpham) {
                        chuyentrang(href('sanpham','index'),['msg'=>'thêm thành công']);
                    }
                }
            }
        }
        $this->view('views/sanpham/themsp', ['dsNcc' => $dsNcc, 'dsLoai' => $dsLoai]);
    }

    function edit()
    {
        $msg = '';
        $status = '';
        $ncc    = new nhacungcap;
        $loai   = new loaisp;
        $dsLoai = $loai->get();
        $dsNcc  = $ncc->get();
        $sanpham = new sanpham;
        if ($_POST != null) {
            if(!is_numeric($_POST['soluong']) || !is_numeric($_POST['gia']))
            {
                chuyentrang(href('sanpham','create'),['msg'=>'Dữ liệu giá và số lượng không hợp lệ!','status'=>'danger']);
            }else{
                if(!isset($_POST['trangthai'])||$_POST['trangthai'] == null)
                    $_POST['trangthai'] = 2;
                $_POST['hinhdaidien'] = str_replace('public/','',$_POST['hinhdaidien']); 
                $update = $sanpham->update($_POST, $_GET['id']);
                if ($update == true) {
                    $msg = 'Cập nhật thành công';
                    $status = 'success';
                } else {
                    $msg = 'Cập nhật thất bại';
                    $status = 'danger';
                }
                chuyentrang(href('sanpham','index'),['status' => $status, 'msg' => $msg]);
            }
        }
        $item = $sanpham->find($_GET['id']);
        $this->view('views/sanpham/chitiet', ['item' => $item, 'dsNcc' => $dsNcc, 'dsLoai' => $dsLoai, 'msg' => $msg]);
    }

    function delete()
    {
        $del = (new sanpham)->delete($_GET['id']);
        if ($del != null) {
            $status = 'success';
            $msg = 'Xóa sản phẩm thành công';
        } else {
            $status = 'danger';
            $msg = 'Xóa sản phẩm thất bại';
        }
        chuyentrang(href('sanpham','index'),['status' => $status, 'msg' => $msg]);
    }

    function destroy()
    {
        $del = (new sanpham)->destroy($_GET['id']);
        if ($del != null) {
            $status = 'success';
            $msg = 'Đã xóa vĩnh viễn sản phẩm!';
        } else {
            $status = 'danger';
            $msg = 'Xóa vĩnh viễn thất bại';
        }
        chuyentrang(href('sanpham','index'),['status' => $status, 'msg' => $msg]);
    }

    function restore()
    {
        $del = (new sanpham)->restore($_GET['id']);
        if ($del != null) {
            $status = 'success';
            $msg = 'Khôi phục sản phẩm thành công';
        } else {
            $status = 'danger';
            $msg = 'Khôi phục sản phẩm thất bại';
        }
        chuyentrang(href('sanpham','index'),['status' => $status, 'msg' => $msg]);
    }
}
