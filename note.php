<?php
require_once "core/init.php";

if(!$user){
  header('Location: index.php');
}
$ac=$_POST["ac"];
// Các biến chứa code JS về thông báo
$show_alert = "<script>$('#formCreateNote .alert').removeClass('hidden');</script>";
$hide_alert = "<script>$('#formCreateNote .alert').addClass('hidden');</script>";
$success_alert = "<script>$('#formCreateNote .alert').attr('class', 'alert alert-success');</script>";
if(isset($ac)){
  if($ac=="create"){
     // var_dump($_POST);
$note_title=trim($_POST["note_title"]);
$note_body=trim($_POST["note_body"]);
$user_id = $data_user["id_user"];

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

elseif ($ac == 'edit')
{
	// Nhận dữ liệu và gán vào các biến đồng thời xử lý chuỗi
	$title_edit_note = $db->real_escape_string(@$_POST['title_edit_note']);
	$body_edit_note = $db->real_escape_string(@$_POST['body_edit_note']);
	$id_edit_note = $db->real_escape_string(@$_POST['id_edit_note']);

	$title_edit_note = trim(htmlentities($title_edit_note));
	$body_edit_note = trim(htmlentities($body_edit_note));
	$id_edit_note = trim(htmlentities($id_edit_note));


	// Lệnh SQL kiểm tra có tồn tại ID note
	$sql_check_id_exist = "SELECT id_note, user_id FROM notes WHERE user_id = '$data_user[id_user]' AND id_note = '$id_edit_note'";

	// Nếu có
	if ($db->num_rows($sql_check_id_exist))
	{
		// Lệnh SQL chỉnh sửa note
		$sql_edit_note = "UPDATE notes SET
			body = '$body_edit_note',
			title = '$title_edit_note'
			WHERE user_id = '$data_user[id_user]' AND id_note = '$id_edit_note'
		";
		// Thực thi truy vấn
		$db->query($sql_edit_note);
		// Giải phóng kết nối
		$db->close();

		// Hiển thị thông báo và tải lại trang
		echo $show_alert.$success_alert." Đã chỉnh sửa note
			<script>
				location.reload();
			</script>
		";
	}
	// Ngược lại không
	else
	{
		// Hiển thị thông báo lỗi
		echo $show_alert.'Bạn đã cố tình sửa chữa ID note, nhưng rất tiếc ID note này không tồn tại hoặc không thuộc quyền sở hữu của bạn.';
	}
}
  else if ($ac=="delete"){
    // Nhận dữ liệu và gán vào các biến đồng thời xử lý chuỗi
    $id_edit_note = $db->real_escape_string(@$_POST['id_edit_note']);
    $id_edit_note = trim(htmlentities($id_edit_note));

    // Các biến chứa code JS về thông báo
    $show_alert = "<script>$('#modalDeleteNote .alert').removeClass('hidden');</script>";
    $hide_alert = "<script>$('#modalDeleteNote .alert').addClass('hidden');</script>";
    $success_alert = "<script>$('#modalDeleteNote .alert').attr('class', 'alert alert-success');</script>";

    // Lệnh SQL kiểm tra có tồn tại ID note và thuộc quyền sở hữu
    $sql_check_id_exist = "SELECT id_note, user_id FROM notes WHERE user_id = '$data_user[id_user]' AND id_note = '$id_edit_note'";

    // Nếu có
    if ($db->num_rows($sql_check_id_exist))
    {
        // Lệnh SQL xoá note
        $sql_delete_note = "DELETE FROM notes WHERE user_id = '$data_user[id_user]' AND id_note = '$id_edit_note'";
        // Thực thi truy vấn
        $db->query($sql_delete_note);
        // Giải phóng kết nối
        $db->close();

        // Hiển thị thông báo và trở về trang chủ
        echo $show_alert.$success_alert." Xoá note thành công.
            <script>
                location.href = 'index.php';
            </script>
        ";
    }
    // Ngược lại không
    else
    {
        // Hiển thị thông báo lỗi
        echo $show_alert.'Bạn đã cố tình sửa chữa ID note, nhưng rất tiếc ID note này không tồn tại hoặc không thuộc quyền sở hữu của bạn.';
    }
  }
}
?>