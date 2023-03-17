<?php

/**
 * File name: save_data.php
 * PHP Script that receives form data via POST request and saves it to a JSON file.
 * PHP version 8.2
 * @author   chinmay <chinmay@codilar.com>
 */

function appendData()
{
    $data = file_get_contents('data.json');
    $registrations = json_decode($data, true);
    $name = $_FILES['photo']['name'];
    $temp_file = $_FILES['photo']['tmp_name'];
    if ($_POST != null) {
        $registration = array(
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'mobile' => $_POST['mobile'],
            'photo' => $_FILES['photo']['name']
        );
        array_push($registrations, $registration);


        $data = json_encode($registrations, JSON_PRETTY_PRINT);
        move_uploaded_file($temp_file, "uploads/" . $name);

        file_put_contents('data.json', $data);

        echo 'Registration successful';
    } else {
        echo 'Registration Unsuccessful';
    }
}

if (file_get_contents('data.json') == null) {
    file_put_contents('data.json', '[]');
}
appendData();
