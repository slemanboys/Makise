<?php
if(isset($_GET['kyu'])){
  require 'target/kyu.php';
exit;
}

if(isset($_GET['kyo'])){
  require 'target/kyo.php';
exit;
}

if(isset($_GET['kcast'])){
  require 'target/kcast.php';
exit;
}
?>
<title>Makise</title>
<link href="http://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type="text/css">

<div class="toto">
<font face="courier" size="3" color="gold">
<pre style="text-align: left;">
<style>
body { 
	background: black; 
  }

  a {
	color: white;
  }

  A.class2 {color:gray;}

  .infox {
  margin: auto;
   background-color: darkslategrey;
   width: 15%;
   
   padding: 20px;
   -moz-border-radius: 5px;
	 -webkit-border-radius: 20px;
 }
 .toto {
	text-align: center;
  }
 .toto pre {
   display: inline-block;
   text-align: left;
  }

  

  .intro {
   margin: auto;
   background-color: #f7f3f3;
   width: 30%;
   
   padding: 10px;
   -moz-border-radius: 5px;
	 -webkit-border-radius: 20px;
 }
 
  </style>
  <pre>
___  ___      _    _          
|  \/  |     | |  (_)         
| .  . | __ _| | ___ ___  ___ 
| |\/| |/ _` | |/ / / __|/ _ \
| |  | | (_| |   <| \__ \  __/
\_|  |_/\__,_|_|\_\_|___/\___| 
                                                           
> static site to getData from many fansub
> getLatest manga release
> bullshit popups ends here
> if wanna download try using DOM<i> (https://simplehtmldom.sourceforge.io/)</i>

                                I bring an end to fansub.
                                <a href="https://github.com/sinkaroid/Makise" class="class2">(github.com/sinkaroid/Makise)</a>
                                <font color=green>v1 beta, after reroute</font> | codename: <font color=palevioletred><b>Makise Kurisu<b/></font>
</pre></div></font>
<p>

<div class="infox">
<font face=consolas color=gray>

<!-- reroute from /makise/target/(..).php to instant params -->

<a href="?kyu" rel="nofollow" target="_blank">kiryuu</a><br>
<a href="?kyo" rel="nofollow" target="_blank">mangakyo</a> <br>
<a href="?kcast" rel="nofollow" target="_blank">komikcast</a><br>
</div>
</font>
<center><br>
<font face=consolas color=gray>
<?php

$tanggal= mktime(date("m"),date("d"),date("Y"));
echo "[<font color=green>d</font> : <b>(".date("d-M-Y", $tanggal).")</b> ";
date_default_timezone_set('Asia/Jakarta');
$jam=date("H:i:s");
echo "-> <font color=green>t</font> : <b>(". $jam.") "."</b> -> ";
$a = date ("H");
if (($a>=6) && ($a<=11)){
echo "<font color=white><b>Morning</font></b>]";
}
else if(($a>11) && ($a<=15))
{
echo ", Morning";}
else if (($a>15) && ($a<=18)){
echo ", Good day";}
else { echo ", <b> Night</b>";}
echo '</font>';



