<?php

$item_code = $_POST['item_code'];
$item_category = $_POST['item_category'];
$item_name = $_POST['item_name'];
$price = $_POST['price'];
$email_address = $_POST['email_address'];
$contact_number = $_POST['contact_number'];

if(!empty($item_code) || !empty($item_category) || !empty($item_name) || !empty($price) || !empty($email_address) || !empty($contact_number)){
  $host = "localhost";
  $username = "root";
  $password = "";
  $dbname = "farah_furniture_store";

  $conn = new mysqli($host, $username, $password, $dbname);
  $INSERT = "INSERT Into store (item_code, item_category, item_name, price, email_address, contact_number) values(?,?,?,?,?,?)";
  $stmt = $conn->prepare($INSERT);
  $stmt->bind_param("issdss", $item_code, $item_category, $item_name, $price, $email_address, $contact_number);
  $stmt->execute();
  echo "Record Added Succesfully";
} else {
  echo "All field are required";
  die();
}
 ?>
