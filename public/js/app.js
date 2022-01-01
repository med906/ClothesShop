

var MenuItems = document.getElementById('MenuItems');
MenuItems.style.maxHeight = "0px";

function menutoggle(){
    if (MenuItems.style.maxHeight == "0px"){
        MenuItems.style.maxHeight ="200px"
    } else {
        MenuItems.style.maxHeight ="0px"
    }
}

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

