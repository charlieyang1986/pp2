<?php


    function printArr($array){
            foreach($array as $item){
                  echo "<p>$item</p><br/>";
            }
    }


    function largest($arr){
        $max = 0;
        foreach($arr as $item){

            if($item > $max){
                  $max = $item;
            }

        }
        return "<p>Largest value is $max </p>";
    }


    function removeDups($arr)
    {

//        for ($i = 0; $i < sizeof($arr)-1; $i++) {
//
//            for ($j = $i + 1; $j < sizeof($arr); $j++) {
//
//                if ($arr[$j] == $arr[$i]) {
//
//                    unset($arr[$j]);
//                }
//            }
//        }
//        return "<p> $arr </p>";
        array_unique($arr);
        $arr = implode(',',$arr);
        return "<p>".$arr."</p>";


    }