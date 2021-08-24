<?php

$data_file = fopen("example.txt", "w");

$name = $_POST("cname");
$email = $_POST("cemail");
$subject = $_POST("subject");
$number = $_POST("number");
$message = $_POST("message");

$text_to_write = $name . " " . $email . " " . $subject . " " . $number . " " .$message;
fwrite($data_file, $text_to_write);
fclose($data_file);
?>