<?php
include_once('../util/services.php');

$postData = json_decode(file_get_contents('php://input'), true);

//echo json_encode($requestData);
$data = json_decode(get( "addvertistment/get-user-adds/". $postData['userId']), true);
//echo json_encode($data);
if (array_key_exists('error', $data)) {
    echo json_encode(array('status' => 2, 'message' => $data['error']));
} else {
    echo json_encode(array('status' => 1, 'data' => $data));
}