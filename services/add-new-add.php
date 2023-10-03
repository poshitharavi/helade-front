<?php
session_start();
include_once('../util/services.php');

$postData = json_decode(file_get_contents('php://input'), true);
$requestData = array(
    "addedUserId" => $_SESSION["heladeUserId"] ,
    "productName" => $postData['title'],
    "categoryId" => $postData['catRadio'],
    "price" => $postData['price'],
    "discription" => $postData['description'],
    "district" => $postData['district'],
    "url1" => $postData['imageOne'],
    "url2" => $postData['imageTwo'],
    "url3" => $postData['imageThree'],
    "url4" => $postData['imageFour'],
    "url5" => $postData['imageFive'],
    "url6" => $postData['imageSix'],
    "city" => $postData['city'],
);
//echo json_encode($requestData);
$data = json_decode(post($requestData, "addvertistment/add-new"), true);
if (array_key_exists('error', $data)) {

    echo json_encode(array('status' => 2, 'message' => 'Submission was unsuccessful'));
} else {

    echo json_encode(array('status' => 1, 'message' => 'Submission was successfully'));

}