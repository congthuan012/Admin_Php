<div class="row">
    <div class="col-12">
        <!-- Smart Wizard -->
        <h3>THÊM LOẠI SẢN PHẨM</h3>
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
                <form method="POST" class="form-horizontal form-label-left" action="index.php?controller=loai&action=create">

                    <div class="row">
                        <div class="col-7">
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="ten">Tên loại sản phẩm<span class="required">*</span>
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
                            <input hidden name="created_at" value="<?= date("Y-m-d H:i:s"); ?>">
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="tieude">Tiêu đề<span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 ">
                                    <input type="text" id="tieude" name="tieude" required="required" value="" class="form-control  ">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="tukhoa">Từ khóa<span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 ">
                                    <input type="text" id="tukhoa" name="tukhoa" value="" required="required" class="form-control ">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Mô tả tìm kiếm</label>
                                <div class="col-md-9 col-sm-6 ">
                                    <textarea id="middle-name" rows="5" class="form-control col" type="text" name="motatimkiem"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Danh mục cha <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 ">
                                    <select name="macha" id="" class="form-control">
                                        <option value="" selected>Không có</option>
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
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Tên rút gọn <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 ">
                                    <input id="birthday" class="date-picker form-control" name="tenrutgon" value="" required="required" type="text">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Mô tả<span class="required">*</span>
                                </label>
                                <div class="col-md-9">
                                    <textarea name="mota" id="editor"></textarea>
                                    <script>
                                        CKEDITOR.replace('editor')
                                    </script>
                                </div>
                            </div>
                            <input hidden name="created_at" value="<?= date("Y-m-d H:i:s"); ?>">
                        </div>
                        <div class="col-5">
                            <div class="form-group row">
                                <div class="col-md-12 col-sm-12 ">
                                    <h3 class="mt-0">icon: </h3>
                                    <img width="250" height="250" src="" />
                                    <input class="" type="hidden" name="icon" value="" id="hinh1" />
                                    <button style="width: 56%;" type="button" class="mt-3 btn btn-outline-success" onclick="openfile('hinh1')">Chọn file</button>
                                    <hr>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12 col-sm-12 ">
                                    <h3 class="mt-0">Hình chia sẻ: </h3>
                                    <img width="250" height="250" src="" />
                                    <input class="" type="hidden" name="hinhchiase" value="" id="hinh2" />
                                    <button style="width: 56%;" type="button" class="mt-3 btn btn-outline-success" onclick="openfile('hinh2')">Chọn file</button>
                                    <hr>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 col-sm-3 text-right">
                                    <button style="width: 100%;" type="submit" class="btn btn-primary">Lưu</button>
                                </div>
                                <div class="col-md-6 col-sm-6 ">
                                    <a style="width: 100%;" href="<?= href('loai', 'index') ?>" class="btn btn-secondary">Hủy Bỏ</a>
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