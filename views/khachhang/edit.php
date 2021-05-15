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
                <form method="POST" class="form-horizontal form-label-left" enctype="multipart/form-data" action="index.php?controller=customer&action=edit&id=<?=$chitiet->id?>">

                    <div class="row">
                        <div class="col-md-9">
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="ten">Tên Khách hàng<span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 ">
                                    <input type="text" id="ten" name="ten" required="required" value="<?= $chitiet->ten ?>" class="form-control  ">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Email <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 ">
                                    <input type="text" id="email" name="email" value="<?= $chitiet->email ?>" required="required" class="form-control ">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="sdt">sdt <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 ">
                                    <input type="number" id="sdt" name="sdt" value="<?= $chitiet->sdt ?>" required="required" class="form-control ">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Địa chỉ</label>
                                <div class="col-md-9 col-sm-6 ">
                                    <input id="middle-name" rows="5" class="form-control col" value="<?= $chitiet->dia_chi ?>" type="text" name="dia_chi">
                                </div>
                            </div>
                            <input hidden name="updated_at" value="<?= date("Y-m-d H:i:s"); ?>">
                            <div class="form-group row">
                                <label for="trangthai" class="col-form-label col-md-3 col-sm-3 label-align">Trạng thái</label>
                                <div class="col-md-9 col-sm-6 d-flex align-items-center justify-content-start">
                                    <select name="trangthai" class="form-control" id="">
                                        <option value="1">Kích hoạt</option>
                                        <option value="2">khóa</option>
                                        <option value="3">Spam</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group row">
                                <div class="col-md-12 col-sm-12 ">
                                    <img width="175" height="175" src="<?= asset($chitiet->avt) ?>">
                                    <input class="" type="hidden" name="avt" value=" <?= $chitiet->avt ?>" id="hinh1">
                                    <br>
                                    <button type="button" class="mt-3 btn btn-outline-success" onclick="openfile('hinh1')">Chọn file</button>
                                </div>
                            </div>
                        </div>
                    </div>
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