
<?php
// mangakyo.com
function wordFilter($text)
{
    $ambilkata = $text;
    $ambilkata = str_replace('<div class="boxttx">', '<div class="boxttx"><h2>[BACA] => ', $ambilkata);
	$ambilkata = str_replace('<span class="gee">', '<p hidden>', $ambilkata);
	$ambilkata = str_replace('<a class="series"', '<p hidden>', $ambilkata);
	$ambilkata = str_replace('<div class="utao">', '<hr width=10%><br><div class="utao">', $ambilkata);
	$ambilkata = str_replace('<a href="', '<a href="/makise/inc/x-api.php?memek=', $ambilkata);
	$ambilkata = str_replace('">Ch', '&manga=SLUT">Ch', $ambilkata);
	$ambilkata = str_replace('<img src="', '<img width="260" height="370" src="', $ambilkata);
	

    return $ambilkata;
}
$curl = curl_init('https://www.mangakyo.com/'); //victim

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
$regex = '/<div class="listupd">(.*?)<div class="pagination">/s';
if ( preg_match($regex, $page, $list) )
	
    echo wordFilter($list[0]); 
else 
    print "Not found"; 

?>

</div></div></div></div></div></div></div></div>