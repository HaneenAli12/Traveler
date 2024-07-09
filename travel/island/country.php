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
        <title>Traveler | Islands</title> 
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
                <img src="wall1.jpg" alt="island Image"> 
                 <div class="img-shadow"></div>
                <div class="home-data">
                    <h1 class="country-title">Islands</h1>   
                   <h2 class="country-subtitle">A place where everything is beautiful</p>
                </div>
              </div>
              <!-- Saint Catherine -->
              <div class="swiper-slide">  
                <img src="maldives2.jpg" alt="maldives Image">  
                <div class="img-shadow"></div>
                <div class="countary-details" id="countary-details">
                    <h2 class="place-title">Maldives</h2>  
                    <p class="about-place" id="about-place">
                        Maldives, independent island country in the north-central Indian Ocean.
                         It consists of a chain of about 1,200 small coral islands and sandbanks
                          (some 200 of which are inhabited), grouped in clusters, or atolls.
                        The islands extend more than 510 miles (820 km) from north to south 
                        and 80 miles (130 km) from east to west. The northernmost atoll is about 
                        370 miles (600 km) south-southwest of the Indian mainland, and the central
                         area, including the capital island of Male , is about 400 miles (645 km) 
                         southwest of Sri Lank
                        
        <a href="https://en.wikipedia.org/wiki/Maldives" class="link-more">More About Maldives </a> 
                    </p>
                </div>
                <div class="img-card" id="img-card">
                    <img src="maldives1.jpg" alt="maldives Image"> 
                    <div class="card-shadow"></div>
                    <div class="trip-details">
                        <div class="trip-container">
                        <div class="price">
                           <p id="p1"> Price: 300$</p>
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
              
              <div class="swiper-slide">  
                <img src="bora bora1.jpg" alt="bora Image">   
                <div class="img-shadow"></div>
                <div class="countary-details" id="countary-details">
                    <h2 class="place-title">Bora Bora</h2>  
                    <p class="about-place" id="about-place">
                        Bora Bora is a small South Pacific island northwest of Tahiti in French Polynesia.
                         Surrounded by sand-fringed motus (islets) and a turquoise lagoon protected by a coral
                          reef, it's known for its scuba diving. It's also a popular luxury resort destination
                           where some guest bungalows are perched over the water on stilts. At the island's center
                            rises Mt. Otemanu, a 727m dormant volcano.
        <a href="https://en.wikipedia.org/wiki/Bora_Bora" class="link-more">More About Bora Bora</a> 
                    </p>
                </div>
                <div class="img-card" id="img-card">
                    <img src="bora2.jpg" alt="bora Image"> 
                    <div class="card-shadow"></div>
                    <div class="trip-details">
                        <div class="trip-container">
                        <div class="price">
                           <p id="p2"> Price: 50$</p> 
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
              
              <div class="swiper-slide">  
                <img src="Santorini1.jpg" alt="island Image">  
                <div class="img-shadow"></div>
                <div class="countary-details" id="countary-details">
                    <h2 class="place-title">Santorini</h2>  
                    <p class="about-place" id="about-place">
                        Santorini is one of the Cyclades islands in the Aegean Sea. It was devastated 
                        by a volcanic eruption in the 16th century BC, forever shaping its rugged landscape.
                         The whitewashed, cubiform houses of its 2 principal towns, Fira and Oia, cling to
                          cliffs above an underwater caldera (crater). They overlook the sea, small islands 
                          to the west and beaches made up of black, red and white lava pebbles.

        <a href="https://en.wikipedia.org/wiki/Santorini" class="link-more">More About Santorini</a> 
                    </p>
                </div>
                <div class="img-card" id="img-card">
                    <img src="Santorini2.jpg" alt="island Image"> 
                    <div class="card-shadow"></div>
                    <div class="trip-details">
                        <div class="trip-container">
                        <div class="price">
                           <p id="p3"> Price: 60$</p>
                        </div>
                        <div class="trip-rate" id="rate">
                            <p class="rate">Your Rating:</p> 
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                        </div>
                        <div class="book-now" id="book-now">
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
        localStorage.setItem("price6",f_price);

        var price1=document.getElementById("p2");
        var t1_price=price1.textContent;
        var f1_price=parseFloat(t1_price.replace("Price: ","","$"));
        localStorage.setItem("price7",f1_price);

        var price2=document.getElementById("p1");
        var t2_price=price2.textContent;
        var f2_price=parseFloat(t2_price.replace("Price: ","","$"));
        localStorage.setItem("price8",f2_price);

    </script>
    </body>
</html>