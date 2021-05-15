<div class="row">
    <div class="col-12">
        <!-- Smart Wizard -->
        <h3>THÊM KHÁCH HÀNG</h3>
        <?php 
        $status ='';
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
                <form method="POST" class="form-horizontal form-label-left" enctype="multipart/form-data" action="index.php?controller=customer&action=create">

                    <div class="row">
                        <div class="col-md-9">
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="ten">Tên Khách hàng<span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 ">
                                    <input type="text" id="ten" name="ten" required="required" value="" class="form-control  ">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Email <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 ">
                                    <input type="text" id="email" name="email" value="" required="required" class="form-control ">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="password">Mật khẩu <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 ">
                                    <input type="password" id="password" name="password" value="" required="required" class="form-control ">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="sdt">sdt <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 ">
                                    <input type="number" id="sdt" name="sdt" value="" required="required" class="form-control ">
                                </div>
                            </div>
                            <input hidden name="created_at" value="<?= date("Y-m-d H:i:s"); ?>">
                            <div class="form-group row">
                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Địa chỉ</label>
                                <div class="col-md-9 col-sm-6 ">
                                    <input id="middle-name" rows="5" class="form-control col" value="" type="text" name="dia_chi">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="trangthai" class="col-form-label col-md-3 col-sm-3 label-align">Trạng thái</label>
                                <div class="col-md-9 col-sm-6 d-flex align-items-center justify-content-start">
                                    <input id="trangthai" style="height: 15px; max-width: 15px;" rows="5" checked class="form-control col" value="1" type="checkbox" name="trangthai"><p class="mb-0 ml-1">kích hoạt</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group row">
                                <div class="col-md-12 col-sm-12 ">
                                    <img width="175" height="175" src="public/assets/img/user.png">
                                    <input class="" type="hidden" name="avt" value="public/assets/img/user.png" id="hinh1">
                                    <br>
                                    <button type="button" class="mt-3 btn btn-outline-success" onclick="openfile('hinh1')">Chọn file</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Ảnh đại diện <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-6 ">
                            <input id="birthday" class="date-picker form-control" name="hinhdaidien" value="<?= $user->hinhdaidien ?? '' ?>" required="required" type="text">
                        </div>
                    </div> -->
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