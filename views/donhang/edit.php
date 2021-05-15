<div class="row">
    <div class="col-md-12">
        <!-- Smart Wizard -->
        <?php
        if (isset($msg) && $msg != null) {
            echo msg($msg);
        }
        ?>
        <!-- page content -->
        <div class="page-title">
            <div class="title_left">
                <h3>CHI TIẾT ĐƠN HÀNG</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="x_panel">
            <div class="x_content m-0">

                <section class="content invoice">
                    <!-- title row -->
                    <div class="row">
                        <div class="  invoice-header">
                            <h1 class="d-flex align-items-baseline">
                                <i class="fa fa-globe"></i>
                                <small class="pull-right">Hôm nay: <?= date('d/m/Y') ?></small>
                            </h1>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- info row -->
                    <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
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
                        <div class="col-sm-4 invoice-col">
                            Người nhận
                            <address>
                                <strong><?= $tableKhachHang->find($donhang->makhachhang)->ten??'' ?></strong>
                                <br><?= $tableKhachHang->find($donhang->makhachhang)->dia_chi??'' ?>
                                <br>Phone: <?= $tableKhachHang->find($donhang->makhachhang)->sdt??'' ?>
                                <br>Email: <?= $tableKhachHang->find($donhang->makhachhang)->email??'' ?>
                            </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                            <b>Số đơn hàng #<?= $donhang->sodonhang ?></b>
                            <br>
                            <b>Mã đơn hàng:</b> <?= $donhang->id ?>
                            <br>
                            <b>Ngày đặt hàng:</b> <?= date_format(date_create($donhang->ngaydat),"d/m/Y") ?>
                            <br>
                            <form method="POST" action="<?= href('donhang', 'edit', ['ma' => $donhang->id])?>">
                            <b>Theo dõi đơn hàng:</b>
                            <select name="trangthai" id="">
                                <?php
                                    $lsTrangThai = $tableTheoDoiDonHang->get();
                                    foreach($lsTrangThai as $value){
                                ?>
                                <option <?= $donhang->trangthai == $value->id ?'selected':'' ?> value="<?=$value->id??''?>"><?=$value->trangthai??''?></option>
                                <?php
                                    }
                                ?>
                            </select>
                            <button id="submitForm" type="submit" hidden></button>
                            <br>
                            <b>Trạng thái đơn hàng:</b>
                                <select name="trangthaidonhang" id="">
                                    <?php
                                        $lsTrangThai = $tableTrangThai->get();
                                        foreach($lsTrangThai as $value){
                                    ?>
                                    <option <?= $donhang->trangthaidonhang == $value->id ?'selected':'' ?> value="<?=$value->id??''?>"><?=$value->trangthai??''?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                                <button id="submitForm" type="submit" hidden></button>
                            </form>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- Table row -->
                    <div class="row">
                        <div class="  table">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Số lượng</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Mã sản phẩm #</th>
                                        <th style="width: 59%">Mô tả</th>
                                        <th>Tạm tính(VNĐ)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                    <?php
                                    $subTotal = 0;
                                    $sale = 0;
                                    $ship = 0;
                                        foreach($dsSanPham as $sanpham)
                                        {
                                    ?>
                                        <tr>
                                            <td><?= $sanpham->soluong??'' ?></td>
                                            <td><?= $tableSanPham->find($sanpham->masanpham)->ten??'' ?></td>
                                            <td><?= $sanpham->masanpham ?></td>
                                            <td><?= $tableSanPham->find($sanpham->masanpham)->mota??'' ?></td>
                                            <td><?= number_format($tableSanPham->find($sanpham->masanpham)->gia*$sanpham->soluong)??0 ?></td>
                                        </tr>
                                    <?php 
                                            $subTotal += $tableSanPham->find($sanpham->masanpham)->gia*$sanpham->soluong;
                                            $sale += $sanpham->giamgia;
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <!-- accepted payments column -->
                        <div class="col-md-6">
                            <p class="lead">Phương thức thanh toán</p>
                            <img src="public/production/images/visa.png" alt="Visa">
                            <img src="public/production/images/mastercard.png" alt="Mastercard">
                            <img src="public/production/images/paypal.png" alt="Paypal">
                            <!-- <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                                
                            </p> -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <p class="lead">Tóm Tắt Đơn Hàng</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                            <tr>
                                                <th style="width:50%">Thành tiền:</th>
                                                <td><?= number_format($subTotal)??0 ?> VNĐ</td>
                                            </tr>
                                            <tr>
                                                <th>Khuyến mãi</th>
                                                <td><?= number_format($sale)??0 ?> VNĐ</td>
                                            </tr>
                                            <tr>
                                                <th>Phí giao hàng:</th>
                                                <td><?= number_format($donhang->phiship)??0 ?> VNĐ</td>
                                            </tr>
                                            <tr>
                                                <th>Tổng cổng:</th>
                                                <td><?= number_format($subTotal+$donhang->phiship-$sale)??0 ?> VNĐ</td>
                                            </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- this row will not appear when printing -->
                    <div class="row no-print">
                        <div style="width: 100%;" class="d-flex">
                            <!-- <button class="btn btn-default col-4 text-left" onclick="window.print();"><i class="fa fa-print"></i> Print</button> -->
                            <div class="col-4"></div>
                            <label style="cursor: pointer;" for="submitForm" class="btn btn-success pull-right col-4"><i class="fa fa-check"></i>Cập Nhật đơn hàng</label>
                            <a class="col-4 w-100" href="<?= href('donhang','index') ?>"><label style="cursor: pointer;" for="Close" class="btn btn-secondary pull-right  w-100"></>  Thoát</label></a>
                            <!-- <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button> -->
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- /page content -->
        <!-- End SmartWizard Content -->
    </div>
</div>