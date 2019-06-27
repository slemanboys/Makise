<center>
<div id="spoiler">
<div><input onclick="if (this.parentNode.parentNode.getElementsByTagName('div')['show'].style.display != '') { this.parentNode.parentNode.getElementsByTagName('div')['show'].style.display = ''; this.parentNode.parentNode.getElementsByTagName('div')['hide'].style.display = 'none'; this.innerText = ''; this.value = 'hide'; } else { this.parentNode.parentNode.getElementsByTagName('div')['show'].style.display = 'none'; this.parentNode.parentNode.getElementsByTagName('div')['hide'].style.display = ''; this.innerText = ''; this.value = 'open'; }" name="button" type="button" value="gate 3" /> -> on</div>
<div id="show" style="border: px solid white; display: none; margin: 2px; padding: 2px; width: 98%;">
<?php

function wordFilter3($text)
{
    $ambilkata = $text;
    $ambilkata = str_replace('Hot', '', $ambilkata);
	$ambilkata = str_replace('<a class="series" href="', '<p hidden>', $ambilkata);
	$ambilkata = str_replace('<a href="', '<a href="inc/xx-api.php?page=scrap&memek=', $ambilkata);
	$ambilkata = str_replace('indonesia/', 'indonesia/&manga=SLUT', $ambilkata);
	$ambilkata = str_replace('<li>', '<br><div class="koceng">', $ambilkata);
	$ambilkata = str_replace('</ul>', '</div><hr width=60%>', $ambilkata);
	$ambilkata = str_replace('<i>', '<font color=red><i>  =>', $ambilkata);
	$ambilkata = str_replace('</i>', '</i></font>', $ambilkata);
	$ambilkata = str_replace('Next', '', $ambilkata);
    
    return $ambilkata;
}
$curl = curl_init('https://komikcast.com/'); //victim



curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE); 
$page = curl_exec($curl); 
if(curl_errno($curl)) // check for execution errors
{
	echo 'Scraper error: ' . curl_error($curl);
	exit;
}
 
curl_close($curl);


//extract dari element
$regex = '/<div class="listupd">(.*?)<div id="sidebar">/s';
if ( preg_match($regex, $page, $list) )
	
    echo wordFilter3($list[0]); 
else 
    print "Not found"; 
?>
</div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div>