<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        session_start();
        require_once "config.php";
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        try {
            $stmt = $conn->prepare("SELECT * FROM users WHERE email = '$email' AND password = '$password';");
            $stmt->execute();
          
            // set the resulting array to associative
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result = $stmt->fetch();
            if($result){
                $_SESSION['user'] = $result;
                header('location: ./');
                die;
            }else{
                header('location: login.php');
                die;
            }
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        $conn = null;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <link href="assets/css/all.min.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
</head>
<body>
    <img class="wave" src="assets/images/login&Register/wave.png" />
    <div class="container">
        <div class="img">
            <img src="assets/images/login&Register/login.svg" />
        </div>
        <div class="login-container">
            <form method="POST">
                <img src="assets/images/login&Register/maleAvatar.svg" class="avatar" />
                <h2>welcome</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <h5>Email</h5>
                        <input type="email" class="input" name="email"/>
                    </div>
                </div>
                <div class="input-div two">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div>
                        <h5>Password</h5>
                        <input type="password" class="input" name="password"/>
                    </div>
                </div>
                <a href="#" style="display: inline; margin-right:40px;">Forgot your Password?</a>
                <a href="register.php" style="display: inline; margin-left:40px;">Register Now?</a>
                <input type="submit" value="Login" class="btn" />
            </form>
        </div>
    </div>
    <script src="assets/js/script.js"></script>
</body>
</html>