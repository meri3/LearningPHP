<?php

/* NOTES
The isset function is going to return true or false. If title is set, it returns true, if title
is not set, then it returns false. "NOT(!)" reverses the condition. So if we set is false and 
we say not isset, then it's going to turn that into a true statement.
*/

// /if (!isset($title)){
//      $title = '';
// }

     require_once('functions.php');
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