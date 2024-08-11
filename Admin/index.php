<?php
    session_start();
    require("../database/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - BharatX Technologies</title>
    <link rel="icon" href="../Assets/images/logo/logo.png"/>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="card" style="margin-top: 45%; border: 0; box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;">
                    <div class="card-header" style="display: flex; justify-content:space-between;">
                        <h2 class="text-center">Admin Login</h2>
                        <?php   
                            if(isset($_SESSION["status"])){
                                if($_SESSION["status"] == "error"){
                                    ?>
                                    <p id="status-message" class="text-danger"><?= $_SESSION['error']?>!!!</p>
                                    <script>
                                        setTimeout(function() {
                                            document.getElementById('status-message').style.display = 'none';
                                        }, 5000);
                                    </script>
                                    <?php
                                    unset($_SESSION["status"]);
                                }
                            }
                        ?>
                    </div>
                    <div class="card-body">
                        <form action="code/admin-login.php" method="post" id="login-form">
                            <div class="form-group mb-3">
                                <label for="username" class="mb-2">Username</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="password" class="mb-2">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <input type="submit" class="btn btn-primary w-100" value="Login" name="login"/>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script type="text/javascript" src="Assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>