<!DOCTYPE html>
<?php
include ("common.php");
if (file_exists($base_pass."tastatura.txt")) {
$tast=trim(file_get_contents($base_pass."tastatura.txt"));
} else {
$tast="NU";
}
if (file_exists($base_pass."player.txt")) {
$flash=trim(file_get_contents($base_pass."player.txt"));
} else {
$flash="direct";
}
?>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>
<meta http-equiv="Pragma" content="no-cache"/>
<meta http-equiv="Expires" content="0"/>
      <title>Seriale</title>
<link rel="stylesheet" type="text/css" href="custom.css" />
<script src="//code.jquery.com/jquery-2.0.2.js"></script>
<style>
td {
    font-style: bold;
    font-size: 20px;
    text-align: left;
}
</style>
<script type="text/javascript">
   function zx(e){
     var charCode = (typeof e.which == "number") ? e.which : e.keyCode
     if (charCode == "50") {
      <?php
      if (file_exists($base_pass."tmdb.txt"))
       echo 'window.open("filme/search_tmdb.php?page=1");';
      else
       echo 'window.open("filme/search_imdb.php");';
      ?>
    }
   }
document.onkeypress =  zx;
</script>
</head>
<BODY>

<BR><BR>
<table id="data" border="1" align="center" width="90%">
<TR>
<th class="cat" colspan="4">Seriale online</Th>
</TR>
<TR>
<TD width="25%"><a href="filme/filmeseriale_main.php?page=1&tip=release&title=filmeseriale.online&link=" target="_blank">filmeseriale.online</a></TD>
<TD width="25%"><a href="filme/tvhub_s.php?page=1&tip=release&title=tvhub&link=" target="_blank">tvhub</a></TD>
<TD width="25%"><a href="filme/filmeonlinegratis_s.php?page=1&tip=release&title=filmeonlinegratis&link=" target="_blank">filmeonlinegratis</a></TD>
<TD width="25%"><a href="filme/filmeseriale_eu.php?page=1&tip=release&title=filmeseriale.eu&link=" target="_blank">filmeseriale.eu</a></TD>
</TR>
<TR>
<TD width="25%"><a href="filme/veziseriale_s.php?page=1&tip=release&title=veziseriale.info&link=" target="_blank">veziseriale.info</a></TD>
<TD width="25%"><a href="filme/diverse.php" target="_blank">diverse</a></TD>
<TD width="25%"><a href="filme/divxfilmeonline_s.php?page=1&tip=release&title=divxfilmeonline&link=" target="_blank">divxfilmeonline</a></TD>
<TD width="25%"><a href="filme/serialeonlinesubtitrate_s.php?page=1&tip=release&title=serialeonlinesubtitrate&link=" target="_blank">serialeonlinesubtitrate</a></TD>
</TR>
<TR>
<TD width="25%"><a href="filme/serialeonline.php?page=1&tip=release&title=serialeonline&link=" target="_blank">serialeonline</a></TD>
<TD width="25%"><a href="filme/fsgratis_s.php?page=1&tip=release&title=fsgratis&link=" target="_blank">fsgratis</a></TD>
<TD width="25%"><a href="filme/fsonline_s.php?page=1&tip=release&title=fsonline&link=" target="_blank">fsonline</a></TD>
<TD width="25%"><a href="filme/soap2day_ss.php" target="_blank">soap2day</a></TD>
</TR>

<TR>

</TR>
<!-- straine -->
<TR>
<TD width="25%"><a href="filme/tvseries_s.php?page=1&tip=release&title=tvseries&link=" target="_blank">tvseries</a></TD>
<TD width="25%"><a href="filme/gomovies_s.php?page=1&tip=release&title=gomovies&link=" target="_blank">gomovies</a></TD>
<TD width="25%"><a href="filme/123fmovies_s.php?page=1&tip=release&title=123fmovies&link=" target="_blank">123fmovies</a></TD>
<TD width="25%"><a href="filme/lookmovie_s.php?page=1&tip=release&title=lookmovie&link=" target="_blank">lookmovie</a></TD>
</TR>
<TR>
<TD width="25%"><a href="filme/swatchseries_s.php?page=1&tip=release&title=swatchseries&link=" target="_blank">swatchseries</a></TD>
<TD width="25%"><a href="filme/yifymovies_s.php?page=1&tip=release&title=yifymovies&link=" target="_blank">yifymovies</a></TD>
<TD width="25%"><a href="filme/cartoonhd_s.php?page=1&tip=release&title=cartoonhd&link=" target="_blank">cartoonhd</a></TD>
<TD width="25%"><a href="filme/cineplex_s_main.php" target="_blank">cineplex (cont)</a></TD>
</TR>
<TR>
<TD width="25%"><a href="filme/vumoo_s.php?page=1&tip=release&title=vumoo&link=" target="_blank">vumoo</a></TD>
<TD width="25%"><a href="filme/ling_s.php?page=1&tip=release&title=ling.online&link=" target="_blank">ling.online</a></TD>
<TD width="25%"><a href="filme/vidcloud9_s.php?page=1&tip=release&title=vidcloud9&link=" target="_blank">vidcloud9</a></TD>
<TD width="25%"><a href="filme/bmovies_s.php?page=1&tip=release&title=bmovies&link=" target="_blank">bmovies</a></TD>
</TR>

