<?php
// Lênh SQL lấy danh sách note theo ID user
$sql_get_data_list_note = "SELECT * FROM notes WHERE user_id = '$data_user[id_user]' ORDER BY id_note DESC";
$data=[];
// Nếu có
if($db
   ->num_rows($sql_get_data_list_note))
{
  // Lay danh sách ghi chú
  $data=$db
   ->fetch_assoc($sql_get_data_list_note,0);
}

// Ngược lại không có
else {
// Hiển thị thông báo
echo '
<div class="alert alert-info">Hiện tại bạn chưa có note nào.</div>';
}

?>