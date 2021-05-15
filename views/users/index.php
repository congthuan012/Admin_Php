<div class="row">
    <div class="col-12">

        <div class="x_title row">    
            <div class="col-6">
                <h1>QUẢN LÝ QUAN TRỊ VIÊN</h1>
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
                echo msg($_SESSION['redirect_msg'],$_SESSION['redirect_status']);
                unset($_SESSION['redirect_status']);

            }else{
                echo msg($_SESSION['redirect_msg']);
                unset( $_SESSION['redirect_msg']);
            }
        }
        ?>
        <div id="list" style="display: block;">
            <div>
                <h2 class="text-primary font-weight-bold">DANH SÁCH QUẢN TRỊ VIÊN</h2>
            </div>
            <div class="table-responsive">
                <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Mã user</th>
                            <th>Ảnh đại diện</th>
                            <th>Tên user</th>
                            <th>Tên đang nhập</th>
                            <th>Nhóm</th>
                            <th>Trạng thái</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($list as $value) {
                            ?>
                            <tr>
                                <th scope="row"><?= $value->id ?></th>
                                <td><img style="width: 30px; height: 30px;" src="<?= $value->avt??'public/assets/img/user.png' ?>" alt=""></td>
                                <td><?= $value->ten ?></td>
                                <td><?= $value->tendangnhap ?></td>
                                <td><?= (new nhom)->find($value->manhom)->ten ?></td>
                                <td>
                                    <?php

                                    switch($value->trangthai)
                                    {
                                        case 1:
                                        echo '<span class="badge badge-success">Kích hoạt</span>';
                                        break;
                                        case 2:
                                        echo '<span class="badge badge-warning">spam</span>';
                                        break;
                                        case 3:
                                        echo '<span class="badge badge-danger">Khóa</span>';
                                        break;
                                    }
                                    ?>
                                </td>
                                <td style="width: 120px">
                                    <a type="button" data-toggle="tooltip" data-placement="left" title="Chỉnh sửa" href="<?= href('user', 'edit', ['id' => $value->id]) ?>"><i style="font-size: 20px" class="fa fa-cog text-primary"></i></a>
                                    <a type="button" data-toggle="tooltip" data-placement="left" title="Chuyển vào thùng rác" onclick="return confirm('Bạn chắc có muốn xóa dòng đã chọn?')" href="<?= href('user', 'delete', ['id' => $value->id]) ?>"><i style="font-size: 20px" class="fa fa-trash text-danger"></i></a>
                                    <a type="button" data-toggle="tooltip" data-placement="left" title="Cấp quyền" href="<?=href('role','setrole',['id'=>$value->id])?>" ><i style="font-size: 20px" class="fa fa-sitemap text-info"></i></a>
                                    <a type="button" data-toggle="tooltip" data-placement="left" title="Reset mật khẩu" onclick="return confirm('Bạn chắc có muốn đặt lại mật khẩu cho quản trị đã chọn?')" href="<?=href('user','reset',['id'=>$value->id])?>" ><i style="font-size: 20px" class="fa fa-refresh text-warning"></i></a>
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
                            <th>Mã user</th>
                            <th>Ảnh đại diện</th>
                            <th>Tên user</th>
                            <th>Tên đang nhập</th>
                            <th>Nhóm</th>
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
                                <td><img style="width: 30px; height: 30px;" src="<?= $value->avt??'public/assets/img/user.png' ?>" alt=""></td>
                                <td><?= $value->ten ?></td>
                                <td><?= $value->tendangnhap ?></td>
                                <td><?= (new nhom)->find($value->manhom)->ten ?></td>
                                <td>
                                    <?php

                                    switch($value->trangthai)
                                    {
                                        case 1:
                                        echo '<span class="badge badge-success">Kích hoạt</span>';
                                        break;
                                        case 2:
                                        echo '<span class="badge badge-warning">spam</span>';
                                        break;
                                        case 3:
                                        echo '<span class="badge badge-danger">Khóa</span>';
                                        break;
                                    }
                                    ?>
                                </td>
                                <td style="width: 120px">
                                    <a type="button" data-toggle="tooltip" data-placement="left" title="Xóa vĩnh viễn" onclick="return confirm('Bạn chắc có muốn xóa dòng đã chọn?')" href="<?= href('user', 'destroy', ['id' => $value->id]) ?>"><i style="font-size: 20px" class="fa fa-trash text-danger"></i></a>
                                    <a type="button" data-toggle="tooltip" data-placement="left" title="Khôi phục" onclick="return confirm('Bạn chắc có muốn khôi phục dòng đã chọn?')" href="<?= href('user', 'restore', ['id' => $value->id]) ?>"><i style="font-size: 20px" class="fa fa-recycle text-info"></i></a>
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