<TR>
<TD width="25%"></TD>
<TD width="25%"><a href="filme/gerryreid_s.php?page=1&tip=release&title=gerryreid&link=" target="_blank">gerryreid</a></TD>
<TD width="25%"><a href="filme/yesmovies_s.php?page=1&tip=release&title=yesmovies&link=" target="_blank">yesmovies</a></TD>
<TD width="25%"><a href="filme/anilist1_s_main.php" target="_blank">anilist1</a></TD>
</TR>

<TR>
<TD width="25%"><a href="filme/uniquestream_s.php?page=1&tip=release&title=uniquestream&link=" target="_blank">uniquestream</a></TD>
<TD width="25%"><a href="filme/5movies_s.php?page=1&tip=release&title=5movies&link=" target="_blank">5movies</a></TD>
<TD width="25%"><a href="filme/hulu_s.php?page=1&tip=release&title=hulu&link=" target="_blank">hulu</a></TD>
<TD width="25%"><a href="filme/flixtor_s.php?page=1&tip=release&title=flixtor&link=" target="_blank">flixtor</a></TD>
</TR>
<TR>
<TD width="25%"><a href="filme/9movies_s.php?page=1&tip=release&title=9movies&link=" target="_blank">9movies</a></TD>
<TD width="25%"></TD>
<TD width="25%"><a href="filme/streamlord_s.php?page=1&tip=release&title=streamlord&link=" target="_blank">streamlord</a></TD>
<TD width="25%"><a href="filme/goojara_s.php?page=1&tip=release&title=goojara&link=" target="_blank">goojara</a></TD>
</TR>

<?php
if (file_exists($base_pass."tvplay.txt")) {
echo '<TR>';
echo '<TD width="25%"><a href="filme/cineplex_s_main1.php" target="_blank">cineplex</a></TD>';
echo '<TD width="25%"></TD>';
echo '<TD width="25%"></TD>';
echo '<TD width="25%"></TD>';
echo '</TR>';
}
if (file_exists($base_pass."debug.txt")) {
if (file_exists($base_pass."mx.txt")) {
$mx=trim(file_get_contents($base_pass."mx.txt"));
} else {
$mx="ad";
}
}
?>
<!--<TD width="25%"></TD>-->
<!--<TD width="25%"></TD>-->

</table>
<BR><BR>
<?php
if (file_exists($base_pass."tastatura.txt")) {
$tast=trim(file_get_contents($base_pass."tastatura.txt"));
} else {
$tast="NU";
}
if ($tast=="DA") {
echo '
<table id="data" border="0" align="center" width="90%">
<TR><TD width="100%">* Folositi tasta 1 pentru informatii despre film/serial. Apasati "OK" pentru a inchide info.<TD></TR>
<TR><TD>* Folositi tasta 3 pentru a adauga/sterge la favorite (daca exista).<TD></TR>
<TR><TD>* Folositi tasta 2 pentru a accesa direct pagina de "Favorite".<TD></TR>
<TR><TD>* Folositi tasta 5 pentru a simula butonul de cautare.<TD></TR>
</TABLE>';
} else {
echo '
<table id="data" border="0" align="center" width="90%">
<TR><TD>* Folositi ctrl+click pentru informatii despre film/serial. Apasati "OK" pentru a inchide info.<TD></TR>
</TABLE>';
}
if (!file_exists($base_pass."tmdb.txt") && !file_exists($base_pass."omdb.txt")) {
echo '<table border="0" align="center" width="90%">
<TR><TD>* Pentru rezultate mai rapide la "info film/serial" folositi TMDB sau/si OMDB (vezi setari).</TR></TD>
</TABLE>
';
}
?>
</BODY>
</HTML>
