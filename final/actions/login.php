<?
include_once('../config/init.php');

session_start();

if(!isset($_SESSION['user_id'])){
    header('Location: '.$BASE_URL .'pages/common/register.php');
}

header('Location: '.$BASE_URL .'pages/user/user_page.php');

?>