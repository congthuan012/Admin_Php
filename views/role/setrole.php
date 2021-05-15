<div class="row">
    <div class="col-sm-12">
        <header>
            <h3>Cấp quyền cho "<?= $user->tendangnhap ?>"</h3>
        </header>
        <section class="table-responsive">
            <?= $msg ?>
            <form action="" class="table d-flex mb-2" method="post">
                <input name="user" value="<?= $user->id ?>" type="hidden" />
                <ul class="d-flex nested" id="nested">
                <?php
                foreach ($functions as $func) {
                    $childs = $this->role->get_functions($func->id);
                    if ($childs) {
                        echo '<li style="list-style:none" class="border p-2 ml-2"><input class="parent"' . ($this->role->checked($func->id, $user->id) ? 'checked' : '') . ' name="funcs[]" value="' . $func->id . '" type="checkbox"/> ' . $func->ten . '
                        <ul>';
                        foreach ($childs as $funcchild) 
                        {
                            echo '<li style="list-style:none" class="inline"><input class="child" name="funcs[]" ' . ($this->role->checked($funcchild->id, $user->id) ? 'checked' : '') . ' value="' . $funcchild->id . '" type="checkbox"/> ' . $funcchild->ten . '</li>';
                        }
                        echo '</ul></li>';
                    } else {
                        echo '<li  style="list-style:none" class="border p-2 ml-2">
                        <input class="" name="funcs[]" ' . ($this->role->checked($funcchild->id, $user->id) ? 'checked' : '') . ' value="'.$func->id.'" type="checkbox" /> '.$func->ten.'
                        </li>';

                    }
                } ?>
                </ul>
                <button id="save" hidden class="btn btn-success">Ghi</button> 
            </form>
            <div class="d-flex justify-content-end">
                <a style="width: 200px" href="<?= href('user') ?>" class="btn btn-success">Bỏ qua</a>
                <label for="save" style="width: 200px; cursor: pointer;" class="btn btn-outline-info">Ghi</label>
            </div>
        </section>
    </div>
</div>

<style type="text/css">
    .inline label{
        margin-right: 10px;
        margin-left: 10px;
        align-items: center;
    }
</style>

<script type="text/javascript">
    $('.nested input[type=checkbox]').click(function () {
        $(this).parent().find('li input[type=checkbox]').prop('checked', $(this).is(':checked'));
        var sibs = false;
        $(this).closest('ul').children('li').each(function () {
            if($('input[type=checkbox]', this).is(':checked')) sibs=true;
        })
        $(this).parents('ul').prev().prop('checked', sibs);
    });
</script>