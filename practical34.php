<?php
$fruits=["Orange"=>100,"lichi"=>40,"apple"=>100];
echo "shorted by value";
echo "<br>";
asort($fruits);
foreach($fruits as $fruit=>$price){
echo "$fruit=>$price";
echo "Sorted by keys";
ksort($fruits);
foreach($fruits as $fruit=>$price){
    echo "fruits=>$price";
}
}

?>