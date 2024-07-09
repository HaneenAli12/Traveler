<?php
session_start();
if(!isset($_SESSION['valid'])){
    header("location:http://localhost/traveler/login.php");
}
$res_name=$_SESSION['name'];
// session_destroy();
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
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
.book {
    cursor: pointer;
}
        </style>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="discription" content="Explore Your Funny">
        <title>Traveler | Turkey</title> <!-- اكتب اسم الدولة هنا بجانب اسم الموقع-->
        <!-- Link Css file -->
        <link rel="stylesheet" href="../country_style.css">
        <!-- Icon of the website -->
        <link rel="icon" href="../../img/distance.png">
        <!-- Icon inside page -->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&family=Poppins:wght@400;500;600&display=swap"
            rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
        <!-- Link Swiper's CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    </head>
    <body>
        <header class="header" id="header">
            <nav class="nav">
                <a href="#" class="website-logo">Traveler</a>
                <div class="nav-links show-menu" id="nav-links">
                <ul class="list-items">
                        <li class="nav-item">
                        <a href="http://localhost/traveler/home.php" class="list-link"><i class="ri-home-4-line"></i> Home</a>
                        </li>
                        <li class="nav-item">
                        <a href="http://localhost/traveler/home.php#countries" class="list-link"><i class="ri-compass-4-line"></i> Explore</a>
                        </li>
                        <li class="nav-item">
                        <a href="http://localhost/traveler/home.php#about" class="list-link"><i class="ri-information-line"></i> About</a>
                        </li>
                        <li class="nav-item">
                        <a href="http://localhost/traveler/home.php#book" class="list-link"><i class="ri-article-fill"></i> Book</a>
                        </li>
                        <li class="nav-item">
                        <a href="http://localhost/traveler/home.php#contact-us" class="list-link"><i class="ri-mail-line"></i> Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="account">
                    <div class="account-icon"><i class="ri-account-circle-fill"></i></div>
                   <h3><?php echo $res_name?></h3></p>
                   <div class="log-out-btn">
                    <button class="log-out" id="log-out" onclick="logout()">Log Out</button>
                   </div>
                </div>
            </nav>
        </header>
        <div class="swiper mySwiper">  
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="back1.jpg" alt="Countary Image"> <!-- ضع خلفية البلد هنا-->
                 <div class="img-shadow"></div>
                <div class="home-data">
                    <h1 class="country-title">Turkey</h1>   <!-- اكتب اسم البلد هنا-->
                   <h2 class="country-subtitle">A place where everything is beautiful</p>
                </div>
              </div>
              <!-- Estanboul -->
              <div class="swiper-slide">  <!--علشان تضيفي اكتر من مكان انسخي الديف بداية من هنا لاخره وعدليه على حسب المكان بس متغيريش اسماء الكلاس-->
                <img src="estanboul.jpg" alt="Countary Image">   <!-- ضع صورة المكان هنا-->
                <div class="img-shadow"></div>
                <div class="countary-details" id="countary-details">
                    <h2 class="place-title">Istanbul</h2>  <!-- اكتب اسم المكان هنا-->
                    <p class="about-place" id="about-place">
                        Istanbul, formerly known as Constantinople,is the largest city in Turkey, serving as the country's economic, cultural and historic hub. 
                        The city straddles the Bosporus Strait, lying in both Europe and Asia, and has a population of over 15 million residents, comprising 19% of the population of Turkey.Istanbul is the most populous European city and the world's 15th-largest city.
                        
        <a href="https://en.wikipedia.org/wiki/Istanbul" class="link-more">More About Instanbul </a> <!--  ضع رابط ويكبيديا عن المكان واكتب اسم المكان-->
                    </p>
                </div>
                <div class="img-card" id="img-card">
                    <img src="es1.jpg" alt="Countary Image"> <!-- ضع صوره صغيره للمكان-->
                    <div class="card-shadow"></div>
                    <div class="trip-details">
                        <div class="trip-container">
                            <div class="price">
                               <p id="p1"> Price: 50$ </p><!--سعر الرحلة للمكان-->
                            </div>
                            <div class="trip-rate" id="rate">
                                <p class="rate">Your Rating:</p> 
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                            </div>
                            <div class="book-now">
                                <button class="book" id="book">
                                    Book Now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              <!-- Cappadocia -->
              <div class="swiper-slide">  <!--علشان تضيفي اكتر من مكان انسخي الديف بداية من هنا لاخره وعدليه على حسب المكان بس متغيريش اسماء الكلاس-->
                <img src="cap.jpg" alt="Countary Image">   <!-- ضع صورة المكان هنا-->
                <div class="img-shadow"></div>
                <div class="countary-details" id="countary-details">
                    <h2 class="place-title">Cappadocia</h2>  <!-- اكتب اسم المكان هنا-->
                    <p class="about-place" id="about-place">
                        Cappadocia is a historical region in Central Anatolia, Turkey. It is largely in the provinces of Nevşehir, Kayseri, Aksaray, Kırşehir, Sivas and Niğde.
