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

<div class="small-container single-product">
    <div class="row">
        <div class="col-2">
            <img src="{{asset('images/gallery-1.jpg')}}" width="100%" id="ProdcutImg">

            <div class="small-img-row">
                <div class="small-img-col ">
                    <img src="{{asset('images/gallery-1.jpg')}}" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="{{asset('images/gallery-2.jpg')}}" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="{{asset('images/gallery-3.jpg')}}" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="{{asset('images/gallery-4.jpg')}}" width="100%" class="small-img">
                </div>
            </div>
        </div>
        <div class="col-2">
            <p>Home / T-shirt</p>
            <h1>Red Printed Shirt</h1>
            <h4>$50.00</h4>
            <select>
                <option>Select Size</option>
                <option>XXL</option>
                <option>XL</option>
                <option>Large</option>
                <option>Medium</option>
                <option>Small</option>
            </select>

            <input type="number" value="1" min="1">
            <a href="#" class="btn">Add To Cart</a>

            <h3>Product Details  <i class="fa fa-indent"></i></h3>
            <br>
            <p>Description Goes Here</p>

        </div>
    </div>
</div>

<div class="small-container">
    <div class="row row-2">
        <h2>Related Products</h2>
        <p>View More</p>
    </div>
</div>

{{--featured categories--}}
<div class="small-container">


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
    var ProdcutImg = document.getElementById('ProdcutImg');
    var smallImg = document.getElementsByClassName('small-img');
    smallImg[0].style.border =  "1px solid #ff523b";


    smallImg[0].onclick = function (){
        ProdcutImg.src = smallImg[0].src;
        smallImg[0].style.border =  "1px solid #ff523b";
        smallImg[1].style.border =  "none";
        smallImg[2].style.border =  "none";
        smallImg[3].style.border =  "none";
    }
    smallImg[1].onclick = function (){
        ProdcutImg.src = smallImg[1].src;
        smallImg[1].style.border =  "1px solid #ff523b";
        smallImg[0].style.border =  "none";
        smallImg[2].style.border =  "none";
        smallImg[3].style.border =  "none";
    }
    smallImg[2].onclick = function (){
        ProdcutImg.src = smallImg[2].src;
        smallImg[2].style.border =  "1px solid #ff523b";
        smallImg[1].style.border =  "none";
        smallImg[0].style.border =  "none";
        smallImg[3].style.border =  "none";
    }
    smallImg[3].onclick = function (){
        ProdcutImg.src = smallImg[3].src;
        smallImg[3].style.border =  "1px solid #ff523b";
        smallImg[1].style.border =  "none";
        smallImg[2].style.border =  "none";
        smallImg[0].style.border =  "none";
    }

</script>
</body>
</html>
