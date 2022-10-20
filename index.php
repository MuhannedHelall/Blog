<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mobile Phones</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }
        .main{
            width: 100%;
            height: 100vh;
            position: relative;
            overflow: hidden;
            background: linear-gradient(to right, #9c72b0, #8ecdff);
        }
        nav{
            width: 80%;
            position: sticky;
            margin: 20px auto;
            z-index: 1;
            display: flex;
            align-items: center;
        }
        .logo{
            flex-basis: 20%;
        }
        .logo img{
            width: 150px;
        }
        .nav-links{
            flex: 1;
            text-align: right;
        }
        .nav-links ul li{
            list-style-type: none;
            display: inline-block;
            margin: 0 20px;
        }
        .nav-links ul li a{
            text-decoration: none;
            color: #fff;
        }
        .information{
            width: 1000px;
            height: 1000px;
            position: absolute;
            top: 50%;
            left: -10%;
            transform: translateY(-50%);
        }
        .overlay{
            width: 0;
            height: 0;
            position: absolute;
            left: 0;
            top: 0;
            border: 500px solid #fff;
            border-right: 500px solid transparent;
        }
        .mobile{
            width: 200px;
            position: absolute;
            top: 50%;
            left: 35%;
            transform: translateY(-50%);
            z-index: 1;
        }
        .circle{
            width: 1000px;
            height: 1000px;
            position: absolute;
            top: 0;
            left: 0;
            border-radius: 50%;
            transform: rotate(0deg);
            transition: 1s;
        }
        .feature{
            position: absolute;
            display: flex;
            color: #fff;
        }
        .feature img{
            width: 70px;
        }
        .one{
            top: 450px;
            right: 50px;
        }
        .two{
            top: 150px;
            left: 350px;
            transform: rotate(-90deg);
        }
        .three{
            bottom: 450px;
            left: 50px;
            transform: rotate(-180deg);
        }
        .four{
            bottom: 150px;
            right: 350px;
            transform: rotate(-270deg);
        }
        .desc{
            margin-left: 30px;
        }
        .desc p{
            margin-top: 10px;
        }
        .controllers{
            position: absolute;
            right: 10%;
            top: 50%;
            transform: translateY(-50%);
            text-align: center;
        }
        .controllers h3{
            margin: 15px 0;
            color: #fff;
        }
        .upBtn{
            width: 15px;
            cursor: pointer;
        }
        .downBtn{
            width: 15px;
            cursor: pointer;
            transform: rotate(180deg)
        }
    </style>
</head>
<body>
    <div class="main">
        <nav>
            <div class="logo">
                <img src="assets/images/home/logo.png" alt="logo">
            </div>
            <div class="nav-links">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Phone</a></li>
                    <li><a href="#">Accessories</a></li>
                    <li><a href="#">Cart</a></li>
                </ul>
            </div>
        </nav>
        <div class="information">
            <div class="overlay"></div>
            <img src="assets/images/home/mobile.png" alt="Mobile" class="mobile">
            <div class="circle">
                <div class="feature one">
                    <img src="assets/images/home/display.png" />
                    <div class="desc">
                        <h1>Display</h1>
                        <p>6.5" Mini-Drop Fullscreen</p>
                    </div> 
                </div>
                <div class="feature two">
                    <img src="assets/images/home/camera.png" />
                    <div class="desc">
                        <h1>Camera</h1>
                        <p>12MP, Wide Angle Lens</p>
                    </div> 
                </div>
                <div class="feature three">
                    <img src="assets/images/home/battery.png" />
                    <div class="desc">
                        <h1>Battery Life</h1>
                        <p>5000 mAh, 720Hrs Standby</p>
                    </div> 
                </div>
                <div class="feature four">
                    <img src="assets/images/home/processor.png" />
                    <div class="desc">
                        <h1>Processor</h1>
                        <p>Snapdragon Octa-core 11nm</p>
                    </div> 
                </div>
            </div>
        </div>
        <div class="controllers">
            <img src="assets/images/home/arrow.png" class="upBtn"/>
            <h3>Feature</h3>
            <img src="assets/images/home/arrow.png" class="downBtn"/>
        </div>
    </div>
    <script>
        var circle = document.querySelector(".circle");
        var upBtn = document.querySelector(".upBtn");
        var downBtn = document.querySelector(".downBtn");

        var rotateValue = circle.style.transform;
        var rotateSum;

        upBtn.onclick = function(){
            rotateSum = rotateValue + "rotate(-90deg)";
            circle.style.transform = rotateSum;
            rotateValue = rotateSum;
        }
        downBtn.onclick = function(){
            rotateSum = rotateValue + "rotate(90deg)";
            circle.style.transform = rotateSum;
            rotateValue = rotateSum;
        }
    </script>
</body>
</html>