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



