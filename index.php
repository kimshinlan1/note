<?php
 include "core/init.php";
if($user){
  if(isset($_GET["ac"])){
    $ac=trim($_GET["ac"]);
    if($ac=="edit_note"){
 // Nếu có ID truyền vào
      if (isset($_GET['id']))
        {
            $get_id = trim($_GET['id']);
        if ($get_id != '')
            {
     // Lệnh truy vấn kiểm tra sự tồn tại và quyền sở hữu note
                $sql_check_id_exist = "SELECT id_note, user_id FROM notes WHERE user_id = '$data_user[id_user]' AND id_note = '$get_id'";

                // Nếu có tồn tại và thuộc quyền sở hữu
           if ($db->num_rows($sql_check_id_exist))
           {
      // Include template chỉnh sửa note
     require_once 'edit-note-form.php';
}
                // Ngược lại không tồn tại và không thuộc quyền sở hữu
else
{
                    // Hiển thị thông báo lỗi
echo '
                        <div class="container">
                            <div class="alert alert-danger">
                                Note này không tồn tại hoặc không thuộc quyền sở hữu của bạn.
                            </div>
                        </div>
                    ';
   }
 }
            // Ngược lại không có ID truyền vào
            else
            {
                header('Location: index.php'); // Di chuyển về trang chủ
            }
        }
    }else
     include "$ac.php";
  }

  // neu khong co action gi
  else {

    include "home.php";
  }

}else {
  include "signin-up.php";
}
//$smarty->assign(["user"=>1,"ac"=>$ac]);
//$smarty->display("index.tpl");
?>