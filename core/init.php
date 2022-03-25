<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
// Include các thư viện
require_once './classes/DB.php';
require_once './classes/Session.php';
include "smarty/libs/Smarty.class.php";
$smarty = new Smarty;
// Khởi tạo object DB
$db = new DB();
// Kết nối database
$db->connect();
// Khởi tạo object Session
$session = new Session();
// Bắt đầu session
$session->start();
// Lấy dữ liệu session
$user = $session->get();
//if(isset($user)){
//  unset($user);}
// Múi giờ chung
date_default_timezone_set('Asia/Ho_Chi_Minh');
$date_current = '';
$date_current = date("Y-m-d H:i:sa");

// Nếu tồn tại $user
if (isset($user))
{
    // Lệnh truy vấn thông tin user
    $sql_get_data_user = "SELECT * FROM users WHERE username = '$user'";

    // Lấy thông tin user
    $data_user = $db->fetch_assoc($sql_get_data_user, 1);
}

?>