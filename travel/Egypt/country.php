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
        <title>Traveler | Egypt</title>
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
                <img src="egypt.jpg" alt="">
                <div class="img-shadow"></div>
                <div class="home-data">
                    <h1 class="country-title">Egypt</h1>
                    <h2 class="country-subtitle">A place where everything is beautiful</p>
                </div>
              </div>
              <div class="swiper-slide">
                <img src="pyramids.jpg" alt="">
                <div class="img-shadow"></div>
                <div class="countary-details" id="countary-details">
                    <h2 class="place-title">The Giza Pyramids</h2>
                    <p class="about-place" id="about-place">
                        The Giza Pyramids, built to endure an eternity, have done just that. 
        The monumental tombs are relics of Egypt's Old Kingdom era and were
        constructed some 4,500 years ago.
        Egypt's pharaohs expected to become gods in the afterlife. To prepare 
        for the next world they erected temples to the gods and massive pyramid
        tombs for themselves—filled with all the things each ruler would need 
        to guide and sustain himself in the next world.
        <a href="https://en.wikipedia.org/wiki/Pyramid" class="link-more">More About Pyramids</a>
                    </p>
                </div>
                <div class="img-card" id="img-card">
                    <img src="mini-pyramids.jpg" alt="">
                    <div class="card-shadow"></div>
                    <div class="trip-details">
                        <div class="trip-container">
                            <div class="price">
                                 <p id="p1">Price: 30$</p>
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
                                <button class="book" id="book" onclick="location.href = '../../Book/book.htm'">
                                    Book Now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              <div class="swiper-slide">
                <img src="museum.jpg" alt="">
                <div class="img-shadow"></div>
                <div class="countary-details" id="countary-details">
                    <h2 class="place-title">Egyptain Museum</h2>
                    <p class="about-place" id="about-place">
                        Located in the heart of Tahrir Square, Cairo, the Egyptian Museum is a unique
        building designed to host the world's oldest collection of Pharaonic art and 
        monuments. Built on an area of 13,600 sq. meters, with more than 100 exhibition 
        halls, the museum is a product of a competition launched by the Egyptian Government
        in 1895 and thus it is considered the first national museum in the Middle East.
        <a href="https://en.wikipedia.org/wiki/Egyptian_Museum" class="link-more">More About Museum</a>
                    </p>
                </div>
                <div class="img-card" id="img-card">
                    <img src="The Egyptian Museum.jpg" alt="">
                    <div class="card-shadow"></div>
                    <div class="trip-details">
                        <div class="trip-container">
                            <div class="price">
                                 <p id="p2">Price: 35$</p>
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
                <img src="Cairo_Tower.jpg" alt="">
                <div class="img-shadow"></div>
                <div class="countary-details" id="countary-details">
                    <h2 class="place-title">Cairo Tower</h2>
                    <p class="about-place" id="about-place">
                        Cairo Tower, soaring over the Egyptian capital at 614 feet (187 metres) in height, was the tallest tower
        in the whole of Africa for ten years after it was built, and remains the tallest in North Africa to this day.<br>
        From the outside, the intricate latticework of the concrete tower, open at the top to reveal its crown of an
        observation deck, is designed to represent a Pharaonic lotus flower, one of the symbols of Ancient Egypt. 
        The landmark is illuminated each evening in different colours, making it a truly beautiful sight against the night sky.
        <a href="https://en.wikipedia.org/wiki/Cairo_Tower" class="link-more">More About Cairo Tower</a>
                    </p>
                </div>
                <div class="img-card" id="img-card">
                    <img src="Cairo Tower.jpg" alt="">
                    <div class="card-shadow"></div>
                    <div class="trip-container">
                        <div class="trip-details">
                            <div class="price">
                                 <p id="p3">Price: 10$</p>
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
                                <button class="book" id="booking">
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
        localStorage.setItem("price18",f_price);

        var price1=document.getElementById("p2");
        var t1_price=price1.textContent;
        var f1_price=parseFloat(t1_price.replace("Price: ","","$"));
        localStorage.setItem("price19",f1_price);

        var price2=document.getElementById("p1");
        var t2_price=price2.textContent;
        var f2_price=parseFloat(t2_price.replace("Price: ","","$"));
        localStorage.setItem("price20",f2_price);
            console.log(f_price)
    </script>
    </body>
</html>