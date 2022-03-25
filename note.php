<?php
require_once "core/init.php";

if(!$user){
  header('Location: index.php');
}
 // var_dump($_POST);
$note_title=trim($_POST["note_title"]);
$note_body=trim($_POST["note_body"]);
$user_id = $data_user["id_user"];
$ac=$_POST["ac"];
// Các biến chứa code JS về thông báo
$show_alert = "<script>$('#formCreateNote .alert').removeClass('hidden');</script>";
$hide_alert = "<script>$('#formCreateNote .alert').addClass('hidden');</script>";
$success_alert = "<script>$('#formCreateNote .alert').attr('class', 'alert alert-success');</script>";
if(isset($ac)){
  if($ac=="create"){
  // Lệnh SQL tạo note
        $sql_create_note = "INSERT INTO notes VALUES (
            '',
            '$data_user[id_user]',
            '$note_title',
            '$note_body',
            '$date_current'
        )";
$db->query($sql_create_note);

  echo "Add note successfully";

     // Hiển thị thông báo và di chuyển đến trang edit của note vừa tạo
//echo "Tạo note thành công";
  }
}
?>