<title>Scrap and Read</title>
<font face=Ubuntu color=gold>
<link href="http://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type="text/css">
<center><h2>You are reading</h2><center>
<style>
    body { 
   background: black; 
 }
.memek {
	border-style: dashed;
  margin: auto;
  width: 50%;
  
  padding: 3px;
}


#center {
    float:center;
    width: auto;
    height: auto;
    
}



.pepek {
  margin: auto;
  width: 50%;
 
  padding: 3px;
}

.intro {
   margin: auto;
   background-color: #f7f3f3;
   width: 25%;
   
   padding: 10px;
   -moz-border-radius: 5px;
	 -webkit-border-radius: 20px;
 }

</style>
<center>



<form action="reader.php" method="get">
<input type="hidden" name="page" value="scrap"/>
<input type="hidden" style="width:55%;" placeholder="full url per chapter i.e: https://westmanga.info/kaifuku-jutsushi-no-yarinaoshi-chapter-15-2-bahasa-indonesia/" name="memek"><br>
<input type="hidden" name="manga" value="SLUT">
</center>
</form>

<?php

function wordFilter($text)
{
    $ambilkata = $text;
  
    $ambilkata = str_replace('/>', '/><br>', $ambilkata);
    return $ambilkata;
}

if(isset($_GET['manga'])){
$memek = $_GET['memek'];
$kontol = $memek;
echo $kontol;


$curl = curl_init($memek); //victim


curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE); 
$page = curl_exec($curl); 
if(curl_errno($curl)) // check for execution errors
{
	echo 'Scraper error: ' . curl_error($curl);
	exit;
}
 
curl_close($curl);


//extract dari element
$regex = '/<div id="readerarea">(.*?)<\/div>/s';
if ( preg_match($regex, $page, $list) )
	
    echo wordFilter($list[0]);
else 
    print "Not found";
}

?>

<div class="intro">
<font color=crimson face=consolas size=3>

<b>&copy; Sin,</b>

<br><font size="3" color="gray">
feel free to pull,issues,or stealing at:<br><font color=blue> https://github.com/sinkaroid/makise</font>
</font>
</div>   
