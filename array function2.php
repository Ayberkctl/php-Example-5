<?php

/*
    array_values()
    array_push()
    array_unshift()
    array_keys()
    current()
    end()
    next()
    prev()
    reset()
    extract()
    asort()
    arsort()
    ksort()
    krsort()
*/
$arr=[
    "name"=>"ayberk",
    "surname"=>"catal",
    "age"=>18
];
$arr2= array_values($arr);
$arr=["ayberk","ayberk","catal","ayberk","alper","catal"];
$arr1=array_unique($arr);
//var_dump($arr1);
$arr1= array_values($arr1);
//var_dump($arr1);

$arr=["ayberk","catal"];
array_push($arr,19,"new","add");
$arr[]="new vaule";
$arr["key"]=" vaule";
//print_r($arr);
$arr=["ayberk","catal"];
array_unshift($arr,"alper");
//var_dump($arr);
$arr2=[
    "age"=>19
];
$arr=array_merge($arr2,$arr);
//var_dump($arr);
$arr=[
    "name"=>"ayberk",
    "surname"=>"catal",
    "age"=>18,
    "a"=>[
        "c"=>[
            "d"=>"e"
        ]
    ]
];

    
$keys=array_keys($arr);
//var_dump($keys);
function _array_keys($arr){
    static $keys=[];
    foreach($arr as $key=>$vaule){
        $keys[]= $key;
        if(is_array($vaule)){
            _array_keys($vaule);
        } 
        
    }
    return $keys;
    
}
 $arr=_array_keys($arr);
 //var_dump($arr);


 $arr=["ayberk","catal",19,"geliştirici","31"];
 /*echo current($arr)."<br>";
 echo next($arr)."<br>";
 echo next($arr)."<br>";
 echo prev($arr)."<br>";
 reset($arr);
 echo next($arr)."<br>";
 echo end($arr);*/

$arr=[
    "name"=>"ayberk",
    "surname"=>"catal",
    "age"=>19
];
extract($arr);
//echo $name;


$arr=[2,5,1,7,8,6];
/*var_dump($arr);
//asort($arr);
arsort($arr);
var_dump($arr);*/



$arr=[
    "c"=>"deger 1",
    "b"=>"deger 2",
    "a"=>"deger 3",
];
ksort($arr);
//krsort($arr);
var_dump($arr)

?>