<?php

$characters = [
    "Negan" => [
        "city" => "The Sanctuary",
        "weapon" => "Lucille"
    ],
    "Daryl" => [
        "city" => "Alexandria",
        "weapon" => "crossbow"
    ],
    "Ezekiel" => [
        "city" => "The Kingdom",
        "weapon" => "Shiva"
    ]
];

echo 'Hello World', '</br>', '</br>';

var_dump($characters["Ezekiel"]["weapon"]);

echo '</br>';


echo "<pre>";
var_dump($characters["Negan"]);
echo "</pre>";

echo "<pre>";
var_dump($characters["Daryl"]);
echo "</pre>";

echo "<pre>";
var_dump($characters);
echo "</pre>";

exit();
header("location: https://www.google.fr");

?>



