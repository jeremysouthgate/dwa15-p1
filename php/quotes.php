<?php

    // A PHP Script to return a random quotes


    // Set possible quotes (strings) as variables here:

    $quote1 = "I speak English and German.";

    $quote2 = "I'm a Singer and Composing Musician.";

    $quote3 = "I'm proud to be from Massachusetts.";

    $quote4 = "I study Computer Science at Harvard.";

    $quote5 = "I'm a Saggitarius.";


    // Create an array of the variables
    $array = array($quote1, $quote2, $quote3, $quote4, $quote5);


    // Generate a random integer between 0 and 4 (to rand. select var. from array)
    $random_int = rand(0,4);


    // Return the element of the array which is at the random_int position
    echo $array[$random_int];

?>
