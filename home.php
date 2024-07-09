<?php
session_start();
if(!isset($_SESSION['valid'])){
    header("location:login.php");
}
$res_name=$_SESSION['name'];

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="discription" content="Explore Your Funny">
        <title>Traveler | Home</title>
        <style>
* {
    box-sizing: border-box;
    padding: 0;
    margin: 0;
    font-family: var(--FirstFont);
}

/*=============== VARIABLES CSS ===============*/
:root {
    --dark-color: #222;
    --MainColor: #051f20;
    --SecondColor: #0b2b26;
    --ThirdColor: #163832;
    --Fourtholor: #235347;
    --FifthColor: #8eb69b;
    --SixthColor: #daf1de;
    --FontColor: #5a636a;
    --SecondFontColor: #afb3b7;
    --FirstFont: 'Poppins', sans-serif;
    --SecondFont: 'Montserrat', sans-serif;
}

/*=============== Main ===============*/
body {
    background-color: var(--MainColor);
    color: var(--FontColor);
    font-family: var(--SecondFont);
}
h1,h2,h3 {
    color: var(--SecondFontColor);
    font-family: var(--FirstFont);
}
.main {
    overflow: hidden;
}


/*=============== Header ===============*/
.header {
    width: 100%;
    padding: 10px 50px;
    padding-right: 50px;
    background: transparent;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 2000;
    transition: .4s ease;
    -webkit-transition: .4s ease;
    -moz-transition: .4s ease;
    -ms-transition: .4s ease;
    -o-transition: .4s ease;
}
.blur-header::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 1000%;
    height: 100%;
    background-color: #00000018;
    backdrop-filter: blur(20px);
    z-index: -1;

}
.website-logo {
    font-family: 'Satisfy', cursive;
    font-weight: 600;
    color: var(--SecondFontColor);
    font-size: 1.8rem;
    text-decoration: none;
    text-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
    text-align: center;
}
.nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    transition: 0.3s ease;
    -webkit-transition: 0.3s ease;
    -moz-transition: 0.3s ease;
    -ms-transition: 0.3s ease;
    -o-transition: 0.3s ease;
}
.list-items {
    display: flex;
    justify-content: space-between;
    align-items: center;
    list-style: none;
}
.list-items .nav-item {
    margin-left: 30px;
}
.list-items .nav-item .list-link {
    text-decoration: none;
    color: var(--SecondFontColor);
    padding-bottom: 10px;
}
.list-items .nav-item .list-link:hover {
    border-bottom: 2px solid var(--SecondFontColor);
}
.account{
    display: flex;
    justify-content: space-around;
    width: 200px;
    height: 40px;
    border-radius: 25px;
    -webkit-border-radius: 25px;
    -moz-border-radius: 25px;
    -ms-border-radius: 25px;
    -o-border-radius: 25px;
    position: relative;
    
}
.account-icon {
    font-size: 30px;
    color: var(--FifthColor);
}
.account h3, .log-out-btn {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 10px;
    font-family: var(--SecondFont);
}
.log-out{
    width: 100px;
    height: 40px;
    border-radius: 20px;
    background-color: var(--MainColor);
    color: var(--SecondFontColor);
    border: 1px solid var(--SecondColor);
    outline: none;
    box-shadow:  0 30px 20px rgba(0,0,0,0.4);
    transition: all 0.2s ease;
    cursor: pointer;
}
.log-out:active{
background-color: var(--SecondColor);
transform: scale(0.96);
}
/*=============== Home ===============*/
.home {
    height: 100vh;
    position: relative;
    width: 100%;
}
.home-img {
    position: absolute;
    background-image: url(img/back.jpg);
    width: 100%;
    height: 100%;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
}
.home-shadow{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: linear-gradient(180deg, #0000006e, #000000d8)
}
.home-data {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    text-align: center;
    -webkit-transform: translate(-50%,-50%);
    -moz-transform: translate(-50%,-50%);
    -ms-transform: translate(-50%,-50%);
    -o-transform: translate(-50%,-50%);
    opacity: 0;
    animation: transationtitle 2.5s 3.2s forwards;
}
.subtitle-home {
    font-size: 1.25rem;
    margin-bottom: .5rem;
    color: var(--SecondFontColor);
}
.hide {
    font-size: 10rem;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    animation: transitionsub 3s forwards;
}
@keyframes transitionsub {
    0% {
        opacity: 0;
    }
    50% {
        opacity: 1;
    }
    100% {
        opacity: 0;
    }
}
.home-title {
    font-size: 2.75rem;
    margin-bottom: 1rem;
    color: var(--SecondFontColor);
}
.home-discription {
    margin-bottom: 32px;
    color: var(--FontColor);
}
.start-jorn {
    width: 200px;
    height: 35px;
    border-radius: 25px;
    -webkit-border-radius: 25px;
    -moz-border-radius: 25px;
    -ms-border-radius: 25px;
    -o-border-radius: 25px;
    outline: none;
    border: none;
    background-color: var(--SecondFontColor);
    cursor: pointer;
}
.start-jorn:hover {
    background-color: var(--Fourtholor);
}
.start-jorn:active{
    background-color: var(--SecondColor);
    transform: scale(0.96);
}
@keyframes transationtitle{
    from {
        opacity: 0;
        top: 70%;
        left: 50%;
        transform: translate(-50%,-50%);
    }
    to {
        opacity: 1;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
    }
}
/*=============== Explore ===============*/
.explore {
    height: 100vh;
    position: relative;
    width: calc(100% - 100px);
}
.container {
    position: absolute;
    width: 100%;
    height: calc(50% - 4rem);
    margin-left: 50px;
    margin-top: 4rem;
    opacity: 1;
}
.explore-data {
    position: absolute;
    width: 100%;
    height: 50%;
    top: 0;
    left: 50%;
    padding-top: 30px;
    transform: translateX(-50%);
    -webkit-transform: translateX(-50%);
    -moz-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    -o-transform: translateX(-50%);
}

.explore-title {
    font-size: 2.75rem;
    margin-bottom: 1rem;
    color: var(--SecondFontColor);
    text-align: center;
}

.explore-discription {
    margin-bottom: 32px;
    color: var(--FontColor);
    text-align: center;
}
.search-container {
    position: absolute;
    width: 100%;
    height: 50%;
    bottom: 0;
    z-index: 50;
}

.wrapper {
    position: absolute;
    top: 30%;
    left: 50%;
    transform: translateX(-50%);
    margin: 0 auto;
    background: #ffffff;
    border-radius: 5px;
    box-shadow: 0px 1px 5px 3px rgba(0,0,0,0.15);
    width: 450px;
}

#search {
width:100%;
border: none;
height: 50px;
border-radius: 5px;
padding: 0px 40px 0px 10px;
font-size: 18px;
box-shadow: 0px 1px 4px rgba(0,0,0,0.1);
}

