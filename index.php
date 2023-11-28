<?php

// A simple PHP script with some math operations
// Start timing
$startTime = microtime(true);

// Your code block
for ($i = 0; $i < 50000000; $i++) {
    $result = cos($i) * sin($i);
}

// End timing
$endTime = microtime(true);

// Calculate total time
$executionTime = $endTime - $startTime;

// Output the result
echo "Execution time: " . $executionTime . " seconds";



//require_once __DIR__ . '/vendor/autoload.php';
//use MyApp\Person;
//
//$person =  new Person('Joh Wick',20);
//echo $person;
////$person->log('This is a custom log message.');
