<?php
session_start();
include_once('../util/services.php');

$postData = json_decode(file_get_contents('php://input'), true);

$requestData = array(
    "email" => $_SESSION["heladeUserEmail"],
    "password" => $postData['password'],
    "oldPassword" => $postData['oldPassword']

);
//echo json_encode($requestData);
$data = json_decode(post($requestData, "user/update-user-password"), true);

if (array_key_exists('error', $data)) {
    echo json_encode(array('status' => 2, 'message' => $data['error']));
} else {

    echo json_encode(array('status' => 1, 'message' => 'Password changed successfully'));

}