#search:focus {
outline: none;
}

#search-icon {
position: absolute;
border: none;
background: none;
top: 0;
right: 0;
height: 50px;
line-height: 50px;
padding: 0;
width: 50px;
}

#search-icon:focus {
outline: none;
}

#search-icon i {
width: 100%;
color: var(--MainColor);
line-height: 50px;
font-size: 22px;
}

.results {
padding: 0px;
}

.results ul {
margin: 0;
    padding: 0; 
}
.results ul li {
list-style: none;
border-radius: 3px;
opacity: 0;
display: none;
padding: 8px 12px;
transition: all .5s linear;
cursor: pointer;
}

.show .results ul li {
opacity: 1;
display: block;

}
.show .results ul li a {
    text-decoration: none;
    color: var(--MainColor);
}
.show .results {
padding: 10px;
max-height: 300px;
overflow-y: auto;

}

.results ul li:hover {
background: #ececec
}

.explore-container {
    position: absolute;
    width: 100%;
    height: 50%;
    margin-left: 50px;
    bottom: 10px;
}
.popular-slide{
    position: absolute;
    /* grid-template-columns: repeat(4, 1fr);
    gap: 70px; */
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    width: 100%;
    height: 100%;
}
.popular-card {
    position: relative;
    width: calc((100% - 70px) / 4);
    height: 100%;
    overflow: hidden;
    border-radius: 25px;
    -webkit-border-radius: 25px;
    -moz-border-radius: 25px;
    -ms-border-radius: 25px;
    -o-border-radius: 25px;
    box-shadow: 0 30px 50px #070707;
    cursor: pointer;
}

