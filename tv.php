<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>
<meta http-equiv="Pragma" content="no-cache"/>
<meta http-equiv="Expires" content="0"/>
      <title>Live TV</title>
<link rel="stylesheet" type="text/css" href="custom.css" />
<style>
td {
    font-style: bold;
    font-size: 20px;
    text-align: left;
}
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script type="text/javascript">
function ajaxrequest(link) {
  var request =  new XMLHttpRequest();
  var the_data = "file=" + link;
  var php_file="tv/playlist_del.php";
  request.open("POST", php_file, true);			// set the request

  // adds a header to tell the PHP script to recognize the data as is sent via POST
  request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  request.send(the_data);		// calls the send() method with datas as parameter

  // Check request status
  // If the response is received completely, will be transferred to the HTML tag with tagID
  request.onreadystatechange = function() {
    if (request.readyState == 4) {
       alert (request.responseText);
       location.reload();
    }
  }
}
function isValid(evt) {
    var charCode = (evt.which) ? evt.which : evt.keyCode,
    self = evt.target;
    if  (charCode == "49") {
      id = "fav_" + self.id;
      val_fav=document.getElementById(id).value;
      ajaxrequest(val_fav);
    }
    return true;
}
$(document).on('keyup', '.imdb', isValid);
</script>
</head>
<BODY>
<BR><BR>
<table border="1" align="center" width="90%">
<TR>
<th class="cat" colspan="4">Live TV şi emisiuni TV</Th>
</TR>
<TR>
<TD width="25%"><a href="tv/digi.php" target="_blank">digi-online</a></TD>
<!--<TD width="25%"><a href="tv/playlist.php?title=TVR.m3u" target="_blank">TVR Live</a></TD>-->
<TD width="25%"><a href="tv/tvrlive.php" target="_blank">TVR Live</a></TD>
<TD width="25%"><a href="tv/protvplus_main.php" target="_blank">protvplus</a></TD>
<TD width="25%"><a href="tv/tvrstiri.php" target="_blank">TVR - Stiri</a></TD>

</TR>
<TR>
<TD width="25%"><a href="tv/digi24.php" target="_blank">Digi24 - Stiri</a></TD>
<TD width="25%"><a href="tv/digi24_main.php" target="_blank">Digi24 - Emisiuni</a></TD>
<TD width="25%"><a href="tv/digisport.php?page=1,https://www.digisport.ro/video,DigiSport" target="_blank">DigiSport</a></TD>
<TD width="25%"><a href="tv/protv_stiri.php?page=1,,PROTV" target="_blank">PROTV</a></TD>
</TR>
<TR>
<TD width="25%"><a href="tv/privesc.php?page=1&link=https://www.privesc.eu/arhiva/categorii/Toate&title=privesc.eu" target="_blank">privesc.eu</a></TD>
<TD width="25%"><a href="tv/b1_main.php?page=1&link=&title=B1TV" target="_blank">B1 Emisiuni</a></TD>
<TD width="25%"><a href="tv/adevarul.php?page=1&link=https://adevarul.ro/video-center/&title=Toate" target="_blank">Adevarul.ro</a></TD>
<TD width="25%"><a href="tv/tvrplus_main.php" target="_blank">TVR+ (Emisiuni)</a></TD>
</TR>
<TR>
<TD width="25%"><a href="tv/protvmd.php?page=1,,ProTV Moldova" target="_blank">PROTV Moldova</a></TD>
<TD width="25%"><a href="tv/moldova-in-direct.php" target="_blank">Moldova in Direct</a></TD>
<TD width="25%"><a href="tv/inprofunzime.php?page=1,,IN+PROfunzime" target="_blank">IN PROfunzime</a></TD>
<TD width="25%"><a href="tv/teleon_main.php" target="_blank">teleon.tv</TD>
</TR>
<TR>
<TD width="25%"><a href="filme/youtube_fav.php" target="_blank">youtube</a></TD>
<TD width="25%"><a href="filme/yt_playlist.php?token=&id=UCANDAWMJQsxMlaDMGlCdKpg&kind=channel&title=DanceTelevision&image=https://yt3.ggpht.com/-K4rbFp56pRQ/AAAAAAAAAAI/AAAAAAAAAAA/UKcWkGWWeOU/s88-c-k-no-mo-rj-c0xffffff/photo.jpg" target="_blank">Dance Television</a></TD>
<TD width="25%"><a href="filme/youtube_live.php?token=&search=" target="_blank">youtube live</a></TD>
<TD width="25%"><a href="filme/facebook1_fav.php" target="_blank">facebook</a></TD>
</TR>
<TR>
<TD width="25%"><a href="tv/tvrplus_youtube.php?page=1,,TVR+" target="_blank">TVR+ (youtube)</a></TD>
<TD width="25%"><a href="filme/starea_natiei.php" target="_blank">Starea Natiei</a></TD>
<TD width="25%"><a href="filme/yt_playlist.php?token=&id=UC6Sn1XzRBCBl8UMyAb8_5PA&kind=channel&title=%28channel%29+PrimaTV+Romania&image=https://yt3.ggpht.com/-hMQUv-XEccM/AAAAAAAAAAI/AAAAAAAAAAA/Tek8sw-tzhU/s88-c-k-no-mo-rj-c0xffffff/photo.jpg" target="_blank">PrimaTV</a></TD>
<TD width="25%"></TD>
</TR>

