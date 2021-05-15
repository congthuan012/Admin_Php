<div class="row">
    <div class="col-12">
        <!-- Smart Wizard -->
        <h3>THÊM Nhóm</h3>
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
                <form method="POST" class="form-horizontal form-label-left" enctype="multipart/form-data" action="index.php?controller=nhom&action=edit&id=<?= $item->id ?>">
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Tên nhóm<span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-6 ">
                                    <input type="text" id="first-name" name="ten" required="required" value="<?= $item->ten ?>" class="form-control  ">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Mô tả</label>
                                <div class="col-md-9 col-sm-6 ">
                                    <textarea id="middle-name" rows="5" class="form-control col" type="text" name="mota"><?= $item->mota ?></textarea>
                                </div>
                            </div>
                            <input hidden name="updated_at" value="<?= date("Y-m-d H:i:s"); ?>">
                            <div class="form-group row">
                                <label for="trangthai" class="col-form-label col-md-3 col-sm-3 label-align">Trạng thái</label>
                                <div class="col-md-9 col-sm-6 d-flex align-items-center justify-content-start">
                                    <input id="trangthai" style="height: 15px; max-width: 15px;" rows="5" <?= $item->trangthai==1?'checked':'' ?> value="1" class="form-control col" value="1" type="checkbox" name="trangthai">
                                    <p class="mb-0 ml-1">kích hoạt</p>
                                </div>
                            </div>

                            <div style="width: 100%;" class="form-group row d-flex justify-content-end">
                                <div class="text-right">
                                    <button style="width: 100px;" type="submit" class="btn btn-primary">Lưu</button>
                                </div>
                                <div class="">
                                    <a style="width: 100px;" href="<?= href('user', 'index') ?>" class="btn btn-secondary">Hủy Bỏ</a>
                                </div>
                            </div>

                    </div>

                </form>

            </div>

        </div>
        <!-- End SmartWizard Content -->
    </div>
</div>