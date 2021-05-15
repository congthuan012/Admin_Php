<div class="row">
    <div class="col-md-12 col-sm-6  ">
        <?php
        $status ='';
        if (isset($_SESSION['redirect_msg']) && $_SESSION['redirect_msg'] != null) {
            if (isset($_SESSION['redirect_status'])) {
                $status = $_SESSION['redirect_status'];
                unset($_SESSION['redirect_status']);
            }
            echo msg($_SESSION['redirect_msg'], $status);
            unset($_SESSION['redirect_msg']);
        }
        ?>
        <div class="x_panel">
            <div class="x_title">
                <h2>Bảng quản lý đơn hàng</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Mã</th>
                            <th>Số đơn hàng</th>
                            <th>Tổng tiền</th>
                            <th>Phí ship</th>
                            <th>Ngày đặt</th>
                            <th>Theo dõi đơn hàng</th>
                            <th>Trạng thái đơn</th>
                            <th style="width: 90px;">Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($dsDonHang as $donHang) {
                        ?>
                            <tr>
                                <th scope="row"><?= $donHang->id ?></th>
                                <td><?= $donHang->sodonhang ?></td>
                                <td><?= number_format($donHang->tongtien)??0 ?></td>
                                <td><?= number_format($donHang->phiship)??0 ?></td>
                                <td><?= $donHang->ngaydat ?></td>
                                <?php

                                switch ($donHang->trangthai) {
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
                                switch ($donHang->trangthaidonhang) {
                                    case 1:
                                        $class2 = 'badge badge-secondary';
                                        break;
                                    case 2:
                                        $class2 = 'badge badge-success';
                                        break;
                                }
                                ?>
                                <td><span class="<?= $class ?? '' ?>"><?= (new theodoidonhang)->find($donHang->trangthai)->trangthai ?></span></td>
                                <td><span class="<?= $class2 ?? '' ?>"><?= (new trangthai)->find($donHang->trangthaidonhang)->trangthai ?></span></td>
                                <td>
                                    <a type="button" data-toggle="tooltip" data-placement="left" title="Chỉnh sửa" href="<?= href('donhang', 'edit', ['ma' => $donHang->id]) ?>" style="font-size: 20px" class="text-success"><i class="fa fa-cog"></i></a>
                                    <a type="button" data-toggle="tooltip" data-placement="left" title="Di chuyển vào thùng rác" onclick="return confirm('Bạn có chắc muốn xóa dòng đã chọn')" href="<?= href('donhang', 'delete', ['ma' => $donHang->id]) ?>" style="font-size: 20px" class="text-danger"><i class="fa fa-trash"></i></a>
                                    <a type="button" data-toggle="tooltip" data-placement="left" title="Xem chi tiết" style="color:#5A738E; cursor:pointer" class="btn-view text-warning" data-id="<?= $donHang->id ?>"><i class="fa fa-info-circle" style="font-size: 20px"></i></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
        <div class="x_panel">
            <div class="x_title">
                <h2 onclick="ShowTrash()" class="btn btn-outline-danger" style="cursor: pointer;">Thùng rác</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content" id="trash" style="display: none">

                <table id="datatable" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>stt</th>
                            <th>Số đơn hàng</th>
                            <th>Tổng tiền</th>
                            <th>Phí ship</th>
                            <th>Ngày đặt</th>
                            <th>Trạng thái đơn</th>
                            <th style="width: 88px;">Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if(isset($trashDonHang) && $trashDonHang) {
                            foreach ($trashDonHang as $trash) {
                        ?>
                        <tr>
                            <th scope="row"><?= $trash->id ?></th>
                            <td><?= $trash->sodonhang ?></td>
                            <td><?= $trash->tongtien ?></td>
                            <td><?= $trash->phiship ?></td>
                            <td><?= $trash->ngaydat ?></td>
                            <?php

                            switch ($trash->trangthai) {
                                case 0:
                                    $class = 'badge badge-danger';
                                    break;
                                case 1:
                                    $class = 'badge badge-warning';
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
                            switch ($trash->trangthaidonhang) {
                                case 1:
                                    $class2 = 'badge badge-secondary';
                                    break;
                                case 2:
                                    $class2 = 'badge badge-success';
                                    break;
                                }
                             }
                            ?>
                            <td><span class="<?= $class2 ?? '' ?>"><?= (new trangthai)->find($trash->trangthaidonhang)->trangthai ?></span></td>
                            <td>
                                <div class="d-flex justify-content-between">
                                    <a type="button" data-toggle="tooltip" data-placement="left" title="Xóa vĩnh viễn" onclick="return confirm('Bạn có chắc muốn xóa vĩnh viễn dòng đã chọn')" href="<?= href('donhang', 'destroy', ['ma' => $trash->id]) ?>" style="font-size: 20px"><i class="fa fa-trash text-danger"></i></a>
                                    <a type="button" data-toggle="tooltip" data-placement="left" title="Khôi phục" onclick="return confirm('Bạn có chắc muốn khôi phục dòng đã chọn')" href="<?= href('donhang', 'restore', ['ma' => $trash->id]) ?>" style="font-size: 20px"><i class="fa fa-recycle text-info"></i></a>
                                </div>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="margin-left: 14%;" role="document">
        <div class="modal-content" style="max-width: 1000px;width: max-content;">
            <div class="modal-header" style="max-width: 1000px;width: max-content;">
                <h5 class="modal-title" id="exampleModalLongTitle">CHI TIẾT ĐƠN HÀNG</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="max-width: 1000px;width: max-content;">
                <div class="row">
                    <div id="modal" class="col-md-12">
                    </div>
                </div>
            </div>
            <div class="modal-footer" style="max-width: 1000px;width: max-content;">
                <button type="button" onclick="close()" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
            </div>
        </div>
    </div>
</div>
<script>
    function close(){
        $('#exampleModalCenter').modal('hide');
    }
    $(function() {
        $('.btn-view').click(function() {
            $.ajax({
                url: '<?= href('donhang', 'detail') ?>',
                data: {'ma': $(this).data('id')},
                type: 'get',
                dataType: 'JSON',
                success: function(res) {
                    console.log(res);
                    $('#modal').html(res.data);
                    $('#exampleModalCenter').modal('show');
                },
                error: function(error) {
                    swal({
                        title: "Server Error!",
                        icon: "error",
                        button:false,
                        showConfirmButton: false,
                        timer: 1500
                    });
                    console.log(error.responseText);
                }
            });
        });
    });
</script>