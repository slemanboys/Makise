<title>Scrap and Read</title>
<font face=consolas color=gold>
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


</style>
<center>



<form action="reader.php" method="get">
<input type="hidden" name="page" value="scrap"/>
<input type="hidden" style="width:55%;" placeholder="full url per chapter i.e: https://westmanga.info/kaifuku-jutsushi-no-yarinaoshi-chapter-15-2-bahasa-indonesia/" name="memek"><br>
<input type="hidden" name="manga" value="SLUT">
</center>
</form>

<?php

if(isset($_GET['manga'])){
$memek = $_GET['memek'];
$kontol = $memek;
echo $kontol;


$curl = curl_init($memek); //victim

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
$regex = '/<div id="readerarea">(.*?)<\/div>/s';
if ( preg_match($regex, $page, $list) )
	
    echo '<center>',$list[0]; //untuk allign nya udah auto pakai tag center, lalu orignial size nya jg udah auto dari regex
else 
    print "Not found";
}



?>