.popular-img {
    position: absolute;
    transition: transform 1s;
    -webkit-transition: transform 0.4s;
    -moz-transition: transform 0.4s;
    -ms-transition: transform 0.4s;
    -o-transition: transform 0.4s;
    object-fit: cover;
    object-position: center;
    width: 100%;
    height: 100%;

}
.popular-img-title {
    position: absolute;
    bottom: 12px;
    left: 15px;
    color: #fff;
}

.popular-img-shadow {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: linear-gradient(180deg, #00000017, #0000003b)
}

.popular-card:hover .popular-img {
    transform: scale(2);
    -webkit-transform: scale(2);
    -moz-transform: scale(2);
    -ms-transform: scale(2);
    -o-transform: scale(2);
}
/*=============== About Site ===============*/
.about {
    height: 100vh;
    position: relative;
    width: calc(100% - 100px);
}
.about-container{
    position: absolute;
    width: 100%;
    height: calc(100% - 4rem);
    margin-top: 4rem;
    margin-left: 50px;
    display: grid;
    grid-template-columns: repeat(2,1fr);
    gap: 70px;
}
.about-data {
    position: absolute;
    width: 50%;
    height: calc(100%);
    left: 0;
    top: 0;
}
.about-title{
    margin-bottom: 1rem;
    padding: 2rem;
    font-size: 2.75rem;
}
.about-parg{
    padding: 2rem;
}
.about-card{
    position: absolute;
    width: 50%;
    height: calc(100% - 2rem);
    overflow: hidden;
    padding: 2rem;
    right: 0;
    top: 0;
}
.about-img{
    width: 80%;
    height: 90%;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    object-fit: cover;
    object-position: center;
    box-shadow: 0 30px 50px #070707;
}
.about-shadow {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 80%;
    height: 90%;
    background-image: linear-gradient(180deg, #00000017, #0000003b)
}
/*=============== Book Now ===============*/
.book {
    height: 100vh;
    position: relative;
    width: 100%;
}
.book-container{
    background-color: var(--Fourtholor);
    position: absolute;
    width: 100%;
    height: calc(100% - 8rem);
    margin-top: 4rem;
    margin-bottom: 4rem;
    padding-left: 50px;
    padding-top: 2rem;
    display: grid;
    grid-template-columns: repeat(2,1fr);
    gap: 70px;
}
.book-data {
    position: absolute;
    width: 50%;
    height: calc(100%);
    right: 0;
    top: 0;
    padding-top: 2.5rem;
}
.book-title{
    margin-bottom: 1rem;
    padding: 2rem;
    font-size: 2.75rem;
    color: var(--SixthColor);
}
.book-parg{
    padding: 2rem;
    color: var(--SecondFontColor);
}
.book-now {
    position: absolute;
    width: 130px;
    height: 40px;
    border-radius: 20px;
    left: 50%;
    background-color: var(--MainColor);
    color: var(--SecondFontColor);
    border: 1px solid var(--SecondColor);
    outline: none;
    box-shadow:  0 30px 20px rgba(0,0,0,0.4);
    transition: all 0.2s ease;
    cursor: pointer;
}
.book-now:active{
    background-color: var(--SecondColor);
    transform: scale(0.96);
}
.book-card{
    position: absolute;
    width: 50%;
    height: calc(100% - 2rem);
    overflow: hidden;
    padding: 2rem;
    left: 0;
    top: 0;
}
.book-img{
    width: 70%;
    height: 65%;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    object-fit: cover;
    object-position: center;
    box-shadow: 0 30px 50px #070707;
}
.book-shadow {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 70%;
    height: 65%;
    background-image: linear-gradient(180deg, #00000017, #0000003b)
}
/*=============== Contact Us ===============*/
.contact-us{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}
.contact-us-conatiner {
    margin-top: 2rem;
    position: relative;
    min-width: 1100px;
    min-height: 550px;
    display: flex;
    z-index: 1000;
}
.contactInfo{
    position: absolute;
    top: 40px;
    width: 350px;
    height: calc(100% - 80px);
    background-color: var(--Fourtholor);
    z-index: 1;
    padding: 40px;
    display: flex;
    justify-content: center;
    flex-direction: column;
    justify-content: space-between;
    box-shadow: 0 20px 25px rgba(0,0,0,0.15);
}
.contactInfo .contact-title{
    color: var(--SixthColor);
    font-size: 24px;
    font-weight: 500;
}
.contactInfo ul.info{
    position: relative;
    margin: 20px 0;
}
.contactInfo ul.info li {
    position: relative;
    list-style: none;
    display: flex;
    margin: 20px 0;
    cursor: pointer;
    align-items: flex-start;
}
.contactInfo ul.info li span:nth-child(1) {
    width: 30px;
    min-width: 30px;
}
.contactInfo ul.info li span:nth-child(1) img {
    max-width: 100%;
    filter: invert(1);
}
.contactInfo ul.info li span:nth-child(2){
    color: var(--SixthColor);
    margin-left: 10px;
    font-weight: 300;
}
.contactInfo ul.sci{
    position: relative;
    display: flex;
}
.contactInfo ul.sci li {
    list-style: none;
    margin-right: 15px;
}
.contactInfo ul.sci li a {
    text-decoration: none;
}
.contactInfo ul.sci li a img {
    filter: invert(1);
    width: 30px;
    max-width: 100%;
}
.contactForm{
    position: absolute;
    padding: 70px 50px;
    padding-left: 250px;
    margin-left: 150px;
    width: calc(100% - 150px);
    height: 100%;
    background-color: var(--FifthColor);
    box-shadow: 0 50px 50px rgba(0,0,0,0.25);
}
.contactForm h2 {
    color: var(--SecondColor);
    font-size: 24px;
    font-weight: 500;
}
.contactForm .formBox {
    position: relative;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    padding-top: 30px;
}
.contactForm .formBox .inputBox {
    position: relative;
    margin-bottom: 35px;

}
.contactForm .formBox .inputBox.w50 {
    width: 47%;
}
.contactForm .formBox .inputBox.w100 {
    width: 100%;
}
.contactForm .formBox .inputBox input,
.contactForm .formBox .inputBox textarea {
    width: 100%;
    resize: none;
    padding: 5px 0;
    font-size: 18px;
    font-weight: 300;
    color: var(--dark-color);
    border: none;
    outline: none;
    background-color: var(--FifthColor);
    border-bottom: 1px solid var(--SecondColor);
}
.contactForm .formBox .inputBox textarea {
    height: 120px;
}
.contactForm .formBox .inputBox span {
    position: absolute;
    left: 0;
    padding: 5px 0;
    pointer-events: none;
    font-size: 18px;
    font-weight: 300;
    transition: 0.3s;
}
.contactForm .formBox .inputBox input:focus ~ span,
.contactForm .formBox .inputBox input:valid ~ span,
.contactForm .formBox .inputBox textarea:focus ~ span,
.contactForm .formBox .inputBox textarea:valid ~ span{
    transform: translateY(-20px);
    font-size: 13px;
    font-weight: 400;
    letter-spacing: 1px;
    color: var(--MainColor);
    font-weight: 500;
}
.contactForm .formBox .inputBox input[type="submit"]{
    position: relative;
    cursor: pointer;
    background-color: var(--SecondColor);
    color: var(--SixthColor);
    border: none;
    max-width: 150px;
    padding: 20px;
}
.contactForm .formBox .inputBox input[type="submit"]:hover {
    background-color: var(--Fourtholor);
}
.contactForm .formBox .inputBox input[type="submit"]:active {
        background-color: var(--Fourtholor);
        transform: scale(0.96);
}

@media (max-width: 1200px){
    .contact-us-conatiner {
        width: 90%;
        min-width: auto;
        margin: 20px;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
    }
    .contactInfo {
        top: 0;
        height: 550px;
        position: relative;
        box-shadow: none;
    }
    .contactForm {
        position: relative;
        width: calc(100% - 350px);
        padding-left: 0;
        margin-left: 0;
        padding: 40px;
        height: 550px;
        box-shadow: none;
    }
}
@media (max-width: 991px){
    .contact-us::before{
        display: none;
    }
    .contact-us-conatiner {
        display: flex;
        flex-direction: column-reverse;
    }
    .contactForm {
        width: 100%;
        height: auto;
    }
    .contactInfo{
        width: 100%;
        height: auto;
        flex-direction: row;
    }
    .contactInfo ul.sci{
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
    }
}
@media (max-width: 600px){
    .contactForm {
        padding: 25px;
    }
    .contactInfo {
        padding: 25px;
        flex-direction: column;
        align-items: flex-start;
    }
    .contactInfo ul.sci {
        margin-top: 40px;
    }
    .formBox .inputBox.w50 {
        width: 100%;
    }
}
/*=============== footer ===============*/
footer {
    background-color: #041616;
    color: #fff;
    padding: 20px 0;
}

.footer-container {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    justify-content: center;
    align-items: center;
}

.footer-content h3 {
    margin-bottom: 10px;
    text-align: center;
}
ul.social{
    position: relative;
    display: flex;
}
ul.social li {
    list-style: none;
    margin-right: 15px;
}
ul.social li a {
    text-decoration: none;
}
ul.social li a img {
    filter: invert(1);
    width: 15px;
    max-width: 100%;
}

.copyright {
    margin-top: 20px;
    text-align: center;
}

/* Responsive adjustments */
@media only screen and (max-width: 600px) {
    .footer-content {
        flex: 100%;
        margin-right: 0;
        margin-bottom: 20px;
    }
}
        </style>
        <!-- Icon of the website -->
        <link rel="icon" href="img/distance.png">
        <!-- Icon inside page -->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&family=Poppins:wght@400;500;600&display=swap"
            rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    </head>

    <body>
        <header class="header" id="header">
            <nav class="nav">
                <a href="#" class="website-logo">Traveler</a>
                <div class="nav-links show-menu" id="nav-links">
                    <ul class="list-items">
                        <li class="nav-item">
                        <a href="#home" class="list-link"><i class="ri-home-4-line"></i> Home</a>
                        </li>
                        <li class="nav-item">
                        <a href="#countries" class="list-link"><i class="ri-compass-4-line"></i> Explore</a>
                        </li>
                        <li class="nav-item">
                        <a href="#about" class="list-link"><i class="ri-information-line"></i> About</a>
                        </li>
                        <li class="nav-item">
                        <a href="#book" class="list-link"><i class="ri-article-fill"></i> Book</a>
                        </li>
                        <li class="nav-item">
                        <a href="#contact-us" class="list-link"><i class="ri-mail-line"></i> Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="account">
                    <div class="account-icon"><i class="ri-account-circle-fill"></i></div>
                   <h3><?php echo $res_name?></h3></p>
                   <div class="log-out-btn">
                    <button class="log-out" id="log-out" name='logged_out' onclick="logout()">Log Out</button>
                   </div>
                </div>
            </nav>
        </header>
        <main class="main">
        <section class="home section" id="home">
            <div class="home-img"></div>
            <div class="home-shadow"></div>
            <div class="home-container">
                <h1 class="hide">Traveler</h1>
                <div class="home-data">
                    <h3 class="subtitle-home">Welcome To Traveler website</h3>
                    <h1 class="home-title"><span>Explore</span> your fun world</h1>
                    <p class="home-discription">Enjoy explore your world, discover mountains, islands, archaeological
                        monuments and fun places</p>
                        <button class="start-jorn" id="start-jorn" onclick="location.href = 'about.php'">
                            About Traveling <i class="ri-arrow-right-line"></i>
                        </button>
                </div>
                <!--  -->
            </div>
        </section>
        <section class="explore section" id="countries">
            <div class="container">
            <div class="explore-data">
                <h2 class="explore-title">Explore</h2>
                <p class="explore-discription">Find the place that make you in a dream</p>
            </div>
            <div class="search-container" id="search-container">
                <div class="wrapper">
                    <input type="text" name="search" id="search" placeholder="Type to search" autocomplete="chrome-off">
                    <button id="search-icon"><i class="ri-search-line"></i></button>
                    <div class="results">
                    </div>
                </div>
            </div>
            </div>
            <div class="explore-container">
            <div class="popular-slide grid">
                <article class="popular-card">
                    <a href="travel/mountains/country.php" class="img-link"><img src="img/mountains.jpg" alt="Mountains" class="popular-img">
                        <h3 class="popular-img-title">Mountains</h3>
                        <div class="popular-img-shadow"></div></a>
                </article>
                <article class="popular-card">
                    <a href="travel/island/country.php" class="img-link">
                        <img src="img/island.jpg" alt="island" class="popular-img">
                    <h3 class="popular-img-title">Islands</h3>
                    <div class="popular-img-shadow"></div>
                    </a>
                </article>
                <article class="popular-card">
                    <a href="travel/Archaeology/country.php" class="img-link">
                        <img src="img/archaeological.jpg" alt="monuments" class="popular-img">
                    <h3 class="popular-img-title">Archaeological <br> Monuments</h3>
                    <div class="popular-img-shadow"></div>
                    </a>
                </article>
                <article class="popular-card">
                    <a href="travel/entertainment/country.php" class="img-link">
                        <img src="img/disneyland.jpg" alt="fun-place" class="popular-img">
                    <h3 class="popular-img-title">Fun Places</h3>
                    <div class="popular-img-shadow"></div>
                    </a>
                </article>
            </div>
    </div>
        </section>
        <section class="about" id="about">
            <div class="about-container">
            <div class="about-data">
                <h2 class="about-title">About Site</h2>
                <p class="about-parg">We have provided you with an abundance of tourist places to enjoy the natural scenery and discover the world. <br>We hope you find your destination.</p>
            </div>
            <article class="about-card">
            <div class="about-photo">
                <img src="img/paris.jpg" alt="About-Photo" class="about-img">
                <div class="about-shadow"></div>
            </div>
        </article>
        </div>
        </section>
        <section class="book" id="book">
            <div class="book-container">
            <div class="book-data">
                <h2 class="book-title">Book Now</h2>
                <p class="book-parg">Discover your next literary escape at BookNow! With a wide selection of genres and a seamless user experience, finding and purchasing your next favorite read is just a few clicks away.</p>
                <button class="book-now" id="book-now" onclick="document.location = 'book.php'">Book Now</button>
            </div>
            <article class="book-card">
            <div class="book-photo">
                <img src="img/book.jpg" alt="book-Photo" class="book-img">
                <div class="book-shadow"></div>
            </div>
        </article>
        </div>
        </section>
        <section class="contact-us" id="contact-us">
            <div class="contact-us-conatiner">
                <div class="contactInfo">
                    <div class="contactInfo-data">
                        <h2 class="contact-title">Contact Info</h2>
                        <ul class="info">
                            <li>
                                <span><img src="img/location.png" alt="Location Icon"></span>
                                <span>Damietta<br>
                                    New Damietta <br>
                                </span>
                            </li>
                            <li>
                                <span><img src="img/email.png" alt="Email Icon"></span>
                                <span>lorem@ipsum.com</span>
                            </li>
                            <li>
                                <span><img src="img/call.png" alt="Call Icon"></span>
                                <span>310-286-1623</span>
                            </li>
                        </ul>
                    </div>
                    <div class="social">
                        <ul class="sci">
                            <li><a href="#"><img src="img/facebook.png" alt=""></a></li>
                            <li><a href="#"><img src="img/twitter.png" alt=""></a></li>
                            <li><a href="#"><img src="img/instagram.png" alt=""></a></li>
                            <li><a href="#"><img src="img/pinterest.png" alt=""></a></li>
                            <li><a href="#"><img src="img/linkedin.png" alt=""></a></li>
                        </ul>
                    </div>
                </div>
                <div class="contactForm">
                    <form action="" method="post">
                    <h2>Send a Message</h2>
                    <div class="formBox">
                        <div class="inputBox w50">
                            <input type="text" required class="required" name="firstname">
                            <span>First Name</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="text" required class="required" name="lastname">
                            <span>Last Name</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="email" required class="required" name="email">
                            <span>Email Address</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="tel" required class="required" name="number">
                            <span>Mobile Number</span>
                        </div>
                        <div class="inputBox w100">
                            <textarea required class="required" name="message"></textarea>
                            <span>Write your message here...</span>
                        </div>
                        <div class="inputBox w100">
                            <input type="submit"  name="submit" value="Send" id="send">
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </section>
        </main>
        <footer class="footer">
            <div class="footer-container">
                <div class="footer-content">
                    <h3>Follow Us</h3>
                    <ul class="social">
                        <li><a href="#"><img src="img/facebook.png" alt=""></a></li>
                        <li><a href="#"><img src="img/twitter.png" alt=""></a></li>
                        <li><a href="#"><img src="img/instagram.png" alt=""></a></li>
                        <li><a href="#"><img src="img/pinterest.png" alt=""></a></li>
                        <li><a href="#"><img src="img/linkedin.png" alt=""></a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2023 Your Website. All rights reserved.</p>
            </div>
        </footer>
        <script>
            // Blur Header

const blurHeader = () =>{
    const header = document.getElementById('header')
    
    this.scrollY >= 50 ? header.classList.add('blur-header') 
                       : header.classList.remove('blur-header')
}
window.addEventListener('scroll', blurHeader)


// Search Bar
let searchable = [
    "Egypt","France","Turkey","America","Germany"];
  const searchInput = document.getElementById('search');
const searchWrapper = document.querySelector('.wrapper');
const resultsWrapper = document.querySelector('.results');

searchInput.addEventListener('keyup', () => {
let results = [];
let input = searchInput.value;
if (input.length) {
  results = searchable.filter((item) => {
    return item.toLowerCase().includes(input.toLowerCase());
  });
}
renderResults(results);
});

function renderResults(results) {
if (!results.length) {
  return searchWrapper.classList.remove('show');
}

const content = results
  .map((item) => {
    return `<li><a href='travel/${item}/country.php'><button style="width: 100%;
    border: none;
    background: none;
    text-align: justify;
    font-size: 1rem;
    cursor: pointer;">${item}</button></a></li>`;
    
  })
  .join('');

searchWrapper.classList.add('show');
resultsWrapper.innerHTML = `<ul>${content}</ul>`;
}

// Booking

//login
function logout() {
    // Replace the current history entry with the login page
    history.replaceState(null, null, 'login.php');

    // Redirect to the login page
    window.location.replace('login.php');
}


        </script>
        <?php
            include("config.php");
            
            if(isset($_POST['submit'])){
                
                $firstname=$_POST['firstname'];
                $lastname=$_POST['lastname'];
                $email=$_POST['email'];
                $number=$_POST['number'];
                $message=$_POST['message'];
                $verify_query=mysqli_query($con, "SELECT `message` FROM contact WHERE email='$email' ");
                if(mysqli_num_rows($verify_query)!=0){
                    $row=mysqli_fetch_assoc($verify_query);
                    $retreived=$row['message'];
                    if ($retreived == $message){
                        echo "<script>window.alert('You already submitted this message before!')</script><br>";

                    }
                    else{
                        mysqli_query($con,"INSERT INTO contact(firstname,lastname,email,`number`,`message`)VALUES('$firstname','$lastname','$email','$number','$message')");
                            echo "<script>window.alert('Submitted Successfully!')</script><br>";
                    }}
                    else{
                    
                    mysqli_query($con,"INSERT INTO contact(firstname,lastname,email,`number`,`message`)VALUES('$firstname','$lastname','$email','$number','$message')");
                    echo "<script>window.alert('Submitted Successfully!')</script><br>";
                }
            }
        
        ?>
    </body>

</html>