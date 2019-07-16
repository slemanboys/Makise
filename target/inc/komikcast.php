<?php

function wordFilter3($text)
{
    $ambilkata = $text;
    $ambilkata = str_replace('Hot', '', $ambilkata);
	$ambilkata = str_replace('<a class="series" href="', '<p hidden>', $ambilkata);
	$ambilkata = str_replace('<a href="', '<a href="/makise/inc/xx-api.php?memek=', $ambilkata);
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
</div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div>