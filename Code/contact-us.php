<?php
require_once('../database/connection.php');
header('Content-Type: application/json');

$response = [];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Simple form validation
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        $response['status'] = 'error';
        $response['message'] = 'All fields are required.';
        echo json_encode($response);
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response['status'] = 'error';
        $response['message'] = 'Invalid email format.';
        echo json_encode($response);
        exit();
    }

    $insertMessageData = "INSERT INTO contact(name , email , subject , message) Values('$name' , '$email' , '$subject' , '$message')";
    $result = mysqli_query($con, $insertMessageData);
    if($result){
        // If processing is successful
        $response['status'] = 'success';
        $response['message'] = 'Your message has been sent successfully.';
    }else{
        // If there was an error
        $response['status'] = 'error';
        $response['message'] = 'An error occurred while sending your message. Please try again later.';
    }
} else {
    $response['status'] = 'error';
    $response['message'] = 'Invalid request method.';
}

echo json_encode($response);
