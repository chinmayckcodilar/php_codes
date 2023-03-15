<?php
// Create an associative array of employees
$employees = array(
    array(
        "name" => "Chinmay C K",
        "age" => 22,
        "position" => "Software Developer"
    ),
    array(
        "name" => "Shibin",
        "age" => 23,
        "position" => "Software Developer"
    ),
    array(
        "name" => "Vishnu",
        "age" => 24,
        "position" => "Software engineer"
    ),
    array(
        "name" => "Rishan",
        "age" => 22,
        "position" => "Software engineer"
    ),
    array(
        "name" => "Fathimath Sijila Banu",
        "age" => 24,
        "position" => "Software engineer"
    ),
    array(
        "name" => "Sharanya",
        "age" => 25,
        "position" => "Full stack developer"
    )
);

// Encode the array as a JSON string
$json_employees = json_encode($employees);

// Set the response content type to JSON
header('Content-Type: application/json');

// Output the JSON data
echo $json_employees;
?>
