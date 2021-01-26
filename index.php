<?php include 'vendor/config.php';

$db = new Getdatabase;
$conn = $db ->getConnection();
$lang_arr = array("vi","en");
    if (isset($_GET['lang']) == true){

      if (in_array($_GET['lang'], $lang_arr)==true) $lang = $_GET['lang'];

    }

    elseif (isset($_SESSION['lang']) == true){

     if (in_array($_SESSION['lang'],$lang_arr) == true) $lang = $_SESSION['lang'];

    }else $lang= 'vi';

    $_SESSION['lang'] = 'vi';

    setcookie('lang' , $lang , time()+60*60*24*30);

    require_once "lang/lang_$lang.php";  
    ?>

<?php
include 'page/layouts/header.php';
include 'page/layouts/navmenu.php';
include 'page/layouts/main.php';
include 'page/layouts/footer.php';
?>