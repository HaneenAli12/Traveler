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
            background-color: #0000005b;
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
            background-color: #092021c9;
        }

        .home-data {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            -webkit-transform: translate(-50%,-50%);
            -moz-transform: translate(-50%,-50%);
            -ms-transform: translate(-50%,-50%);
            -o-transform: translate(-50%,-50%);
            opacity: 0;
            animation: transationtitle 2.5s 3.2s forwards;
        }

        .hide {
            font-size: 5.5rem;
            position: absolute;
            top: 50%;
            left: 50%;
            color: var(--FifthColor);
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

        
        @keyframes transationtitle{
            from {
                opacity: 0;
                top: 60%;
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
    /*======================== Books ====================*/

            section {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-around;
                padding: 20px;
            }

            .book-card {
                background-color: var(--FifthColor);
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                margin: 15px;
                overflow: hidden;
                width: 300px;
                transition: transform 0.3s ease-in-out;
                cursor: pointer;
                height: 550px;
            }
            .book-card:hover {
                transform: scale(1.05);
            }

            .book-image {
                height: 200px;
                object-fit: cover;
                width: 100%;
            }
            hr {
                background-color: var(--FifthColor);
            }
            .book-info {
                padding: 15px;
            }

            h2 {
                color: #252627;
                margin-bottom: 10px;
            }

            p {
                color: #222;
                line-height: 1.4;
            }
            
        /*============================= author section ==========================*/
        .author {
            height: 120vh;
            position: relative;
            width: 1200px;
            color:white;
        }
        .author-container{
            position: absolute;
            background-color: var(--Fourtholor);
            width: calc(100% - 100px);
            height: calc(100% - 14rem);
            margin-top: 7rem;
            margin-left: 50px;
            display: grid;
            grid-template-columns: repeat(2,1fr);
            gap: 70px;
            box-shadow: 0 30px 50px #070707;
        }
        .author-data {
            position: absolute;
            width: 50%;
            height: 100%;
            top: 0;
            left: 0;
            color:white;
            
        }
        
        .author-name {
            margin-bottom: 1rem;
            padding: 2.5rem;
            font-size: 2.75rem;
            color: var(--SixthColor);
        }
        .about-author{
            padding: 2.5rem;
            color: var(--SecondFontColor);
        }
        .about-author span,
        .about-author a{
            font-weight: bold;
            color: var(--SixthColor); 
        }
        .books {
            width: 100%;
            height: 100vh;
            padding: 4rem;
        }
        .books a {
            text-decoration: none;
        }
        .author-card{
            position: absolute;
            width: 50%;
            height: 100%;
            overflow: hidden;
            right: 0;
            top: 0;
        } 
        .author-card h2{
            margin-bottom: 1rem;
            padding: 2rem;
            font-size: 2rem;
            color: var(--SixthColor);
            text-align: center;
        }
        .author-img{
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
        .author-shadow {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 70%;
            height: 65%;
            background-image: linear-gradient(180deg, #00000017, #0000003b)
        }
        
        
    </style>
    <title>Traveler | Tourist Books</title>
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
                    <a href="home.php" class="list-link"><i class="ri-home-4-line"></i> Home</a>
                    </li>
                    <li class="nav-item">
                    <a href="home.php#countries" class="list-link"><i class="ri-compass-4-line"></i> Explore</a>
                    </li>
                    <li class="nav-item">
                    <a href="home.php#about" class="list-link"><i class="ri-information-line"></i> About</a>
                    </li>
                    <li class="nav-item">
                    <a href="home.php#book" class="list-link"><i class="ri-article-fill"></i> Book</a>
                    </li>
                    <li class="nav-item">
                    <a href="home.php#contact-us" class="list-link"><i class="ri-mail-line"></i> Contact Us</a>
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
            <div class="back"></div>
            <h1 class="hide">Through Times</h1>
            <div class="home-data">
                <section class="author" id="author">
                    <div class="author-container"><br>
                        <div class="author-data">
                            <h2 class="author-name">Ibn Battuta</h2>
                            <p class="about-author"><span>If we talk about Travel we should start with Ibn Battuta.</span>
                                Ibn Battuta was a medieval Moroccan traveler and scholar who is widely recognized for his extensive travels, covering much of the Islamic world and beyond.
                                He documented his experiences in the famous travelogue "Rihla," providing valuable insights into the cultures, societies, and landscapes of the regions he visited. <a href="https://en.wikipedia.org/wiki/Ibn_Battuta" class="link-more">More About Ibn Battuta and his book.</a> </p>
                        </div>
                        <article class="author-card">
                            <figcaption><h2>Ibn Battuta</h2></figcaption>
                            <div class="author-photo">
                                
                                <img class="author-img" src="./img/ibnBatota.jpg" alt="Ibn Batota">
                                <div class="author-shadow"></div>
                            </div>
                        </article>
                    
                    </div>
                </section>
     
            </div>
        </section>
        
   
    <hr>
    <section class="books">
    <a href="https://www.goodreads.com/book/show/40189.A_Year_in_Provence">
        <div class="book-card">
                <figure>
                    <img class="book-image" src="./img/first.jpg" alt="book">
                </figure>
                <div class="book-info">
                    <h2>Archaeological monuments in the Arab countries</h2>
                    <p>Mayle's book chronicles their first year in the 
                        200-year-old farmhouse that they bought in a rural 
                        area of Provence, including their struggles with the
                         language, renovation of the house, and settling in 
                         with their new neighbors</p>
                </div>
            
        </div>
        </a>
        
         
        <a href="https://www.litcharts.com/lit/the-art-of-travel/summary">
        <div class="book-card">
                <figure>
                    <img class="book-image" src="./img/second.jpg" alt="book2"> 
                </figure>
            <div class="book-info">
                <h2>The Art of Travel" by Alain de Botton</h2>
                <p>The Art of Travel is a philosophical look at the ubiquitous
                    but peculiar activity of travelling 'for pleasure', with 
                    thoughts on airports, landscapes, museums, holiday romances, 
                    photographs, exotic carpets and the contents of hotel mini-bars.</p>
            </div>
        </div>
        </a>
        <a href="https://en.wikipedia.org/wiki/The_Lost_City_of_Z_(book)">
        <div class="book-card">
                <figure>
                    <img class="book-image" src="./img/third.jpg" alt="third">
                </figure>
            
            
            <div class="book-info">
                <h2>The Lost City of Z </h2>
        <p>American author David Grann. Published in 2009, the book recounts the
             activities of the British explorer Percy Fawcett who, in 1925, 
             disappeared with his son in the Amazon rainforest while looking
              for the ancient "Lost City of Z". In the book, Grann recounts his
               own journey into the Amazon, by which he discovered new evidence about
                how Fawcett may have died.</p>
            </div>
        </div>
        </a>

        
    </section>
    </main>
    
    <script>
        // Blur Header

        const blurHeader = () =>{
        const header = document.getElementById('header')

        this.scrollY >= 50 ? header.classList.add('blur-header') 
                        : header.classList.remove('blur-header')
        }
        window.addEventListener('scroll', blurHeader)

        //login
        function logout() {
    // Replace the current history entry with the login page
    history.replaceState(null, null, 'login.php');

    // Redirect to the login page
    window.location.replace('login.php');
}
    </script>

</body>
</html>