<TR>
<TD width="25%"><a href="tv/iptv.php" target="_blank">IPTV International</a></TD>
<TD width="25%"><a href="tv/playlist.php?title=Sport+IPTV&link=https://iptv-org.github.io/iptv/categories/sport.m3u" target="_blank">Sport IPTV</a></TD>
<TD width="25%"><a href="tv/digifree.php" target="_blank">Digi Sport (Live)</a></TD>
<TD width="25%"></TD>
</TR>
<?php
include ("common.php");
$list = glob($base_sub."*.srt");
foreach ($list as $l) {
    str_replace(" ","%20",$l);
     unlink($l);
}
if (file_exists($base_pass."tvplay.txt")) {

echo '
<TR>
<TD width="25%"></TD>
<TD width="25%"></TD>
<TD width="25%"></TD>
<TD width="25%"></TD>
</TR>
';
}
?>
<!--
<TR>
<TD width="25%"><a href="tv/arconaitv.php" target="_blank">arconaitv</a></TD>
<TD width="25%"><a href="http://hdforall.000webhostapp.com/live/privesc.php?page=1" target="_blank">privesc.eu (alt)</a></TD>
<TD width="25%"></TD>
<TD width="25%"></TD>
</TR>
-->
</table>
<BR>
<table border="1" align="center" width="90%">
<TR>
<th class="cat" colspan="4">My Playlist</Th>
</TR>
<TR>
<?php
//include ("common.php");
$list = glob($base_sub."*.srt");
   foreach ($list as $l) {
    str_replace(" ","%20",$l);
    unlink($l);
}
$n=0;
$w=0;
if (file_exists($base_pass."tastatura.txt")) {
$tast=trim(file_get_contents($base_pass."tastatura.txt"));
} else {
$tast="NU";
}
$out="";
$base="tv/pl/";
$list = glob($base."*.m3u");
   foreach ($list as $l) {
    //$l = str_replace(" ","%20",$l);
    $title =  basename($l);
    if ($title <> "TVR.m3u") {
    $out=$out."#EXTINF:-1, ".$title."\n"."http://hdforall.000webhostapp.com/live/".$title."\n";
    $link="tv/playlist.php?title=".urlencode($title);
    if ($tast == "NU")
    echo '<td align="center" width="25%"><a href="'.$link.'" target="_blank">'.$title.'</a> <a onclick="ajaxrequest('."'".$title."'".')" style="cursor:pointer;">*</a></TD>';
    else
    echo '<td align="center" width="25%"><a class ="imdb" id="myLink'.($w*1).'" href="'.$link.'" target="_blank">'.$title.'<input type="hidden" id="fav_myLink'.($w*1).'" value="'.$title.'"></a></TD>';
    $n++;
    $w++;
    }
  if ($n == 4) {
  echo '</tr>';
  $n=0;
  }
}
//echo $out;
?>
</TABLE>

<?php
if (!$list || count($list) == 1) {
echo '
<table border="1" align="center" width="90%"><TR><TD>
Adaugati liste m3u cu streamuri live in directorul scripts/tv/pl.
Adaugati manual (copiere) sau de pe PC http://ip:8080/scripts/fm.php, unde "ip" este ip-ul dispozitivului pe care este instalat HD4ALL<BR>Apasati tasta 1 pentru a sterge playlist-ul selectat</TD></TR></TABLE>';
} else {
echo '
<table border="1" align="center" width="90%"><TR><TD>
Apasati tasta 1 pentru a sterge playlist-ul selectat</TD></TR></TABLE>';
}
echo '<BR><table border="1" align="center" width="90%"><TR><TD>';
echo 'Pentru vizionare stream-uri "acestream" instalati Ace Stream Media din Google Play sau de <a href="http://www.mediafire.com/file/8uyifuly87gbuwv/ace-stream-media-3-1-31-0.apk/file">aici</a>.<BR>
Setati la Output format pe "original".<BR>
Pentru stream-uri "sop" instalati Sopcast sau "sop to http" recomandat versiunea 5.41.<BR>
Puteti descarca de <a href="http://www.mediafire.com/file/d9s46xoewb604ds/Sop_to_Http-5.41.apk/file">aici.</a>.<BR>
Debifati "auto restart player".</TD></TR></TABLE>';
?>
</BODY>
</HTML>
