<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Products | Ecommerce Fashion Website design</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=STIX+Two+Text:ital,wght@1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    @livewireStyles
</head>

<div class="header">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="{{asset('images/logo.png')}}" width="125px">
            </div>

            <nav>
                <ul id="MenuItems">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('products')}}">Products</a></li>
                    <li><a href="{{route('aboutus')}}">About Us</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="{{route('account')}}">Account</a></li>
                </ul>
            </nav>
            <a href="{{route('cart')}}"><img src="{{asset('images/cart.png')}}" width="30px" height="30px"></a>
            <img src="{{asset('images/menu.png')}}" class="menu-icon" onclick="menutoggle()">
        </div>
    </div>
</div>


{{$slot}}



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
@livewireScripts
<script src="{{asset('js/app.js')}}"></script>


