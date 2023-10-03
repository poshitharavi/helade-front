<?php
include_once('../util/services.php');


$postData = json_decode(file_get_contents('php://input'), true);

$requestData = array(
    "district" => $postData['district'],
    "category" => $postData['category'],
    "keyword"=> $postData['keyword'],
    "page" => $postData['page'],
);
//echo json_encode($requestData);
$data = json_decode(post($requestData, "addvertistment/search-adds"), true);

if (array_key_exists('error', $data)) {
    echo json_encode(array('status' => 2, 'message' => $data['error']));
} else {
    echo json_encode(array('status' => 1, 'data' => $data));

}
