<!DOCTYPE html>
<?php
error_reporting(0);
include ("../common.php");
include ("../cloudflare.php");
$tit=unfix_t(urldecode($_GET["title"]));
$image=$_GET["image"];
$link=urldecode($_GET["link"]);
$tip=$_GET["tip"];
$year=$_GET['year'];
$sez=$_GET['sez'];
$last_good=$_GET['last'];
$host=parse_url($last_good)['host'];
/* ======================================= */
$width="200px";
$height="100px";
$fs_target="123stream_fs.php";
$has_img="no";
?>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="../custom.css" />
<title><?php echo $tit; ?></title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>

</head>
<body>
<?php

function str_between($string, $start, $end){
	$string = " ".$string; $ini = strpos($string,$start);
	if ($ini == 0) return ""; $ini += strlen($start); $len = strpos($string,$end,$ini) - $ini;
	return substr($string,$ini,$len);
}
echo '<h2>'.$tit.'</h2>';
if (preg_match("/(.*?) - Season\s+(\d+)/",$tit,$m)) {   //Nancy Drew - Season 1 (2019)
  $season=round($m[2]);
  $tit=trim($m[1]);
} elseif (preg_match("/(.*?) - S\s*(\d+)/",$tit,$m)) {   // Angel - S02
  $season=round($m[2]);
  $tit=trim($m[1]);
} else {
  $season=1;
}
  $rest = substr($tit, -6);
  if (preg_match("/\((\d+)\)/",$rest,$m)) {
   $year=$m[1];
   $tit=trim(str_replace($m[0],"",$tit));
  } else {
   $year="";
  }
$sez=$season;
$ua = $_SERVER['HTTP_USER_AGENT'];
$ua="Mozilla/5.0 (Windows NT 10.0; rv:70.0) Gecko/20100101 Firefox/70.0";
  $ua="Mozilla/5.0 (Windows NT 10.0; rv:63.0) Gecko/20100101 Firefox/63.0";
  $ch = curl_init($link);
  curl_setopt($ch, CURLOPT_USERAGENT, $ua);
  curl_setopt($ch,CURLOPT_REFERER,"https://123stream.be");
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION  ,1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER  ,1);  // RETURN THE CONTENTS OF THE CALL
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
  curl_setopt($ch, CURLOPT_TIMEOUT, 15);
  $html = curl_exec($ch);
  curl_close ($ch);
  preg_match_all("/href\=\"([http|https][\.\d\w\-\.\/\\\:\?\&\#\%\_\,\=]+)\"\s+class\=\"btn-eps first-ep last-ep\s*(active)?\"\>Episode\s*(\d+)/",$html,$m);
  //print_r ($m);
$n=0;
echo '<table border="1" width="100%">'."\n\r";
echo '<TR><td class="sez" style="color:black;background-color:#0a6996;color:#64c8ff;text-align:center" colspan="3">Sezonul '.($sez).'</TD></TR>';


$n=0;
for($k=count($m[1])-1;$k>=0;$k--) {
  $img_ep=$image;
  $season=$sez;
  $episod="";
  $ep_title="";
  $link = $m[1][$k];

  $title = $m[3][$k];
  $title=prep_tit($title);
  $ep_tit="";
  $episod=round($title);

  //Episode 00: Star Trek Shorts: Calypso  //Episode 5 - Prochnost     //Episode 001

  //print_r ($m);

  if ($ep_tit)
   $ep_tit_d=$season."x".$episod." ".$ep_tit;
  else
   $ep_tit_d=$season."x".$episod;

  if ($episod) {
  $link_f=$fs_target.'?tip=series&link='.urlencode($link).'&title='.urlencode(fix_t($tit)).'&image='.$img_ep."&sez=".$season."&ep=".$episod."&ep_tit=".urlencode(fix_t($ep_tit))."&year=".$year."&last=".$last_good;
   if ($n == 0) echo "<TR>"."\n\r";
   if ($has_img == "yes")
    echo '<TD class="mp" width="33%">'.'<a id="sez'.$sez.'" href="'.$link_f.'" target="_blank"><img width="'.$width.'" height="'.$height.'" src="'.$img_ep.'"><BR>'.$ep_tit_d.'</a></TD>'."\r\n";
   else
    echo '<TD class="mp" width="33%">'.'<a id="sez'.$sez.'" href="'.$link_f.'" target="_blank">'.$ep_tit_d.'</a></TD>'."\r\n";
   $n++;
   if ($n == 3) {
    echo '</TR>'."\n\r";
    $n=0;
   }
  }
  }
  if ($n < 3 && $n > 0) {
    for ($k=0;$k<3-$n;$k++) {
      echo '<TD></TD>'."\r\n";
    }
    echo '</TR>'."\r\n";
  }
echo '</table>';
?>
</body>
</html>