<?php

//$result = 1 < 3; //true

$first_name = 'Jeremy';
$last_name = 'McPeak';

if ($first_name == 'Jeremy' && $last_name == 'mcPeak'){ // or -> dvije uspravne crte || (na tipkovnici prije broja 1)
     echo 'The first condition is true';
}  else if ($first_name == 'jeremy' && $last_name == 'McPeak') {
     echo 'The second condition is true'
} else {
     echo 'The conditions are false';
}