<?php
//Notes
/* 
We have local scope. If a variable does not exist within a local scope, than we have to import it in some way.
If it's a global variable, we have to use the global statement. 
If it's not a global variable, but it is on the same level of scope, like for example, function array_map is
essentially on the same lavel as key. They are inside of pluck. And in that case, we can't use global,
because key is not global. Instead, we have to use the use statement.
*/
     $title = 'scope';

     $guitars = [
          ['name' => 'Vela', 'manufacturer' => 'PRS']
          ['name' => 'Explorer', 'manufacturer' => 'Gibson']
          ['name' => 'Strat', 'manufacturer' => 'Fender']
     ];

     $guitar_names = array_column($guitars, 'name');

     function pluck($arr, $key) {
          $result = array_map(function($item) use($key) { 
               return $item[$key];
          }, $arr);

          return $result
     }


     $guitar_names = pluck($guitars, 'name');


     // $greeting = 'hello world!'; //global -> Even though it is a gloal variable, it is only
     // //usable inside of a function if we explicitly say that we want to use it

     // function sum($a, $b) {
     //      global $greeting;
     //      echo $greeting;
     //      $result = $a + $b; //local variable

     //      return $result
     // }

     // $result = sum(1, 2);  //global variable

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

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>PHP Fundamentals: <?= $title; ?></title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/php-fundamentals.css" rel="stylesheet" />
  </head>

  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">PHP Fundamentals: <?= $title; ?></a>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5">My favourite Guitars</h1>
        </div>
      </div>
      <div class="row">
      <?php 
          output($guitar_name);
      ?>
      </div>
    </div>
  </body>

</html>

