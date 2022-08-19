<?php

//$result = 1 < 3; //true

$first_name = 'Meri';
$last_name = 'Prezime';

if ($first_name == 'Meri' && $last_name == 'prezime'){ // or -> ||
     echo 'The first condition is true';
}  else if ($first_name == 'meri' && $last_name == 'Prezime') {
     echo 'The second condition is true'
} else {
     echo 'The conditions are false';
}