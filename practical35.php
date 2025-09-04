<?php

$countries = array(
    "India" => "New Delhi",
    "USA" => "Washington D.C.",
    "UK" => "London",
    "France" => "Paris",
    "Germany" => "Berlin"
);


$capital = "Paris";


$country = array_search($capital, $countries);

if ($country !== false) {
    echo "The capital city '$capital' belongs to country: $country";
} else {
    echo "Capital city '$capital' not found in the list.";
}
?>