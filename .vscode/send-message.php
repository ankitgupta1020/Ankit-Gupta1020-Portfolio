<?php

$data = json_decode(file_get_contents("php://input"), true);

$to = "your-email@example.com";
$subject = "New Message from Portfolio Website";
$body = "Name: {$data['name']}\nEmail: {$data['email']}\nMessage: {$data['message']}";

mail($to, $subject, $body);

echo json_encode(["message" => "Message sent successfully"]);

?>
