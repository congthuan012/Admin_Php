<div class="row">
    <div class="col-12">
        <!-- Smart Wizard -->
        <h3>CẬP NHẬT USER</h3>
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
                <form method="POST" class="form-horizontal form-label-left" enctype="multipart/form-data" action="index.php?controller=user&action=edit&id=<?= $user->id ?>">

                    <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Tên User<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="first-name" name="ten" required="required" value="<?= $user->ten ?? '' ?>" class="form-control  ">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Tên đăng nhập <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="last-name" name="tendangnhap" value="<?= $user->tendangnhap ?? '' ?>" required="required" class="form-control ">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Mã nhóm</label>
                        <div class="col-md-6 col-sm-6 ">
                            <select name="manhom" class="form-control">
                                <?php
                                foreach ($dsNhom as $value) {
                                ?>
                                    <option <?= $value->id == $user->manhom ?'selected':'' ?> value="<?= $value->id ?>"><?= $value->ten ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="trangthai" class="col-form-label col-md-3 col-sm-3 label-align">Trạng thái</label>
                        <div class="col-md-9 col-sm-6 d-flex align-items-center justify-content-start">
                            <input id="trangthai" style="height: 15px; max-width: 15px;" rows="5" <?= $value->trangthai == 1 ? 'checked' : '' ?> class="form-control col" value="1" type="checkbox" name="trangthai">
                            <p class="mb-0 ml-1">kích hoạt</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Ảnh đại diện<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <img width="100" src="<?= $user->avt ?>" />
                            <input type="hidden" name="avt" value="<?= $user->avt ?>" id="hinh1" />
                            <button type="button" class="btn btn-outline-success" onclick="openfile('hinh1')">Chọn file</button>
                        </div>
                    </div>
                    <input type="" name="ngaycapnhat" value="<?= date('d/m/Y') ?>" hidden>
                    <div class="form-group row">
                        <div class="col-md-6 col-sm-3 text-right">
                            <button style="width: 100px;" type="submit" class="btn btn-primary">Lưu</button>
                        </div>
                        <div class="col-md-6 col-sm-6 ">
                            <a style="width: 100px;" href="<?= href('user', 'index') ?>" class="btn btn-secondary">Hủy Bỏ</a>
                        </div>
                    </div>
                </form>

            </div>

        </div>
        <!-- End SmartWizard Content -->
    </div>
</div>