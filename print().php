<?php

$yer="afrikada";
$sayı=5;
$tur="maymun";

//echo $yer." ". $sayı." ". "tane"." ".$tur." var\n";
//echo "afirkada 5 tane maymun var ";

printf("%s %d tane %s var.\n",$yer,$sayı,$tur);
printf('there are %2$d  %1$s in %3$s',"monkeys",5,"africa"."\n");
$tarih="2018-07-6";
echo vsprintf('%d-%02d-%02d',explode("-",$tarih));
echo sprintf('pi %.2f tür',3.14);
?>