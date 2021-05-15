<div class="row">
    <div class="col-12">
        <!-- Smart Wizard -->
        <h3>THÊM USER</h3>
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
                <form method="POST" class="form-horizontal form-label-left" enctype="multipart/form-data" action="index.php?controller=user&action=create">

                    <div class="row">
                        <div class="col-9">
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Tên User<span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 ">
                                    <input type="text" id="first-name" name="ten" required="required" value="" class="form-control  ">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Tên đăng nhập <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 ">
                                    <input type="text" id="last-name" name="tendangnhap" value="" required="required" class="form-control ">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="password">Mật khẩu <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 ">
                                    <input type="" id="password" name="matkhau" value="" required="required" class="form-control ">
                                </div>
                            </div>
                            <input hidden name="ngaytao" value="<?= date("Y-m-d H:i:s"); ?>">
                            <div class="form-group row">
                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">nhóm</label>
                                <div class="col-md-9 col-sm-6 ">
                                    <select name="manhom" class="form-control">
                                        <?php
                                        foreach ($dsNhom as $value) {
                                        ?>
                                            <option value="<?= $value->id ?>"><?= $value->ten ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="trangthai" class="col-form-label col-md-3 col-sm-3 label-align">Trạng thái</label>
                                <div class="col-md-9 col-sm-6 d-flex align-items-center justify-content-start">
                                    <input id="trangthai" style="height: 15px; max-width: 15px;" rows="5" checked value="1" class="form-control col" value="1" type="checkbox" name="trangthai">
                                    <p class="mb-0 ml-1">kích hoạt</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group row">
                                <div class="col-md-9 col-sm-6 ">
                                    <img width="222" height="222" src="public/assets/img/user.png" />
                                    <input type="hidden" name="avt" value="public/assets/img/user.png" id="hinh1" />
                                    <button type="button" class="mt-2 btn btn-outline-success" onclick="openfile('hinh1')">Chọn file</button>
                                </div>
                            </div>

                            <div style="width: 100%;" class="form-group row d-flex justify-content-end">
                                <div class="col-md-6 col-sm-3 text-right">
                                    <button style="width: 100%;" type="submit" class="btn btn-primary">Lưu</button>
                                </div>
                                <div class="col-md-6 col-sm-6 ">
                                    <a style="width: 100%;" href="<?= href('user', 'index') ?>" class="btn btn-secondary">Hủy Bỏ</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </form>

            </div>

        </div>
        <!-- End SmartWizard Content -->
    </div>
</div>