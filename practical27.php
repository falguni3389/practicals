<?php

$num = array(20,21,22,23,24,25);

echo "Original Array";
print_r($num);
echo "<br>";


sort($num); 
echo " Ascending (Values)";
print_r($num);
echo "<br>"; 


rsort($num);
echo " Descending (Values)";
print_r($num);