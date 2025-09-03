<?php

$num = array(40,50,60,70,80);

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