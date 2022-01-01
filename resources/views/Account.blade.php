<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FashionStore | Ecommerce Fashion Website design</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=STIX+Two+Text:ital,wght@1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="header">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="{{asset('images/logo.png')}}" width="125px">
            </div>

            <nav>
                <ul id="MenuItems">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Account</a></li>
                </ul>
            </nav>
            <img src="{{asset('images/cart.png')}}" width="30px" height="30px">
            <img src="{{asset('images/menu.png')}}" class="menu-icon" onclick="menutoggle()">
        </div>
    </div>
</div>

            {{--account page--}}
<div class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="{{asset('images/image1.png')}}">
            </div>

            <div class="col-2">
                <div class="from-container">
                    <div class="form-btn">
                        <span onclick="loginUser()">Login</span>
                        <span onclick="registerUser()">Register</span>
                        <hr id="indicator">
                    </div>

                    <form id="loginForm">
                        <input class="px-2" type="text" placeholder="Username">
                        <input class="px-2" type="password" placeholder="Password">
                        <button type="submit" class="btn">Login</button>
                        <a href="">Forgot password</a>
                    </form>

                    <form id="RegForm">
                        <input class="px-2" type="text" placeholder="Username">
                        <input class="px-2" type="email" placeholder="Email">
                        <input class="px-2" type="password" placeholder="Password">
                        <button type="submit" class="btn">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download App</h3>
                <p>Download for android an ios</p>
                <div class="app-logo">
                    <img src={{asset('images/play-store.png')}}>
                    <img src={{asset('images/app-store.png')}}>
                </div>
            </div>
            <div class="footer-col-2">
                <img src="{{asset('images/logo-white.png')}}">
                <p>Something </p>
            </div>
            <div class="footer-col-3">
                <h3>Useful links</h3>
                <ul>
                    <li>Coupons</li>
                    <li>Blog Post</li>
                    <li>Return policy</li>
                    <li>Join Affiliate</li>
                </ul>
            </div>

            <div class="footer-col-4">
                <h3>Follow Us</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>Instagram</li>
                    <li>Youtube</li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="center">Copyrighted</p>
    </div>
</div>

<script>
    var MenuItems = document.getElementById('MenuItems');
    MenuItems.style.maxHeight = "0px";

    function menutoggle(){
        if (MenuItems.style.maxHeight == "0px"){
            MenuItems.style.maxHeight ="200px"
        } else {
            MenuItems.style.maxHeight ="0px"
        }
    }
</script>
<script>
    var loginForm = document.getElementById("loginForm");
    var regForm = document.getElementById("RegForm");
    var indicator = document.getElementById("indicator");

    function loginUser(){
        regForm.style.transform = "TranslateX(300px)";
        loginForm.style.transform = "TranslateX(300px)";
        indicator.style.transform = "TranslateX(0px)";
    }

    function registerUser(){
        regForm.style.transform = "TranslateX(0px)";
        loginForm.style.transform = "TranslateX(0px)";
        indicator.style.transform = "TranslateX(100px)";
    }


</script>
</body>
</html>
