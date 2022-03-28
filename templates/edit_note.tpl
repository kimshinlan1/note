 {extends file="layout.tpl"}
 {block name=body}
  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-primary">Chỉnh sửa note</h3>
            <div class="alert alert-info">Đã tạo vào ngày
            <?php
                // Hiển thị ngày tháng tạo
                echo $day_created.' tháng
                     '.$month_created.' năm
                     '.$year_created.' lúc
                     '.$hour_created.':'.$min_created;
            ?>
            </div>
            <form method="POST" onsubmit="return false;" id="formEditNote">
                <div class="form-group">
                    <label for="user_signin">Tiêu đề</label>
                    <input type="text" class="form-control" id="title_edit_note" value="{$data_note.title }">
</div>
<div class="form-group">
<label for="pass_signin">Nội dung</label>
<textarea class="form-control" id="body_edit_note" rows="5">     {$data_note.body}
</textarea>
</div>
<input type="hidden" value="{$data_note.id_note}" id="id_edit_note">
                <a href="index.php" class="btn btn-default">
                    <span class="glyphicon glyphicon-arrow-left"></span> Trở về
                </a>
                <button class="btn btn-danger pull-right" data-toggle="modal" data-target="#modalDeleteNote">
                    <span class="glyphicon glyphicon-trash"></span> Xoá
                </button>
                <button class="btn btn-primary" id="submit_edit_note">
                    <span class="glyphicon glyphicon-ok"></span> Lưu
                </button>
                <br><br>
                <div class="alert alert-danger hidden"></div>
            </form>
        </div>
    </div>
</div>
{/block}