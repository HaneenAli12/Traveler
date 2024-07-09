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
        <title>Traveler |Monuments</title> 
        <!-- Link Css file -->
        <link rel="stylesheet" href="../country_style.css">
        <!-- Icon of the website -->
        <link rel="icon" href="../img/distance.png">
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
                <img src="wallpaper.jpg" alt="pyra Image"> 
                 <div class="img-shadow"></div>
                <div class="home-data">
                    <h1 class="country-title">Monuments</h1>   
                   <h2 class="country-subtitle">A place where everything is beautiful</p>
                </div>
              </div>
              
              <div class="swiper-slide">  
                <img src="pyra1.jpg" alt="mo Image">   
                <div class="img-shadow"></div>
                <div class="countary-details" id="countary-details">
                    <h2 class="place-title">pyramids</h2>  
                    <p class="about-place" id="about-place">
                        The Egyptian pyramids are ancient masonry structures located in Egypt.
                         Sources cite at least 118 identified "Egyptian" pyramids.
                          Approximately 80 pyramids were built within the Kingdom of Kush,
                           now located in the modern country of Sudan. Of those located in modern 
                           Egypt, most were built as tombs for the country's pharaohs and their 
                           consorts during the Old and Middle Kingdom periods.
                        
        <a href="https://en.wikipedia.org/wiki/Egyptian_pyramids" class="link-more">More About pyramids</a> 
                    </p>
                </div>
                <div class="img-card" id="img-card">
                    <img src="pyra2.jpg" alt="pyramids Image"> 
                    <div class="card-shadow"></div>
                    <div class="trip-details">
                        <div class="trip-container">
                        <div class="price">
                            <p id="p1">Price: 50$</p> 
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
                <img src="taj-mahal-india.jpg" alt="tajmahal Image">  
                <div class="img-shadow"></div>
                <div class="countary-details" id="countary-details">
                    <h2 class="place-title">Taj Mahal</h2>  
                    <p class="about-place" id="about-place">
                        The Taj Mahal  is an ivory-white marble mausoleum on the right bank of the
                         river Yamuna in Agra, Uttar Pradesh, India. It was commissioned in 1631 by the fifth
                          Mughal emperor, Shah Jahan to house the tomb of his beloved wife, Mumtaz Mahal;
                           it also houses the tomb of Shah Jahan himself. The tomb is the centrepiece of a 17-hectare 
                           (42-acre) complex, which includes a mosque and a guest house, and is set in formal gardens 
                           bounded on three sides by a crenellated wall.
        <a href="https://en.wikipedia.org/wiki/Taj_Mahal" class="link-more">More About Taj Mahal</a> 
                    </p>
                </div>
                <div class="img-card" id="img-card">
                    <img src="taj2.jpg" alt="taj Image"> 
                    <div class="card-shadow"></div>
                    <div class="trip-details">
                        <div class="trip-container">
                        <div class="price">
                            <p id="p2">Price: 50$</p> 
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
                <img src="baby1.jpg" alt="Mountain Image">   
                <div class="img-shadow"></div>
                <div class="countary-details" id="countary-details">
                    <h2 class="place-title">Babylon</h2>  
                    <p class="about-place" id="about-place">
                        Babylon was an ancient city located on the lower Euphrates river
                         in southern Mesopotamia, within modern-day Iraq. Babylon functioned
                          as the main cultural and political centre of the Akkadian-speaking 
                          region of Babylonia, with its rulers establishing two important empires 
                          in antiquity, namely the 19th-16th century BC Old Babylonian Empire and the
                           7th–6th century BC Neo-Babylonian Empire, and the city would also be used 
                           as a regional capital of other empires, such as the Achaemenid Empire. 
                           Babylon was one of the most important urban centres of the ancient Near East until its decline during the Hellenistic period.
        <a href="https://en.wikipedia.org/wiki/Babylon" class="link-more">More About Babylon</a>
                    </p>
                </div>
                <div class="img-card" id="img-card">
                    <img src="baby2.jpg" alt="Countary Image"> 
                    <div class="card-shadow"></div>
                    <div class="trip-details">
                        <div class="trip-container">
                        <div class="price">
                            <p id="p3">Price: 50$</p> 
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
        localStorage.setItem("price21",f_price);

        var price1=document.getElementById("p2");
        var t1_price=price1.textContent;
        var f1_price=parseFloat(t1_price.replace("Price: ","","$"));
        localStorage.setItem("price22",f1_price);

        var price2=document.getElementById("p1");
        var t2_price=price2.textContent;
        var f2_price=parseFloat(t2_price.replace("Price: ","","$"));
        localStorage.setItem("price23",f2_price);
            console.log(f1_price)
    </script>
    </body>
</html>