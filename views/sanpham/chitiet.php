<div class="row">
    <div class="col-12">
        <!-- Smart Wizard -->
        <h3>CẬP NHẬT SẢN PHẨM</h3>
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
        <div id="wizard" class="form_wizard wizard_horizontal">
            <div id="step-1">
                <form method="POST" class="form-horizontal form-label-left" action="index.php?controller=sanpham&action=edit&id=<?= $item->id ?? '' ?>">

                    <div class="row">
                        <div class="col-7">
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="ten">Tên sản phẩm<span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 ">
                                    <input type="text" id="ten" name="ten" onchange="stralias('ten', 'slug')" required="required" value="<?= $item->ten ?? '' ?>" class="form-control  ">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="slug">Slug<span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 ">
                                    <input type="text" name="slug"  required="required" value="<?= $item->slug ?? '' ?>" id="slug" class="form-control" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="tenrutgon  ">Tên rút gọn<span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 ">
                                    <input type="text" id="tenrutgon" name="tenrutgon" required="required" value="<?= $item->tenrutgon ?? '' ?>" class="form-control  ">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Giá <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 ">
                                    <input type="text" id="last-name" name="gia" value="<?= $item->gia ?? '' ?>" required="required" class="form-control ">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Tiêu đề <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 ">
                                    <input type="text" id="last-name" name="tieude" value="<?= $item->tieude ?? '' ?>" required="required" class="form-control ">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Nhà cung cấp <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 ">
                                    <select name="manhacungcap" id="" class="form-control">
                                        <?php
                                        foreach ($dsNcc as $ncc) {
                                        ?>
                                            <option class="form-control" <?php if ($item->manhacungcap == $ncc->id) echo 'selected'; ?> value="<?= $ncc->id ?>"><?= $ncc->ten ?></option>
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
                                            <option class="form-control" <?php if ($item->maloai == $loai->id) echo 'selected'; ?> value="<?= $loai->id ?>"><?= $loai->ten ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Mô tả</label>
                                <div class="col-md-9 col-sm-6 ">
                                    <textarea id="middle-name" rows="5" class="form-control col" type="text" name="mota"><?= $item->mota ?? '' ?></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Số lượng <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 ">
                                    <input id="birthday" class="date-picker form-control" name="soluong" value="<?= $item->soluong ?? '' ?>" required="required" type="text">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Mô tả chi tiết <span class="required">*</span>
                                </label>
                                <div class="col-md-9">
                                    <textarea name="motachitiet" id="editor"><?= $item->motachitiet ?></textarea>
                                    <script>
                                        CKEDITOR.replace('editor')
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-group row">
                                <div class="col-md-12 col-sm-12 ">
                                    <img width="350" height="350" src="<?= asset($item->hinhdaidien) ?>" />
                                    <input class="" type="hidden" name="hinhdaidien" value="<?= $item->hinhdaidien ?>" id="hinh1" />
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