<div class="row">
    <div class="col-12">

        <div class="x_title row">    
            <div class="col-6">
                <h1>QUẢN LÝ KHÁCH HÀNG</h1>
            </div>
            <div class="col-6 d-flex align-items-center justify-content-end">
                <h2 onclick="ShowTrash()" class="btn btn-outline-danger" style="cursor: pointer;">Thùng rác</h2>
            </div>
        </div>
        <?php 
        if(isset($_SESSION['redirect_msg']) && $_SESSION['redirect_msg'] != null)
        {
            if(isset($_SESSION['redirect_status']))
            {
                $status = $_SESSION['redirect_status'];
                unset( $_SESSION['redirect_status']);
            }
            echo msg($_SESSION['redirect_msg'],$status);
            unset( $_SESSION['redirect_msg']);
        }
        ?>
        <div id="list" style="display: block;">
            <div>
                <h2 class="text-primary font-weight-bold">DANH SÁCH KHÁCH HÀNG</h2>
            </div>
            <div class="table-responsive">
                <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Mã khách hàng</th>
                            <th>Ảnh đại diện</th>
                            <th>Tên khách hàng</th>
                            <th>Email</th>
                            <th>sdt</th>
                            <th>Địa chỉ</th>
                            <th>Trạng thái</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($dsKhachHang as $value) {
                            ?>
                            <tr>
                                <th scope="row"><?= $value->id ?></th>
                                <td><img style="width: 30px; height: 30px;" src="<?= asset($value->avt) ?>" alt=""></td>
                                <td><?= $value->ten ?></td>
                                <td><?= $value->email ?></td>
                                <td><?= $value->sdt ?></td>
                                <td><?= $value->dia_chi ?></td>
                                <td>
                                    <?php

                                    switch($value->trangthai)
                                    {
                                        case 1:
                                        echo '<span class="badge badge-success">Kích hoạt</span>';
                                        break;
                                        case 3:
                                        echo '<span class="badge badge-warning">spam</span>';
                                        break;
                                        case 2:
                                        echo '<span class="badge badge-danger">Khóa</span>';
                                        break;
                                    }
                                    ?>
                                </td>
                                <td>
                                    <a type="button" data-toggle="tooltip" data-placement="left" title="Chỉnh sửa" href="<?= href('customer', 'edit', ['id' => $value->id]) ?>"><i style="font-size: 20px" class="fa fa-cog text-info"></i></a>
                                    <a type="button" data-toggle="tooltip" data-placement="left" title="Chuyển vào thùng rác" onclick="return confirm('Bạn chắc có muốn xóa dòng đã chọn?')" href="<?= href('customer', 'delete', ['id' => $value->id]) ?>"><i style="font-size: 20px" class="fa fa-trash text-danger"></i></a>
                                    <a type="button" data-toggle="tooltip" data-placement="left" title="Đặt lại mật khẩu" onclick="return confirm('Bạn chắc có muốn đặt lại mật khẩu cho dòng đang chọn?')" href="<?= href('customer', 'reset', ['id' => $value->id]) ?>"><i style="font-size: 20px" class="fa fa-refresh text-warning"></i></a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div id="trash" style="display: none;">
            <div>
                <h2 class="text-danger font-weight-bold">THÙNG RÁC</h2>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Mã khách hàng</th>
                            <th>Ảnh đại diện</th>
                            <th>Tên khách hàng</th>
                            <th>Email</th>
                            <th>sdt</th>
                            <th>Địa chỉ</th>
                            <th>Trạng thái</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($trash as $value) {
                            ?>
                            <tr>
                                <th scope="row"><?= $value->id ?></th>
                                <td><img style="width: 30px; height: 30px;" src="<?= asset($value->avt) ?>" alt=""></td>
                                <td><?= $value->ten ?></td>
                                <td><?= $value->email ?></td>
                                <td><?= $value->sdt ?></td>
                                <td><?= $value->dia_chi ?></td>
                                <td>
                                    <?php

                                    switch($value->trangthai)
                                    {
                                        case 1:
                                        echo '<span class="badge badge-success">Kích hoạt</span>';
                                        break;
                                        case 3:
                                        echo '<span class="badge badge-warning">spam</span>';
                                        break;
                                        case 2:
                                        echo '<span class="badge badge-danger">Khóa</span>';
                                        break;
                                    }
                                    ?>
                                </td>
                                <td>
                                    <a type="button" data-toggle="tooltip" data-placement="left" title="Khôi phục" onclick="return confirm('Bạn chắc có muốn khôi phục dòng đã chọn?')"  href="<?= href('customer', 'restore', ['id' => $value->id]) ?>"><i style="font-size: 20px" class="fa fa-recycle text-info"></i></a>
                                    <a type="button" data-toggle="tooltip" data-placement="left" title="Xóa vĩnh viễn" onclick="return confirm('Bạn chắc có muốn xóa vĩnh viễn dòng đã chọn?')" href="<?= href('customer', 'destroy', ['id' => $value->id]) ?>"><i style="font-size: 20px" class="fa fa-trash text-danger"></i></a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
