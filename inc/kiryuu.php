
<?php
// kiryuu.co
function wordFilter2($text)
{
    $ambilkata = $text;
	$ambilkata = str_replace('</h3>', '</h3><div class="koceng">', $ambilkata);
	$ambilkata = str_replace('resize=100,130', 'resize=200,260', $ambilkata);
	$ambilkata = str_replace('<a href="', '<a href="/makise/inc/api.php?page=scrap&memek=', $ambilkata);
	
    return $ambilkata;
}
$curl = curl_init('https://kiryuu.co/'); //victim

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
$regex = '/<\/div><div class="bixbox">(.*?)<div class="hpage">/s';
if ( preg_match($regex, $page, $list) )
	
    echo wordFilter2($list[0]); 
else 
    print "Not found"; 
?>
</div>
