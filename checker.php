<?php
$email = $_GET['email'];

if(filter_var($_POST['email-name'],FILTER_VALIDATE_EMAIL)){
    echo json_encode([
        "status" => 1,
        "message" => "Valid email"
    ]);
}else {
    echo json_encode([
        "status" => 0,
        "message" => "Invalid Email"
    ]);
}
?>