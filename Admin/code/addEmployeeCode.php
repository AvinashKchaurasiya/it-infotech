<?php
require_once(__DIR__ . '/../../database/connection.php');
require_once(__DIR__ . '/../../Mail/sendMail.php');
require_once(__DIR__ . '/generatePassword.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $dob = $_POST['dob'];
    $position = $_POST['department'];
    $salary = $_POST['salary'];
    $address = $_POST['address'];
    $image = $_FILES['image'];
    $password = generatePassword($firstName, 10);
    $encPassword = sha1($password);
    $name = $firstName . ' ' . $lastName;
    $status = 0;
    $joinData = $_POST['joiningDate'];

    if (!empty($salary)) {
        $salary = floatval($salary);
    } else {
        $salary = 0;
    }

    // check duplicate employee
    $duplicateEmployeeQuery = "SELECT * FROM employees WHERE employee_email = '$email'";
    $duplicateEmployeeResult = mysqli_query($con, $duplicateEmployeeQuery);
    if (mysqli_num_rows($duplicateEmployeeResult) > 0) {
        echo json_encode([
            'status' => 'error',
            'message' => 'This email address is already registered!'
        ]);
        exit();
    }


    // Handle file upload
    $uploadDir = '../assets/profile_pictures/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 777, true);
    }
    $uploadFile = $uploadDir . time() . basename($image['name']);
    $imageName = time() . basename($image['name']);


    //  recipients email address 

    $recipients = [
        [
            'email' => 'contact@bharatxtechs.com',
            'name' => 'BharatX Contact',
            'subject' => 'New Employee Registration',
            'body' => "New Employee $name successfully registered."
            // 'attachment' => '/path/to/attachment1.pdf' // Optional, remove if not needed
        ],
        [
            'email' => $email,
            'name' => $name,
            'subject' => 'New Employee Registration',
            'body' => "Dear $name, \n\nThank you for joining with our company. Your account details are as follows: \n\nEmail: $email \nPassword: $password \n\nPlease login to your account at our website. \n\nBest regards, \nBharatX Technoloies Team <br/> <a href='https://bharatxtechs.com/' style='display: inline-block; padding: 10px 20px; font-size: 16px; color: #ffffff; background-color: #007bff; border: none; border-radius: 5px; text-align: center; text-decoration: none;'>Login your self</a>"
            // 'attachment' => '/path/to/attachment2.pdf' // Optional, remove if not needed
        ]
    ];

    // print_r($recipients);die;
    $flag = false;
    if (move_uploaded_file($image['tmp_name'], $uploadFile)) {
        $addEmployeQuery = "INSERT INTO employees (employee_name, employee_email, employee_number, employee_image, employee_position, employee_dob, employee_jd, employee_salary,  employee_password, employee_address, employee_status) Values('$name' , '$email' , '$number' , '$imageName' , '$position' , '$dob' , '$joinData' , '$salary', '$encPassword' , '$address' , '$status')";
        $addEmployeQueryExecute = mysqli_query($con, $addEmployeQuery);
        if ($addEmployeQueryExecute) {
            foreach ($recipients as $key => $value) {
                if ($value) {
                    if (sendMail($value)) {
                        $flag = true;
                    }
                }
            }
        }
        if ($flag == true) {
            echo json_encode([
                'status' => 'success',
                'message' => 'Employee data saved successfully and email sent successfully!'
            ]);
        } else {
            echo json_encode([
                'status' => 'error',
                'message' => 'Employee data saved successfully but email not sent!'
            ]);
        }
    } else {
        echo json_encode([
            'status' => 'error',
            'message' => 'Image not uploaded.'
        ]);
        exit();
    }
} else {
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid request method.'
    ]);
}
