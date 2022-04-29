<?php
$firstarray = array('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black'); 
$secondarray = array('c2', 'c4'); 
print_r(array_intersect_key($firstarray, array_flip($secondarray)));
?>

