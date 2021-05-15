<?php
class donhangcontroller extends controller
{
    function index(){
        $dsDonHang = (new donhang)->get();
        $trashDonHang = (new donhang)->trash();
        $this->view('views/donhang/index',[
            'dsDonHang'=>$dsDonHang,
            'trashDonHang'=>$trashDonHang,
        ]);
    }
    function edit(){
        $tableDonHang        = new donhang;
        $tablechitietdonhang = new chitietdonhang;
        $tableTrangThai      = new trangthai;
        $tableTheoDoiDonHang = new theodoidonhang;
        $tableKhachHang      = new khachhang;
        $tableSanPham        = new sanpham;
        $msg = '';
        $status = '';
        if($_POST)
        {
            if($_POST['trangthai']==null)
            {
                $_POST['trangthai'] = 2;
            }
            $msg = 'Sửa đơn hàng thất bại';
            $status = 'danger';
            $edit = $tableDonHang->update($_POST,$_GET['ma']);
            if($edit)
            {
                $msg = 'Sửa đơn hàng thành công';
                $status = 'success';
            }
            chuyentrang(href('donhang','index'),['msg'=>$msg,'status'=>$status]);
        }
        $donhang = $tableDonHang->find($_GET['ma']);
        $dsSanPham = $tablechitietdonhang->getSanPham($donhang->id);
        if($donhang){
            $this->view('views/donhang/edit',[
                'donhang'            => $donhang,
                'dsSanPham'          => $dsSanPham,
                'tableTrangThai'     => $tableTrangThai,
                'tableTheoDoiDonHang'=> $tableTheoDoiDonHang,
                'tableKhachHang'     => $tableKhachHang,
                'tableSanPham'       => $tableSanPham,
                'msg'                => $msg,
                'status'             => $status
            ]);
        }
    }

    function delete(){
        if($_GET['ma'])
        {
            $delete = (new donhang)->delete($_GET['ma']);
            if($delete == true)
            {
                chuyentrang(href('donhang','index'),['msg'=>'Xóa đơn hàng thành công','status'=>'success']);
            }
        }
        chuyentrang(href('donhang','index'),['msg'=>'Xóa đơn hàng thất bại','status'=>'danger']);
    }

