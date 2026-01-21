<?php
include "connect.php";

$type = $_POST['type'];
$user_type = $_POST['user_type'];
$name = $_POST['name'];
$business_name = $_POST['business_name'];
$location = $_POST['location'];
$product = $_POST['product'];
$description = $_POST['description'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$photo_url = $_POST['photo_url'];
$price_per_unit = $_POST['price_per_unit'];
$unit = $_POST['unit'];
$available_quantity = $_POST['available_quantity'];
$delivery_days = $_POST['delivery_days'];
$created_at = $_POST['created_at'];





$sql = "INSERT INTO users (type,user_type,name,business_name,location,product,description,email,phone,photo_url,price_per_unit,unit,available_quantity,delivery_days,created_at) VALUES ('$type','$user_type','$name','$business_name','$location','$product','$description','$email','$phone','$photo_url','$price_per_unit','$unit','$available_quantity','$delivery_days','$created_at')";

if (mysqli_query($conn, $sql)) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>