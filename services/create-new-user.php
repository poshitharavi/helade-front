<?php
session_start();
include_once('../util/services.php');

$postData = json_decode(file_get_contents('php://input'), true);

$requestData = array(
    "email" => $postData['email'],
    "password" => $postData['password'],
     "firstName"=> $postData['firstName'],
    "lastName"=> $postData['lastName'],
    "shortName"=> $postData['shortName'],
    "mobileNo"=> $postData['mobileNo']
);

$data = json_decode(post($requestData, "user/add-new-user"), true);

if (array_key_exists('error', $data)) {

    echo json_encode(array('status' => 2, 'message' => 'Check the details entered again and resubmit the registration'));
} else {

    echo json_encode(array('status' => 1, 'message' => 'Registered successfully'));

}