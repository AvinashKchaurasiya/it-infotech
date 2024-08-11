<?php
    session_start();
    require("../../database/connection.php");
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "SELECT * FROM admin_data WHERE email = '$username' AND password = '$password'";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $_SESSION['name'] = $row['name'];
            header("Location: ../dashboard.php");
        }else{
            $error = "Invalid username or password";
            $_SESSION["error"] = $error;
            $_SESSION["status"] = "error";
            header("Location: ../index.php");
        }
    }

?>