<div class="row">
    <div class="col-12">
        <!-- Smart Wizard -->
        <h3>THÊM SẢN PHẨM</h3>
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
        <div id="wizard" class="form_wizard wizard_horizontal">
            <div id="step-1">
                <form method="POST" class="form-horizontal form-label-left" action="index.php?controller=sanpham&action=create">

                    <div class="row">
                        <div class="col-7">
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="ten">Tên sản phẩm<span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 ">
                                    <input type="text" name="ten" required="required" onchange="stralias('ten', 'slug')" id="ten" value="" class="form-control  ">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="slug">Slug<span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 ">
                                    <input type="text" name="slug"  required="required" value="" id="slug" class="form-control" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="tenrutgon  ">Tên rút gọn<span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 ">
                                    <input type="text" id="tenrutgon" name="tenrutgon"  value="" class="form-control  ">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Giá <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 ">
                                    <input type="number" id="last-name" name="gia" value="" required="required" class="form-control ">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Tiêu đề <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 ">
                                    <input type="text" id="last-name" name="tieude" value="" required="required" class="form-control ">
                                </div>
                            </div>
                            <input hidden name="created_at" value="<?= date("Y-m-d H:i:s"); ?>">
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Nhà cung cấp <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 ">
                                    <select name="manhacungcap" id="" class="form-control">
                                        <?php
                                        foreach ($dsNcc as $ncc) {
                                        ?>
                                            <option class="form-control" value="<?= $ncc->id ?>"><?= $ncc->ten ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Loại <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 ">
                                    <select name="maloai" id="" class="form-control">
                                        <?php
                                        foreach ($dsLoai as $loai) {
                                        ?>
                                            <option class="form-control" value="<?= $loai->id ?>"><?= $loai->ten ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="middle-name" class="col-form-label col-md-3 col-sm label-align">Trạng thái</label>
                                <div class="col-md-1 col-sm-1 " style="max-width: 35px;">
                                    <input id="middle-name" checked class="form-control form-check-input" value="1" type="checkbox" name="trangthai" style="width: 20px;margin-left: 1px;margin-top: 0px;">
                                </div>
                                <label for="middle-name" class="" style="display: flex;align-items: flex-end;margin-bottom: 4px;">Hiển thị</label>
                            </div>
                            <div class="form-group row">
                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Mô tả</label>
                                <div class="col-md-9 col-sm-6 ">
                                    <textarea id="middle-name" rows="5" class="form-control col" type="text" name="mota"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Số lượng <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 ">
                                    <input type="number" id="birthday" class="date-picker form-control" name="soluong" value="" type="text">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Mô tả chi tiết <span class="required">*</span>
                                </label>
                                <div class="col-md-9">
                                    <textarea name="motachitiet" id="editor"></textarea>
                                    <script>
                                        CKEDITOR.replace('editor')
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-group row">
                                <div class="col-md-12 col-sm-12 ">
                                    <img width="350" height="350" src="" />
                                    <input class="" type="hidden" name="hinhdaidien" value="" id="hinh1" />
                                    <button type="button" class="mt-3 btn btn-outline-success" onclick="openfile('hinh1')">Chọn file</button>
                                    <hr>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 col-sm-3 text-right">
                                    <button style="width: 100px;" type="submit" class="btn btn-primary">Lưu</button>
                                </div>
                                <div class="col-md-6 col-sm-6 ">
                                    <a style="width: 100px;" href="<?= href('sanpham', 'index') ?>" class="btn btn-secondary">Hủy Bỏ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Ảnh đại diện <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-6 ">
                            <input id="birthday" class="date-picker form-control" name="hinhdaidien" value="<?= $item->hinhdaidien ?? '' ?>" required="required" type="text">
                        </div>
                    </div> -->
                </form>

            </div>

        </div>
        <!-- End SmartWizard Content -->
    </div>
</div>