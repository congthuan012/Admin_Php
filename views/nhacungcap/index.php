<div class="row">
    <div class="col-12">

        <div class="x_title row">    
            <div class="col-6">
                <h1>QUẢN LÝ NHÀ CUNG CẤP</h1>
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
            }
            else
                echo msg($_SESSION['redirect_msg']);
            unset( $_SESSION['redirect_msg']);
        }
        ?>
        

        <div id="list" style="display: block;">
            <div>
                <h2 class="text-primary font-weight-bold">DANH SÁCH NHÀ CUNG CẤP</h2>
            </div>
            <div class="table-responsive">
                <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Mã nhà cung cấp</th>
                            <th>Tên nhà cung cấp</th>
                            <th>Trạng thái</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($dsNhaCungCap as $value) {
                            ?>
                            <tr>
                                <th scope="row"><?= $value->id ?></th>
                                <td><?= $value->ten ?></td>
                                <td>
                                    <?php

                                    switch($value->trangthai)
                                    {
                                        case 1:
                                        echo '<span class="badge badge-success">Kích hoạt</span>';
                                        break;
                                        case 2:
                                        echo '<span class="badge badge-danger">Khóa</span>';
                                        break;
                                    }
                                    ?>
                                </td>
                                <td>
                                    <a type="button" data-toggle="tooltip" data-placement="left" title="Chuyển vào thùng rác" onclick="return confirm('Bạn chắc có muốn xóa dòng đã chọn?')" href="<?= href('nhacungcap', 'delete', ['id' => $value->id]) ?>"><i style="font-size: 20px" class="fa fa-trash text-danger"></i></a></a>
                                    <a type="button" data-toggle="tooltip" data-placement="left" title="Chỉnh sửa" href="<?= href('nhacungcap', 'edit', ['id' => $value->id]) ?>"><i style="font-size: 20px" class="fa fa-cog text-info"></i></a></a>
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
                            <th>Mã nhà cung cấp</th>
                            <th>Tên nhà cung cấp</th>
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
                                <td><?= $value->ten ?></td>
                                <td>
                                    <?php

                                    switch($value->trangthai)
                                    {
                                        case 1:
                                        echo '<span class="badge badge-success">Kích hoạt</span>';
                                        break;
                                        case 2:
                                        echo '<span class="badge badge-danger">Khóa</span>';
                                        break;
                                    }
                                    ?>
                                </td>
                                <td>
                                    <a type="button" data-toggle="tooltip" data-placement="left" title="Chuyển vào thùng rác" onclick="return confirm('Bạn chắc có muốn xóa vĩnh viễn dòng đã chọn?')" href="<?= href('nhacungcap', 'destroy', ['id' => $value->id]) ?>"><i style="font-size: 20px" class="fa fa-trash text-danger"></i></a></a>
                                    <a type="button" data-toggle="tooltip" data-placement="left" title="Khôi phục" onclick="return confirm('Bạn chắc có muốn khôi phục dòng đã chọn?')" href="<?= href('nhacungcap', 'restore', ['id' => $value->id]) ?>"><i style="font-size: 20px" class="fa fa-recycle text-info"></i></a></a>
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