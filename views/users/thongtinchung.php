<div class="row w-100">
  <div class="col-12" style="left: 40%;">
    <img style="border-radius: 50%; border: 5px solid #10a6ad73;" width="263" src="<?= $user->avt ?>" alt="">
    <div class="container mt-2 ml-0" style="width: 500px;">
      <div class="form-group row">
        <label for="ten" class="col-sm-4 col-form-label">Tên</label>
        <div class="col-sm-8">
          <label for="ten" class="col-sm-4 col-form-label"><?= $user->ten ?></label>
        </div>
      </div>

      <div class="form-group row">
        <label for="tendangnhap" class="col-sm-4 col-form-label">Tên đăng nhập</label>
        <div class="col-sm-8">
          <label for="ten" class="col-sm-4 col-form-label"><?= $user->tendangnhap ?></label>
        </div>
      </div>

      <?php
      $pass = '';
      for ($i = strlen($user->tendangnhap); $i >= 0; $i--) {
        $pass .= '*';
      }
      ?>

      <div class="form-group row">
        <label for="ten" class="col-sm-4 col-form-label">Mật khẩu</label>
        <div class="col-sm-8">
          <label for="ten" class="col-sm-4 col-form-label"><?= $pass ?></label>
        </div>
      </div>

      <div class="form-group row">
        <label for="ten" class="col-sm-4 col-form-label">Tên đăng nhập</label>
        <div class="col-sm-8">
          <label for="ten" class="col-sm-4 col-form-label"><?= (new nhom)->find($user->manhom)->ten ?></label>
        </div>
      </div>

      <div class="form-group row">
        <label for="ten" class="col-sm-4 col-form-label">Ngày gia nhập</label>
        <div class="col-sm-8">
          <label for="ten" class="col-sm-4 col-form-label"><?= date_format(date_create($user->ngaytao),'d/m/Y') ?></label>
        </div>
      </div>

    </div>
  </div>
</div>