<?php
include ("../common.php");
$l=$_GET['site'];
if (file_exists("/storage/emulated/0/Download/cookies.txt"))
 unlink ("/storage/emulated/0/Download/cookies.txt");
elseif (file_exists($base_cookie."cookies.txt"))
 unlink ($base_cookie."cookies.txt");
$firefox = $base_pass."firefox.txt";
$ua = $_SERVER['HTTP_USER_AGENT'];
file_put_contents($firefox,$ua);
header("Location: ".$l."");
exit();
?>
