<div class="row">
    <div class="col-12">


        <div class="x_title row">
            <div class="col-6">
                <h1>QUẢN LÝ SẢN PHẨM</h1>
            </div>
            <div class="col-6 d-flex align-items-center justify-content-end">
                <h2 onclick="ShowTrash()" class="btn btn-outline-danger" style="cursor: pointer;">Thùng rác</h2>
            </div>
        </div>

        <div id="list" style="display: block;">
            <div>
                <h2 class="text-primary font-weight-bold">DANH SÁCH SẢN PHẨM</h2>
            </div>
            <div class="table-responsive">
                <table id="datatable" class="table table-striped table-bordered">
                    <?php
                    if (isset($_SESSION['redirect_msg']) && $_SESSION['redirect_msg'] != null) {
                        if (isset($_SESSION['redirect_status'])) {
                            echo msg($_SESSION['redirect_msg'], $_SESSION['redirect_status']);
                            unset($_SESSION['redirect_status']);
                        }else
                        echo msg($_SESSION['redirect_msg']);
                        unset($_SESSION['redirect_msg']);
                    }
                    ?>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Tên sản phẩm</th>
                            <th>Slug</th>
                            <th>Loại sản phẩm</th>
                            <th>Nhà cung cấp</th>
                            <th>Ảnh đại diện</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($list as $value) {
                            ?>
                            <tr>
                                <th scope="row"><?= $value->id ?></th>
                                <td><?= $value->ten ?></td>
                                <td><?= $value->slug ?></td>
                                <td><?= $value->maloai?$loai->find($value->maloai)->ten:'' ?></td>
                                <td><?= $value->manhacungcap?$ncc->find($value->manhacungcap)->ten:'' ?></td>
                                <td><img style="width: 30px; height: 30px;" src="<?= asset($value->hinhdaidien) ?>" alt=""></td>
                                <td><?= number_format($value->gia)??0 ?></td>
                                <td><?= number_format($value->soluong)??0 ?></td>
                                <td>
                                    <a type="button" data-toggle="tooltip" data-placement="left" title="Chỉnh sửa" href="<?= href('sanpham', 'edit', ['id' => $value->id]) ?>"><i class="fa fa-cog"></i></a>
                                    <a type="button" data-toggle="tooltip" data-placement="left" title="Chuyển vào thùng rác" onclick="return confirm('Bạn có chắc muốn xóa dòng đã chọn')" href="<?= href('sanpham', 'delete', ['id' => $value->id]) ?>" class="text-danger"><i class="fa fa-trash"></i></a>
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
                            <th>Id</th>
                            <th>Tên sản phẩm</th>
                            <th>Slug</th>
                            <th>Loại sản phẩm</th>
                            <th>Nhà cung cấp</th>
                            <th>Ảnh đại diện</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
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
                                <td><?= $value->slug ?></td>
                                <td><?= $value->maloai?$loai->find($value->maloai)->ten:'' ?></td>
                                <td><?= $value->manhacungcap?$ncc->find($value->manhacungcap)->ten:'' ?></td>
                                <td><img style="width: 30px; height: 30px;" src="<?= asset($value->hinhdaidien) ?>" alt=""></td>
                                <td><?= $value->gia ?></td>
                                <td><?= $value->soluong ?></td>
                                <td>
                                    <a type="button" data-toggle="tooltip" data-placement="left" title="Khôi phục" onclick="return confirm('Bạn có chắc muốn khôi phục dòng đã chọn')" href="<?= href('sanpham', 'restore', ['id' => $value->id]) ?>"><i class="fa fa-recycle text-info"></i></a>
                                    <a type="button" data-toggle="tooltip" data-placement="left" title="Xóa vĩnh viễn" onclick="return confirm('Bạn có chắc muốn xóa vĩnh viễn dòng đã chọn')" href="<?= href('sanpham', 'destroy', ['id' => $value->id]) ?>"><i class="fa fa-trash text-danger"></i></a>
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
