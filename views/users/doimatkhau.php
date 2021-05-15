<div class="row">
    <div class="login_wrapper">
        <div class="animate form login_form" style="position: unset;">
            <section class="login_content">
                <form onsubmit="return valid()" method="post" action="index.php?controller=user&action=doimatkhau">
                    <h1>Đổi mật khẩu</h1>
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
                    <div>
                        <input type="password" class="form-control mb-0" placeholder="Mật khẩu cũ" id="password" name="password" required/>
                        <label style="display: none;" class="w-100 mb-0 password text-left text-danger">Mật khẩu không được bỏ trống</label>
                    </div>
                    <div class="mt-2">
                        <input type="password" class="form-control mb-0" placeholder="Mật khẩu mới" name="newpassword" id="newpassword" required />
                    </div>
                    <div class="mt-2">
                        <input type="password" class="form-control mb-0" placeholder="Xác nhận mật khẩu mới" id="cfpassword" name="cfpassword" required/>
                        <label style="display: none;" class="w-100 mb-0 newpassword text-left text-danger">Mật khẩu xác nhận phải giống mật khẩu mới</label>
                    </div>
                    <div class="mt-2">
                        <button type="submit"class="btn btn-success submit">Đổi mật khẩu</button>
                    </div>

                    <div class="clearfix"></div>

                </form>
            </section>
        </div>
    </div>
</div>

<script>
    function valid(){
        if($('#newpassword').val() == $('#newpassword').val() && $('#password').val() !=null)
        {
            return true;
        }
        $(".password").css("display", "block");
        $(".newpassword").css("display", "block");
        return false;
    }
</script>