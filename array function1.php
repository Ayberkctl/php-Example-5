<?php
/*
    array_map()
    array_filter()
    array_merge()
    array_rand()
    array_reverse()
    array_search()
    in_array()
    array_shift()
    array_pop()
    array_slice()
    array_sum()
    array_product()
    array_unique()
*/
    function filtrele($val){
        return $val * 2 ."-" ;
    }
    $arr=[1,2,3,4,5,6,7,8];
    $arr2 =array_map("filtrele",$arr); 
    //var_dump($arr2);

    $arr=["","ayberk","catal",""];
    //var_dump( array_filter($arr) );

    $arr=[1,2,3,4,5,6,7,8];
    $arr=array_filter($arr, function($item){
        return $item > 2 &&  $item < 5;
    });
    //var_dump($arr);

    $arr1=[1,2,3,4,5,6,7,8];
    $arr1 = array_map(function($val){
        if($val > 2 && $val < 5 ){
            return $val;
        }
    },$arr1);
    //print_r($arr1);

    $arr1 =[1,2,3];
    $arr2 =[4,5,6];
    $arr= array_merge($arr1,$arr2);
    //var_dump($arr);


    $arr=[
        'name'=>'ayberk',
        'surname'=>'catal',
        'age'=>19,
        'site'=>'ayberkctl.com',
    ];
    $random=array_rand($arr,2);
     $values=array_map(function($key) use($arr){
            return $arr[$key];
     },$random);
     //print_r ($values);
    

     $arr=[
     "name"=>"aybewrk",
     "surname"=>"catal",
     "a"=>[
         "b"=>[
            "c"=>"d",
            "e"=>"f"
         ]
     ]];
     //echo  array_search("catal",$arr);
     function _array_search($cur_val,$arr){
        foreach($arr as $key => $val){
            if($val == $cur_val){
                return $cur_val;
            } 
            if(is_array($val)){
                return _array_search($cur_val, $val);
            }
        }
        return "false"; 
     }
     $value="b";
     //echo _array_search($value,$arr);

     /*
     $arr=[1,2,3,4,5,6,7];
     if( in_array(8,$arr) ){
        echo "var";
     } else{
        echo "yok";
     }
     */

        $arr=[1,2,3,4,5,6,7];
        /*$first_vaule= array_shift($arr);//baştan 1 çıkra
        print_r($arr);
        echo $first_vaule;*/
        $last_value = array_pop($arr);//sondan 1 çıkra
        //print_r($arr);

        //var_dump($arr);//befor
        $arr1=array_slice($arr,2);//ilk iki elaman hariç hepsi
        //var_dump($arr1);//after

        $arr2=array_slice($arr,2,3);//2den başalayıp 3 tane seç
        //var_dump($arr2);

        $arr3= array_slice($arr, -2);//sondan 2
        //var_dump($arr3);

        $arr=[1,2,3,4,5,6,7];
        //echo $toplam=array_sum($arr);//elemanların toplamı 
        //echo $toplam=array_product($arr);//elemanların çarpımı


    $arr=["ayberk","ayberk","catal","alper","catal","Ayberk"];
    var_dump($arr);
    $arr1=array_unique($arr);
    var_dump($arr1);






?>