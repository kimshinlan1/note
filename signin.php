<?php
  include "core/init.php";

// Các biến chứa code JS về thông báo
$show_alert = "<script>$('#formSignin .alert').removeClass('hidden');</script>";
$hide_alert = "<script>$('#formSignin .alert').addClass('hidden');</script>";
$success_alert = "<script>$('#formSignin .alert').attr('class', 'alert alert-success');</script>";

$username=$_POST["username"];
$password=md5($_POST["password"]);

$sql_check_user_exist= "SELECT * FROM users WHERE username='$username'";
if($db->num_rows($sql_check_user_exist)){
  $sql_check_login="SELECT username FROM users WHERE username = '$username' AND password='$password'";
  if($db->num_rows($sql_check_login)){
    $session->send($username);
    $db->close();
    echo $show_alert.$success_alert."Login success.
    <script>location.reload();</script>";
  }else {
    echo $show_alert."Password incorrect";
  }
}else {
  echo "Account does not belong to any user";
}
?>