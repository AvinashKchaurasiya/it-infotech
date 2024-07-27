<?php
require_once('../database/connection.php');
header('Content-Type: application/json');
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);



$response = [];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    // check that you are already contact with us or not

    $check_exist_query = "SELECT * FROM contact where email='$email'";
    $check_exist_result = mysqli_query($con, $check_exist_query);
    if(mysqli_num_rows($check_exist_result) > 0) {
        $response['status'] = 'error';
        $response['message'] = 'You have already contacted with us using this email address.';
        echo json_encode($response);
        exit();
    }

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

    $insertMessageData = "INSERT INTO contact(name , email , subject , messsage) Values('$name' , '$email' , '$subject' , '$message')";
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
