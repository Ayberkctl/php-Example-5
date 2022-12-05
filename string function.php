<?php
/*
    strlen()
    strstr()
    strpos()
    ucwords() ucfirst() strtolower() strtoupper()
    trim() ltrim() rtrim()
    substr()
    str_replace()
    str_repeat()
*/
$str="ayberk catal";
//echo strlen($str);
//echo strlen("ayberkcatal");

/*
echo strstr('ayberk catal 19 ','b')."<br>";
echo strpos('ayberk catal 19 ','r')."<br>";
*/

/*
echo $str."<br>";
echo ucwords($str)."<br>";
echo ucfirst($str)."<br>";
*/

/*
echo $str= strtoupper($str)."<br>";
echo strtolower($str)."<br>";
*/

/*
$str2="\t ayberkcatal     \t \n";
echo $str2."|";
echo trim($str2)."|\n";
echo rtrim($str2)."|\n";
echo ltrim($str2)."|";
*/
/*
$str2="-ayberk-catal-";
echo trim($str2,"-")."<br>";
echo rtrim($str2,"-")."<br>";
echo ltrim($str2,"-")."<br>";
*/
$str2="ayberk-catal";
//echo substr($str,0,-4);

$str2="ayberk catal, alper catal";

$str3=str_replace(["ayberk","catal","alper"],["utku","24 yers old","his firend"],$str2);
//echo $str3;


echo str_repeat("*",10);

for ($i=0; $i < 10; $i++) { 
    $repatcaount=($i<5 ? $i: (10-$i));
    echo str_repeat("<>",$repatcaount)."<br>";
};



?>