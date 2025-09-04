<?php
$arr=["name"=> "Falguni","roll no"=>13];
$key="roll no";
if(array_key_exists($key,$arr)){
    echo "This key exists";
}
else{
    echo "Does not exists";
}