<!-- page content -->
<!-- top tiles -->

<div class="row w-100" style="display: inline-block;">
    <div class="tile_count">
        <div class="col-lg-3 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Tổng user</span>
            <div class="count"><?= count($users) ?></div>
        </div>
        <div class="col-lg-3  tile_stats_count">
            <span class="count_top"><i class="fa fa-cubes"></i> Tổng sản phẩm</span>
            <div class="count"><?= count($list) ?></div>
        </div>
        <div class="col-lg-3  tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Tổng đơn hàng</span>
            <div class="count green"><?= count($dsDonHang) ?></div>
        </div>
        <div class="col-lg-3  tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Tổng doanh thu <small>(VNĐ)</small></span>
            <div class="count"><?= number_format($doanhthu->tong) ?></div>
        </div>
    </div>
</div>