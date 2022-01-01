<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FashionStore | Ecommerce Fashion Website design</title>
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
        <div class="row">
            <div class="col-2">
                <h1>Give Your Workout <br>A New Style</h1>
                <p>Success is not something you purse it's something you attract by becoming a successful person </p>
                <a href="#" class="btn">Explore Now &#8594</a>
            </div>
            <div class="col-2">
                <img src="{{asset('images/image1.png')}}">
            </div>
        </div>
    </div>
</div>
            {{--featured categories--}}
<div class="categories">
    <div class="small-container">
        <div class="row">
            <div class="col-3">
                <img src="{{asset('images/category-1.jpg')}}">
            </div>
            <div class="col-3">
                <img src="{{asset('images/category-2.jpg')}}">
            </div>
            <div class="col-3">
                <img src="{{asset('images/category-3.jpg')}}">
            </div>

        </div>
    </div>
</div>
            {{--featured categories--}}
<div class="small-container">
    <h2 class="title">Featured Products</h2>
    <div class="row">
        <div class="col-4">
            <img src="{{asset('images/product-1.jpg')}}">
            <h4>Red Printed T-Shirt</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$50.00</p>
        </div>
        <div class="col-4">
            <img src="{{asset('images/product-2.jpg')}}">
            <h4>Red Printed T-Shirt</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$50.00</p>
        </div>
        <div class="col-4">
            <img src="{{asset('images/product-3.jpg')}}">
            <h4>Red Printed T-Shirt</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$50.00</p>
        </div>
        <div class="col-4">
            <img src="{{asset('images/product-4.jpg')}}">
            <h4>Red Printed T-Shirt</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div>
            <p>$50.00</p>
        </div>
    </div>

    <h2 class="title">Latest Products</h2>
    <div class="row">
        <div class="col-4">
            <img src="{{asset('images/product-5.jpg')}}">
            <h4>Red Printed T-Shirt</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$50.00</p>
        </div>
        <div class="col-4">
            <img src="{{asset('images/product-6.jpg')}}">
            <h4>Red Printed T-Shirt</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$50.00</p>
        </div>
        <div class="col-4">
            <img src="{{asset('images/product-7.jpg')}}">
            <h4>Red Printed T-Shirt</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$50.00</p>
        </div>
        <div class="col-4">
            <img src="{{asset('images/product-8.jpg')}}">
            <h4>Red Printed T-Shirt</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div>
            <p>$50.00</p>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <img src="{{asset('images/product-9.jpg')}}">
            <h4>Red Printed T-Shirt</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$50.00</p>
        </div>
        <div class="col-4">
            <img src="{{asset('images/product-10.jpg')}}">
            <h4>Red Printed T-Shirt</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$50.00</p>
        </div>
        <div class="col-4">
            <img src="{{asset('images/product-11.jpg')}}">
            <h4>Red Printed T-Shirt</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$50.00</p>
        </div>
        <div class="col-4">
            <img src="{{asset('images/product-12.jpg')}}">
            <h4>Red Printed T-Shirt</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div>
            <p>$50.00</p>
        </div>
    </div>
</div>

                {{--Offer--}}
<div class="offer">
    <div class="small-container">
        <div class="row">
            <div class="col-2">
                <img class="offer-img" src="{{asset('images/exclusive.png')}}">
            </div>
            <div class="col-2">
                <p>Exclusively available On RedStore</p>
                <h1>Smart Band 4</h1>
                <small>A new Thing For the store</small>
                <br>
                <a href="#" class="btn">Buy Now &#8594</a>
            </div>
        </div>
    </div>
</div>
                {{--Offer--}}


                {{--testimonial--}}
<div class="testimonial">
    <div class="small-container">
        <div class="row">
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>Sum dummy text</p>
                <div class="rating">
                    <div class="fa fa-star"></div>
                    <div class="fa fa-star"></div>
                    <div class="fa fa-star"></div>
                    <div class="fa fa-star"></div>
                    <div class="fa fa-star-o"></div>
                </div>
                <img src="{{asset('images/user-1.png')}}">
                <h3>Random Woman</h3>
            </div>
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>Sum dummy text</p>
                <div class="rating">
                    <div class="fa fa-star"></div>
                    <div class="fa fa-star"></div>
                    <div class="fa fa-star"></div>
                    <div class="fa fa-star"></div>
                    <div class="fa fa-star-o"></div>
                </div>
                <img src="{{asset('images/user-2.png')}}">
                <h3>Random Man</h3>
            </div>
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>Sum dummy text</p>
                <div class="rating">
                    <div class="fa fa-star"></div>
                    <div class="fa fa-star"></div>
                    <div class="fa fa-star"></div>
                    <div class="fa fa-star"></div>
                    <div class="fa fa-star-o"></div>
                </div>
                <img src="{{asset('images/user-3.png')}}">
                <h3>Random Woman</h3>
            </div>

        </div>
    </div>
</div>

                {{--testimonial--}}

                {{--Brands--}}

{{--Brands--}}
<div class="brands">
    <div class="small-container">
        <div class="row">
            <div class="col-5">
                <img src="{{asset('images/logo-godrej.png')}}">
            </div>
            <div class="col-5">
                <img src="{{asset('images/logo-oppo.png')}}">
            </div>
            <div class="col-5">
                <img src="{{asset('images/logo-coca-cola.png')}}">
            </div>
            <div class="col-5">
                <img src="{{asset('images/logo-paypal.png')}}">
            </div>
            <div class="col-5">
                <img src="{{asset('images/logo-philips.png')}}">
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
</body>
</html>
