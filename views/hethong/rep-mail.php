<div class="row">
    <div class="col-12">
        <!-- Smart Wizard -->
        <div class="d-flex justify-content-center">
        	<h3>TRẢ LỜI THƯ</h3>
        </div>
        <?php 
            if(isset($_SESSION['redirect_msg']) && $_SESSION['redirect_msg'] != null)
            {
                if(isset($_SESSION['redirect_status']))
                {
                    echo msg($_SESSION['redirect_msg'],$_SESSION['redirect_status']);
                    unset($_SESSION['redirect_status']);
                }else{
                	echo msg($_SESSION['redirect_msg']);
                }
                unset( $_SESSION['redirect_msg']);
            }
        ?>
        <div id="wizard" class="form_wizard wizard_horizontal">
            <div id="step-1">
                <form method="POST" class="form-horizontal form-label-left" action="index.php?controller=mail&action=reply&id=<?=$id?>">

                    <input type="text" hidden name="nguoi_tra_loi" value="<?=$_SESSION['login_id']?>">
                    <input type="text" hidden name="tra_loi" value="<?=$id?>">
                    <input type="text" hidden name="trangthai" value="1">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="form-group row">
                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Nội Dung Thư</label>
                                <div class="col-md-9 col-sm-6 ">
                                    <textarea rows="10" disabled class="form-control"><?=$mail->noi_dung?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Chủ đề</label>
                                <div class="col-md-9 col-sm-6 ">
                                    <input id="middle-name" rows="5" class="form-control col" value="" type="text" name="tieu_de">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Nội Dung Trả lời</label>
                                <div class="col-md-9 col-sm-6 ">
                                    <textarea rows="10" name="noi_dung" class="form-control"></textarea>
                                </div>
                            </div>
                            <input hidden name="created_at" value="<?= date("Y-m-d H:i:s"); ?>">
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