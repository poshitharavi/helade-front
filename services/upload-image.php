<?php
session_start();
include_once('../util/services.php');

$postData = json_decode(file_get_contents('php://input'), true);
$requestData = array(
    "image" => $postData['image'],
);
//echo json_encode($requestData);

$data = json_decode(post($requestData, "addvertistment/add-image"), true);
if (array_key_exists('error', $data)) {

    echo json_encode(array('status' => 2, 'message' => 'Upload was unsuccessful'));
} else {

    echo json_encode(array('status' => 1, 'data' => $data));

}