    function detail(){
        $tableDonHang        = new donhang;
        $tablechitietdonhang = new chitietdonhang;
        $tableKhachHang      = new khachhang;
        $donhang = $tableDonHang->find($_GET['ma']);
        $dsSanPham = $tablechitietdonhang->getSanPham($donhang->id);
        $lsTrangThai = (new trangthai)->get();
        $subTotal = 0;
        $sale = 0;
        $ship = 0;

        $html = "<div class='row'>
                    <div class='col-md-12'>
                        <!-- Smart Wizard -->
                        <!-- page content -->
                        <div class='clearfix'></div>
                        <div class='x_panel'>
                            <div class='x_content m-0'>
                
                                <section class='content invoice'>
                                    <!-- title row -->
                                    <div class='row'>
                                        <div class='  invoice-header'>
                                            <h1 class='d-flex align-items-baseline'>
                                                <i class='fa fa-globe'></i>
                                                <small class='pull-right'>Hôm nay:  ".date('d/m/Y') ."</small>
                                            </h1>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- info row -->
                                    <div class='row invoice-info'>
                                        <div class='col-sm-4 invoice-col'>
                                            Người gửi
                                            <address>
                                                <strong>Iron Admin, Inc.</strong>
                                                <br>795 Freedom Ave, Suite 600
                                                <br>New York, CA 94107
                                                <br>Phone: 1 (804) 123-9876
                                                <br>Email: ironadmin.com
                                            </address>
                                        </div>
                                        <!-- /.col -->
                                        <div class='col-sm-4 invoice-col'>
                                            Người nhận
                                            <address>
                                                <strong>";
                                                $html .= $tableKhachHang->find($donhang->makhachhang)->ten??'';
                                                $html .= "</strong><br>";
                                                $html .= $tableKhachHang->find($donhang->makhachhang)->dia_chi??'';
                                                $html .= "<br>Phone: ";
                                                $html .= $tableKhachHang->find($donhang->makhachhang)->sdt??'';
                                                $html .= "<br>Email:  ";
                                                $html .= $tableKhachHang->find($donhang->makhachhang)->email??''; 
                                            $html .="</address>
                                        </div>
                                        <!-- /.col -->
                                        <div class='col-sm-4 invoice-col'>
                                            <b>Số đơn hàng # $donhang->sodonhang </b>
                                            <br>
                                            <b>Mã đơn hàng:</b>  $donhang->id 
                                            <br>
                                            <b>Ngày đặt hàng:</b>  ".date_format(date_create($donhang->ngaydat),'d/m/Y')."
                                            <br>
                                            <b>Theo dõi đơn hàng:</b>
                                            ";
                                                switch ($donhang->trangthai) {
                                                    case 0:
                                                        $class = 'badge badge-danger';
                                                        break;
                                                    case 1:
                                                        $class = 'badge badge-primary';
                                                        break;
                                                    case 2:
                                                        $class = 'badge badge-secondary';
                                                        break;
                                                    case 3:
                                                        $class = 'badge badge-info';
                                                        break;
                                                    case 4:
                                                        $class = 'badge badge-success';
                                                        break;
                                                }
                                                $html .= "<span class='".$class."'>".(new theodoidonhang)->find($donhang->trangthai)->trangthai."</span>";
                                            $html.="
                                                <br>Trạng thái đơn hàng:
                                                        ";

                                                        switch ($donhang->trangthaidonhang) {
                                                            case 1:
                                                                $class = 'badge badge-secondary';
                                                                break;
                                                            case 2:
                                                                $class = 'badge badge-success';
                                                                break;
                                                        }
                                                        $html .= "<span class='".$class."'>".(new trangthai)->find($donhang->trangthaidonhang)->trangthai."</span>";
                                                $html.="
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                
                                    <!-- Table row -->
                                    <div class='row'>
                                        <div class='  table'>
                                            <table class='table table-striped'>
                                                <thead>
                                                    <tr>
                                                        <th>Số lượng</th>
                                                        <th>Tên sản phẩm</th>
                                                        <th>Mã sản phẩm #</th>
                                                        <th style='width: 59%'>Mô tả</th>
                                                        <th>Tạm tính(VNĐ)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>";
                                                    $subTotal = 0;
                                                    $sale = 0;
                                                    $ship = 0;
                                                        foreach($dsSanPham as $sanpham)
                                                        {
                                                            $html.="
                                                        <tr>
                                                            <td>". $sanpham->soluong."</td>
                                                            <td> ".(new sanpham)->find($sanpham->masanpham)->ten."</td>
                                                            <td> ".$sanpham->masanpham ."</td>
                                                            <td> ".(new sanpham)->find($sanpham->masanpham)->mota."</td>
                                                            <td> ".number_format((new sanpham)->find($sanpham->masanpham)->gia*$sanpham->soluong)."</td>
                                                        </tr>";
                                                            $subTotal += (new sanpham)->find($sanpham->masanpham)->gia*$sanpham->soluong;
                                                            $sale += $sanpham->giamgia;
                                                        }
                                                    $html .="
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                
                                    <div class='row'>
                                        <!-- accepted payments column -->
                                        <div class='col-md-6'>
                                            <p class='lead'>Phương thức thanh toán</p>
                                            <img src='public/production/images/visa.png' alt='Visa'>
                                        </div>
                                        <!-- /.col -->
                                        <div class='col-md-6'>
                                            <p class='lead'>Tóm Tắt Đơn Hàng</p>
                                            <div class='table-responsive'>
                                                <table class='table'>
                                                    <tbody>
                                                            <tr>
                                                                <th style='width:50%'>Thành tiền:</th>
                                                                <td>". number_format($subTotal)."  VNĐ</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Khuyến mãi</th>
                                                                <td>". number_format($sale) ."  VNĐ</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Phí giao hàng:</th>
                                                                <td>". number_format($donhang->phiship) ."  VNĐ</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Tổng cổng:</th>
                                                                <td>". number_format($subTotal+$donhang->phiship-$sale) ."  VNĐ</td>
                                                            </tr>
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                
                                    <!-- this row will not appear when printing -->
                                    <div class='row no-print'>
                                        <div style='width: 100%;'>
                                            <button class='btn btn-default col-9 text-left' onclick='window.print();'><i class='fa fa-print'></i> Print</button>
                                            <!-- <button class='btn btn-primary pull-right' style='margin-right: 5px;'><i class='fa fa-download'></i> Generate PDF</button> -->
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <!-- /page content -->
                        <!-- End SmartWizard Content -->
                    </div>
                </div>";
        echo json_encode(array('data'=>$html));
    }

    function destroy(){
        if($_GET['ma'])
        {
            $delete = (new donhang)->destroy($_GET['ma']);
            if($delete == true)
            {
                chuyentrang(href('donhang','index'),['msg'=>'Xóa đơn hàng thành công','status'=>'success']);
            }
        }
        chuyentrang(href('donhang','index'),['msg'=>'Xóa đơn hàng thất bại','status'=>'danger']);
    }

    function restore(){
        if($_GET['ma'])
        {
            $delete = (new donhang)->restore($_GET['ma']);
            if($delete == true)
            {
                chuyentrang(href('donhang','index'),['msg'=>'Khôi phục đơn hàng thành công','status'=>'success']);
            }
        }
        chuyentrang(href('donhang','index'),['msg'=>'Khôi phục đơn hàng thất bại','status'=>'danger']);
    }
}