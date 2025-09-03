<?php
    $arr=[33,34,35,36,37,38];

    for($i=5; $i>=0; $i--){
        echo "$arr[$i]"; 
        echo "<br>";
    }


    echo " using reverse function";
  $array= array_reverse($arr);
   for($i=0; $i<=5; $i++){
    echo "$array[$i]";
     echo "<br>";
   }

?>