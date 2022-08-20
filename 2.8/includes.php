<?php

/* NOTES
Even thpugh title variable is declared inside of this main PHP file,
we are still able to use it inside of header.
*/
     $title = 'includes';

     include('./../inc/header.php');
     require_once('./../inc/functions.php');

     $guitars = [
          ['name' => 'Vela', 'manufacturer' => 'PRS']
          ['name' => 'Explorer', 'manufacturer' => 'Gibson']
          ['name' => 'Strat', 'manufacturer' => 'Fender']
     ];

     $guitar_names = pluck($guitars, 'name');
?>

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
    
<?php  include('./../inc/footer.php'); ?>

  

