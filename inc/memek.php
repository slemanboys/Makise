<center>
<div id="spoiler">
<div><input onclick="if (this.parentNode.parentNode.getElementsByTagName('div')['show'].style.display != '') { this.parentNode.parentNode.getElementsByTagName('div')['show'].style.display = ''; this.parentNode.parentNode.getElementsByTagName('div')['hide'].style.display = 'none'; this.innerText = ''; this.value = 'hide'; } else { this.parentNode.parentNode.getElementsByTagName('div')['show'].style.display = 'none'; this.parentNode.parentNode.getElementsByTagName('div')['hide'].style.display = ''; this.innerText = ''; this.value = 'open'; }" name="button" type="button" value="gate 3" /> -> on
<div id="show" style="border: px solid white; display: none; margin: 2px; padding: 2px; width: 98%;">
<?php

function wordFilter4($text)
{
    $ambilkata = $text;
   
	$ambilkata = str_replace('<a href="', '<a href="inc/xxx-api.php?page=scrap&memek=', $ambilkata);
	$ambilkata = str_replace('indonesia/', 'indonesia/&manga=SLUT', $ambilkata);
    $ambilkata = str_replace('<li>', '<br><div class="koceng">', $ambilkata);
    $ambilkata = str_replace('<hr class="mt-0 mb-2">', '', $ambilkata);
    $ambilkata = str_replace('<div class="limit">', '<hr width=20%>', $ambilkata);
    $ambilkata = str_replace('<div class="text-center">', '<p hidden>', $ambilkata);
    $ambilkata = str_replace('<h2 class="heading1">', '<p hidden>', $ambilkata);
    return $ambilkata;
}
$curl = curl_init('https://www.maid.my.id/'); //victim



curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE); 
$page = curl_exec($curl); 
if(curl_errno($curl)) // check for execution errors
{
	echo 'Scraper error: ' . curl_error($curl);
	exit;
}
 
curl_close($curl);


//extract dari element
$regex = '/<div class="text-center">(.*?)<div class="pagination mb-3">/s';
if ( preg_match($regex, $page, $list) )
	
    echo wordFilter4($list[0]); 
else 
    print "Not found"; 
?>
</div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div>