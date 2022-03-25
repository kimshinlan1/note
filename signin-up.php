<?php
// Include database, session, general info
require_once 'core/init.php';

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
$smarty->display("signin-up.tpl");



?>