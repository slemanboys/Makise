<div id="spoiler">
<div><input onclick="if (this.parentNode.parentNode.getElementsByTagName('div')['show'].style.display != '') { this.parentNode.parentNode.getElementsByTagName('div')['show'].style.display = ''; this.parentNode.parentNode.getElementsByTagName('div')['hide'].style.display = 'none'; this.innerText = ''; this.value = 'hide'; } else { this.parentNode.parentNode.getElementsByTagName('div')['show'].style.display = 'none'; this.parentNode.parentNode.getElementsByTagName('div')['hide'].style.display = ''; this.innerText = ''; this.value = 'open'; }" name="button" type="button" value="gate 1" /> -> on</div>
<div id="show" style="border: px solid white; display: none; margin: 2px; padding: 2px; width: 98%;">
<?php
// kiryuu.co
function wordFilter2($text)
{
    $ambilkata = $text;
    $ambilkata = str_replace('Hot', '', $ambilkata);
    $ambilkata = str_replace('data-lazy-src="', 'src="', $ambilkata);
	$ambilkata = str_replace('src="data:image/', '', $ambilkata);
    $ambilkata = str_replace('<li>', '<br><hr width=20%><br>', $ambilkata);
	$ambilkata = str_replace('</i>', '</i><br>', $ambilkata);
	$ambilkata = str_replace('<div class="chli">', '<div class="chli"><div class="koceng">', $ambilkata);
	$ambilkata = str_replace('<a href="', '<a href="/makise/inc/api.php?page=scrap&memek=', $ambilkata);
	$ambilkata = str_replace('indonesia/', 'indonesia/&manga=SLUT', $ambilkata);
	$ambilkata = str_replace('class="series" href=', '', $ambilkata);
	$ambilkata = str_replace('<img width=', '<img width="260"', $ambilkata);
	$ambilkata = str_replace('height=', 'height="370"', $ambilkata);
	
    return $ambilkata;
}
$curl = curl_init('https://kiryuu.co/rilisan-terbaru/'); //victim

//bisa curl atau Dom parser

curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE); 
$page = curl_exec($curl); 
if(curl_errno($curl)) // check for execution errors
{
	echo 'Scraper error: ' . curl_error($curl);
	exit;
}
 
curl_close($curl);


//extract dari element
$regex = '/<div class="bodypost">(.*?)<div class="pagination">/s';
if ( preg_match($regex, $page, $list) )
	
    echo wordFilter2($list[0]); 
else 
    print "Not found"; 
?>
</div></div></div></div></div></div></div>