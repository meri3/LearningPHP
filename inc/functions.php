<?php     

$guitar_names = pluck($guitars, 'name');

//  $guitar_names = array_column($guitars, 'name');

 function pluck($arr, $key) {
      $result = array_map(function($item) use($key) { 
           return $item[$key];
      }, $arr);

      return $result
 }


 function sum($a, $b) {
      $result = $a + $b; //local variable
     
      return $result
 }

 function output($value/*= ''*/){
      echo '<pre>';
      print_r($value);
      echo '</pre>';
 }

 $guitars = [
      'Vela',
      'Explorer',
      'Strat'
 ];

