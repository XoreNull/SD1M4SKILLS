<?php

function fillArray($numberCount) {

    if ($numberCount < 5) {

        echo "niet genoeg aantal cijfers";

        return;

    }

   

    $array = array();

    for ($i = 0; $i < $numberCount; $i++) {

        $array[] = rand(1, 2000);

    }

   

    return $array;

}




function browserArray($array) {

    echo "<pre>";

    print_r($array);

    echo "</pre>";

}




$digits = fillArray(10);

browserArray($digits);




?>