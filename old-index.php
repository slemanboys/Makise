<?php $start_time = microtime(true); ?>
<title>makise</title>
<link rel="stylesheet" href="inc/style.css" type="text/css">
<style>
	body { 
   background: black; 
 }

 a {
   color: pink;
 }
 </style>
 <br>
<center>
<div class="koceng">
<font face="courier" size="3" color="gold">
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
							 
</pre>
</div>
</font>
<?php
echo'<font color=green>';
$timezone = new DateTimeZone('Asia/Jakarta');
$date = new DateTime();
$date->setTimeZone($timezone);

echo "<pre>", print_r($date, 1), "</pre></font>";
?>
<font face=Consolas color=gold>

<?php
/*
require 'inc/kiryuu.php';
*/
require 'inc/mkyo.php';
require 'inc/cast.php';

require 'inc/sec.php';

?>



