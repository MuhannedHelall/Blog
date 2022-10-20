<!doctype html>
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
            <form action="index.html">
                <img src="assets/images/login&Register/maleAvatar.svg" class="avatar" />
                <h2>welcome</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <h5>Username</h5>
                        <input type="text" class="input" />
                    </div>
                </div>
                <div class="input-div two">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div>
                        <h5>Password</h5>
                        <input type="password" class="input" />
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