<?php

$str = "S4d0!i dont like%P H P= i hate ]HTML&test_sEt";
$specialChr = array("!","+","%","&","/","(",")","=","?","_","-","}","]","[","{","$","#","}");
$arr = array();
foreach ($specialChr as $chr)
{
    if(strpos($str,$chr) != null)
    {
        array_push($arr, strpos($str,$chr));
    }
}
sort($arr);

$start = 0; 
for($i=0; $i<count($arr); $i++)
{
    echo "<br>" . substr($str,$start,($arr[$i]-$start));
    $start = $arr[$i]+1;
}

// OUTPUT
// S4d0
// i dont like
// P H P
// i hate
// HTML
// test
?>