According to Herodotus,in the time of the Ionian Revolt (499 BC), the Cappadocians were reported as occupying a region from Mount Taurus to the vicinity of the Euxine (Black Sea).
        <a href="https://en.wikipedia.org/wiki/Cappadocia" class="link-more">More About Cappadocia </a> <!--  ضع رابط ويكبيديا عن المكان واكتب اسم المكان-->
                    </p>
                </div>
                <div class="img-card" id="img-card">
                    <img src="capp.jpg" alt="Countary Image"> <!-- ضع صوره صغيره للمكان-->
                    <div class="card-shadow"></div>
                    <div class="trip-details">
                        <div class="trip-container">
                            <div class="price">
                                <p id="p2">Price: 100$</p> <!--سعر الرحلة للمكان-->
                            </div>
                            <div class="trip-rate" id="rate">
                                <p class="rate">Your Rating:</p> 
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                            </div>
                            <div class="book-now">
                                <button class="book" id="book">
                                    Book Now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              <!-- Antalya -->
              <div class="swiper-slide">  <!--علشان تضيفي اكتر من مكان انسخي الديف بداية من هنا لاخره وعدليه على حسب المكان بس متغيريش اسماء الكلاس-->
                <img src="an.jpg" alt="Countary Image">   <!-- ضع صورة المكان هنا-->
                <div class="img-shadow"></div>
                <div class="countary-details" id="countary-details">
                    <h2 class="place-title">Antalya</h2>  <!-- اكتب اسم المكان هنا-->
                    <p class="about-place" id="about-place">
                        Antalya is the fifth-most populous city in Turkey as well as the capital of Antalya Province.It is seen as the "capital of tourism" in Turkey.Located on Anatolia's southwest coast bordered by the Taurus Mountains, Antalya is the largest Turkish city on the Mediterranean coast outside the Aegean region with over 2.6 million people in its metropolitan area.
        <a href="https://en.wikipedia.org/wiki/Antalya" class="link-more">More About Antalya </a> <!--  ضع رابط ويكبيديا عن المكان واكتب اسم المكان-->
                    </p>
                </div>
                <div class="img-card" id="img-card">
                    <img src="an1.jpg" alt="Countary Image"> <!-- ضع صوره صغيره للمكان-->
                    <div class="card-shadow"></div>
                    <div class="trip-details">
                        <div class="trip-container">
                            <div class="price" >
                                <p id="p3">Price: 150$</p> <!--سعر الرحلة للمكان-->
                            </div>
                            <div class="trip-rate" id="rate">
                                <p class="rate">Your Rating:</p> 
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                            </div>
                            <div class="book-now">
                                <button class="book" id="book">
                                    Book Now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-next swiper-Btn" id="swiper-Btn"></div>
        <div class="swiper-button-prev swiper-Btn" id="swiper-Btn"></div>
        <div class="swiper-pagination"></div>
    </div>
    
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../country.js"></script>
    <script>
        var price=document.getElementById("p3");
        var t_price=price.textContent;
        var f_price=parseFloat(t_price.replace("Price: ","","$"));
        localStorage.setItem("price",f_price);

        var price1=document.getElementById("p2");
        var t1_price=price1.textContent;
        var f1_price=parseFloat(t1_price.replace("Price: ","","$"));
        localStorage.setItem("price1",f1_price);

        var price2=document.getElementById("p1");
        var t2_price=price2.textContent;
        var f2_price=parseFloat(t2_price.replace("Price: ","","$"));
        localStorage.setItem("price2",f2_price);

        // console.log(f2_price)
        document.querySelectorAll('#book').forEach(element=>{
  element.onclick = function(){
    window.location.href = "http://localhost/traveler/book.php";
  }
})
  //login
  function logout() {
                history.replaceState(null, null, 'http://localhost/traveler/login.php');
                window.location.replace('http://localhost/traveler/login.php');
            }

    
    </script>
    </body>
</html>