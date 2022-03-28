<?php
// Lệnh SQL lấy dữ liệu note theo ID
$sql_get_data_note = "SELECT * FROM notes WHERE user_id = '$data_user[id_user]' AND id_note = '$get_id'";
// Lấy dữ liệu
$data_note = $db->fetch_assoc($sql_get_data_note, 1);
$smarty->assign('data_note',$data_note);
?>