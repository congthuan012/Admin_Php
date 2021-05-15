<div class="row">
    <div class="col-12">

        <div class="x_title row">
            <div class="col-6">
                <h1>QUẢN LÝ LOẠI SẢN PHẨM</h1>
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
                <h2 class="text-primary font-weight-bold">DANH SÁCH LOẠI SẢN PHẨM</h2>
            </div>
            <div class="table-responsive">
                <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Mã loại</th>
                            <th>icon</th>
                            <th>Tên loại</th>
                            <th>Slug</th>
                            <th>Mô tả</th>
                            <th>Danh mục cha</th>
                            <th>Trạng thái</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($dsLoai as $value) {
                            ?>
                            <tr>
                                <th scope="row"><?= $value->id ?></th>
                                <td><img style="width: 30px; height: 30px;" src="<?= asset($value->icon) ?>" alt=""></td>
                                <td><?= $value->ten ?></td>
                                <td><?= $value->slug ?></td>
                                <td><?= $value->mota ?></td>
                                <td><?= $loai->find($value->macha)->ten??'' ?></td>
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
                                <td>
                                    <a type="button" data-toggle="tooltip" data-placement="left" title="Chỉnh sửa" href="<?= href('loai', 'edit', ['id' => $value->id]) ?>"><i style="font-size: 20px" class="fa fa-cog text-info"></i></a>
                                    <a type="button" data-toggle="tooltip" data-placement="left" title="Chuyển vào thùng rác" onclick="return confirm('Bạn chắc có muốn xóa dòng đã chọn?')" href="<?= href('loai', 'delete', ['id' => $value->id]) ?>"><i style="font-size: 20px" class="fa fa-trash text-danger"></i></a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div id="trash" style="display: none" >
            <div>
                <h2 class="text-danger font-weight-bold">THÙNG RÁC</h2>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Mã loại</th>
                            <th>icon</th>
                            <th>Tên loại</th>
                            <th>Slug</th>
                            <th>Mô tả</th>
                            <th>Danh mục cha</th>
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
                                <td><img style="width: 30px; height: 30px;" src="<?= asset($value->icon) ?>" alt=""></td>
                                <td><?= $value->ten ?></td>
                                <td><?= $value->slug ?></td>
                                <td><?= $value->mota ?></td>
                                <td><?= $loai->find($value->macha)->ten??'' ?></td>
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
                                <td>
                                    <a type="button" data-toggle="tooltip" data-placement="left" title="Khôi phục" href="<?= href('loai', 'restore', ['id' => $value->id]) ?>"><i style="font-size: 20px" class="fa fa-recycle text-info"></i></a>
                                    <a type="button" data-toggle="tooltip" data-placement="left" title="Xóa vĩnh viễn" onclick="return confirm('Bạn chắc có muốn xóa vĩnh viễn dòng đã chọn?')" href="<?= href('loai', 'destroy', ['id' => $value->id]) ?>"><i style="font-size: 20px" class="fa fa-trash text-danger"></i></a>
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