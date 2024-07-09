<?php
session_start();
// session_destroy();
if(!isset($_SESSION['valid'])){
    header("location:http://localhost/traveler/login.php");
}
$res_name=$_SESSION['name'];
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
        <title>Traveler | Germany</title> <!-- اكتب اسم الدولة هنا بجانب اسم الموقع-->
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
                <img src="back.jpg" alt="Countary Image"> <!-- ضع خلفية البلد هنا-->
                 <div class="img-shadow"></div>
                <div class="home-data">
                    <h1 class="country-title">Germany</h1>   <!-- اكتب اسم البلد هنا-->
                   <h2 class="country-subtitle">A place where everything is beautiful</p>
                </div>
              </div>
              <!-- Heidelberg -->
              <div class="swiper-slide">  <!--علشان تضيفي اكتر من مكان انسخي الديف بداية من هنا لاخره وعدليه على حسب المكان بس متغيريش اسماء الكلاس-->
                <img src="h1.jpg" alt="Countary Image">   <!-- ضع صورة المكان هنا-->
                <div class="img-shadow"></div>
                <div class="countary-details" id="countary-details">
                    <h2 class="place-title">Heidelberg</h2>  <!-- اكتب اسم المكان هنا-->
                    <p class="about-place" id="about-place">
                        Heidelberg is a city in the German state of Baden-Württemberg, situated on the river Neckar in south-west Germany. As of the 2016 census, its population was 159,914, of which roughly a quarter consisted of students.

        Located about 78 km (48 mi) south of Frankfurt, Heidelberg is the fifth-largest city in Baden-Württemberg. Heidelberg is part of the densely populated Rhine-Neckar Metropolitan Region.
                        
        <a href="https://en.wikipedia.org/wiki/Heidelberg" class="link-more">More About Heidelberg</a> <!--  ضع رابط ويكبيديا عن المكان واكتب اسم المكان-->
                    </p>
                </div>
                <div class="img-card" id="img-card">
                    <img src="h.jpg" alt="Countary Image"> <!-- ضع صوره صغيره للمكان-->
                    <div class="card-shadow"></div>
                    <div class="trip-details">
                        <div class="trip-container">
                            <div class="price">
                                <p id="p1">Price: 300$</p><!--سعر الرحلة للمكان-->
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
              <!-- Bonn -->
              <div class="swiper-slide">  <!--علشان تضيفي اكتر من مكان انسخي الديف بداية من هنا لاخره وعدليه على حسب المكان بس متغيريش اسماء الكلاس-->
                <img src="bonn.jpg" alt="Countary Image">   <!-- ضع صورة المكان هنا-->
                <div class="img-shadow"></div>
                <div class="countary-details" id="countary-details">
                    <h2 class="place-title">Bonn</h2>  <!-- اكتب اسم المكان هنا-->
                    <p class="about-place" id="about-place">
                        Bonn is a federal city in the German state of North Rhine-Westphalia, located on the banks of the Rhine. It has a population of over 300,000. About 24 km (15 mi) south-southeast of Cologne, Bonn is in the southernmost part of the Rhine-Ruhr region, Germany's largest metropolitan area, with over 11 million inhabitants. It is a university city, was the birthplace of Ludwig van Beethoven and was the capital of West Germany from 1949 to 1990. Bonn was the seat of government of reunited Germany from 1990 to 1999.

Founded in the 1st century BC as an Ubii and then Roman settlement in the province Germania Inferior, Bonn is one of Germany's oldest cities.
        <a href="https://en.wikipedia.org/wiki/Bonn" class="link-more">More About Bonn</a> <!--  ضع رابط ويكبيديا عن المكان واكتب اسم المكان-->
                    </p>
                </div>
                <div class="img-card" id="img-card">
                    <img src="bon1.jpg" alt="Countary Image"> <!-- ضع صوره صغيره للمكان-->
                    <div class="card-shadow"></div>
                    <div class="trip-details">
                        <div class="trip-container">
                            <div class="price">
                                <p id="p2">Price: 250$</p><!--سعر الرحلة للمكان-->
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
              <!--Garmisch  -->
              <div class="swiper-slide">  <!--علشان تضيفي اكتر من مكان انسخي الديف بداية من هنا لاخره وعدليه على حسب المكان بس متغيريش اسماء الكلاس-->
                <img src="Garmisch.jpg" alt="Countary Image">   <!-- ضع صورة المكان هنا-->
                <div class="img-shadow"></div>
                <div class="countary-details" id="countary-details">
                    <h2 class="place-title">Garmisch</h2>  <!-- اكتب اسم المكان هنا-->
                    <p class="about-place" id="about-place">
                        Garmisch-Partenkirchen is an Alpine ski town in Bavaria, southern Germany.
    
                        It is the seat of government of the district of Garmisch-Partenkirchen (abbreviated GAP), in the Oberbayern region, which borders Austria. Nearby is Germany's highest mountain, Zugspitze, at 2,962 metres (9,718 ft) above sea level.
        <a href="https://en.wikipedia.org/wiki/Garmisch" class="link-more">More About Garmisch</a> <!--  ضع رابط ويكبيديا عن المكان واكتب اسم المكان-->
                    </p>
                </div>
                <div class="img-card" id="img-card">
                    <img src="gar.jpg" alt="Countary Image"> <!-- ضع صوره صغيره للمكان-->
                    <div class="card-shadow"></div>
                    <div class="trip-details">
                        <div class="trip-container">
                            <div class="price">
                                <p id="p3">Price: 200$</p><!--سعر الرحلة للمكان-->
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
        document.querySelectorAll('#book').forEach(element=>{
  element.onclick = function(){
    window.location.href = "http://localhost/Traveler/book.php";
  }
})
  //login
  function logout() {
                history.replaceState(null, null, 'http://localhost/traveler/login.php');
                window.location.replace('http://localhost/traveler/login.php');
            }
            var price=document.getElementById("p3");
        var t_price=price.textContent;
        var f_price=parseFloat(t_price.replace("Price: ","","$"));
        localStorage.setItem("price9",f_price);

        var price1=document.getElementById("p2");
        var t1_price=price1.textContent;
        var f1_price=parseFloat(t1_price.replace("Price: ","","$"));
        localStorage.setItem("price0",f1_price);

        var price2=document.getElementById("p1");
        var t2_price=price2.textContent;
        var f2_price=parseFloat(t2_price.replace("Price: ","","$"));
        localStorage.setItem("price11",f2_price);

    </script>
    </body>
</html>