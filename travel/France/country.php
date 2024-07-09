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
        <title>Traveler | France</title> <!-- اكتب اسم الدولة هنا بجانب اسم الموقع-->
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
                    <h1 class="country-title">France</h1>   <!-- اكتب اسم البلد هنا-->
                   <h2 class="country-subtitle">A place where everything is beautiful</p>
                </div>
              </div>
              <!-- Eiffel Tower -->
              <div class="swiper-slide">  <!--علشان تضيفي اكتر من مكان انسخي الديف بداية من هنا لاخره وعدليه على حسب المكان بس متغيريش اسماء الكلاس-->
                <img src="back.jpg" alt="Countary Image">   <!-- ضع صورة المكان هنا-->
                <div class="img-shadow"></div>
                <div class="countary-details" id="countary-details">
                    <h2 class="place-title">Eiffel Tower</h2>  <!-- اكتب اسم المكان هنا-->
                    <p class="about-place" id="about-place">
                        The Eiffel Tower is a wrought-iron lattice tower on the Champ de Mars in Paris, France. It is named after the engineer Gustave Eiffel, whose company designed and built the tower from 1887 to 1889.

        Locally nicknamed "La dame de fer" (French for "Iron Lady"), it was constructed as the centerpiece of the 1889 World's Fair.
        <a href="https://en.wikipedia.org/wiki/Eiffel_Tower" class="link-more">More About Eiffel Tower </a> <!--  ضع رابط ويكبيديا عن المكان واكتب اسم المكان-->
                    </p>
                </div>
                <div class="img-card" id="img-card">
                    <img src="city.jpg" alt="Countary Image"> <!-- ضع صوره صغيره للمكان-->
                    <div class="card-shadow"></div>
                    <div class="trip-details">
                        <div class="trip-container">
                            <div class="price">
                               <p id="p1"> Price: 300$</p><!--سعر الرحلة للمكان-->
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
            
                <!--Louvre Museum  -->
              <div class="swiper-slide">  
                <img src="louvre1.jpg" alt="Countary Image">   <!-- ضع صورة المكان هنا-->
                <div class="img-shadow"></div>
                <div class="countary-details" id="countary-details">
                    <h2 class="place-title">Louvre Museum</h2>  <!-- اكتب اسم المكان هنا-->
                    <p class="about-place" id="about-place">
                        The Louvre or the Louvre Museum, is a national art museum in Paris, France. It is located on the Right Bank of the Seine in the city's 1st arrondissement (district or ward) and home to some of the most canonical works of Western art, including the Mona Lisa and the Venus de Milo. The museum is housed in the Louvre Palace, originally built in the late 12th to 13th century under Philip II. Remnants of the Medieval Louvre fortress are visible in the basement of the museum. Due to urban expansion, the fortress eventually lost its defensive function, and in 1546 Francis I converted it into the primary residence of the French Kings.

        The building was extended many times to form the present Louvre Palace.
                        
        <a href="https://en.wikipedia.org/wiki/Louvre" class="link-more">More About Louvre Museum </a> <!--  ضع رابط ويكبيديا عن المكان واكتب اسم المكان-->
                    </p>
                </div>
                <div class="img-card" id="img-card">
                    <img src="louvre2.jpg" alt="Countary Image"> <!-- ضع صوره صغيره للمكان-->
                    <div class="card-shadow"></div>
                    <div class="trip-details">
                        <div class="trip-container">
                            <div class="price">
                               <p id="p2"> Price: 350$</p>
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
            
            <!-- Nice city -->
              <div class="swiper-slide">  <!--علشان تضيفي اكتر من مكان انسخي الديف بداية من هنا لاخره وعدليه على حسب المكان بس متغيريش اسماء الكلاس-->
                <img src="n.jpg" alt="Countary Image">   <!-- ضع صورة المكان هنا-->
                <div class="img-shadow"></div>
                <div class="countary-details" id="countary-details">
                    <h2 class="place-title">Nice City</h2>  <!-- اكتب اسم المكان هنا-->
                    <p class="about-place" id="about-place">
                        Nice is a city in and the prefecture of the Alpes-Maritimes department in France.
                         The Nice agglomeration extends far beyond the administrative city limits, with a population of nearly one million on an area of 744 km2 (287 sq mi).
                         Located on the French Riviera, the southeastern coast of France on the Mediterranean Sea, at the foot of the French Alps, Nice is the second-largest
                          French city on the Mediterranean coast and second-largest city in the Provence-Alpes-Côte d'Azur region after Marseille. Nice is approximately 13 kilometres (8 mi) from the principality of Monaco and 30 kilometres (19 mi) from the French–Italian border.
        <a href="https://en.wikipedia.org/wiki/Nice" class="link-more">More About Nice city </a> <!--  ضع رابط ويكبيديا عن المكان واكتب اسم المكان-->
                    </p>
                </div>
                <div class="img-card" id="img-card">
                    <img src="n.jpg" alt="Countary Image"> <!-- ضع صوره صغيره للمكان-->
                    <div class="c1ard-shadow"></div>
                    <div class="trip-details">
                        <div class="trip-container">
                            <div class="price">
                               <p id="p3"> Price: 250$</p>
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
        localStorage.setItem("price15",f_price);

        var price1=document.getElementById("p2");
        var t1_price=price1.textContent;
        var f1_price=parseFloat(t1_price.replace("Price: ","","$"));
        localStorage.setItem("price16",f1_price);

        var price2=document.getElementById("p1");
        var t2_price=price2.textContent;
        var f2_price=parseFloat(t2_price.replace("Price: ","","$"));
        localStorage.setItem("price17",f2_price);
        console.log(f_price);
    </script>
    </body>
</html>