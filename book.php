<?php
session_start();
// session_destroy();
if(!isset($_SESSION['valid'])){
    header("location:login.php");
}
$res_name=$_SESSION['name'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="discription" content="Explore Your Funny">
        <title>Traveler | Book Now</title>
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
color: var(--SecondFontColor);
font-family: var(--SecondFont)
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

    /*=============== Book===============*/
    .Book {
        height: 100vh;
        position: relative;
        width: 100%;
    }
    .book-img {
        position: absolute;
        background-image: url("img/back.jpg");
        width: 100%;
        height: 100%;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
    }
    .book-shadow{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: linear-gradient(180deg, #0000006e, #000000d8)
    }
    .book-continer{
    margin: 70px auto;
    width: calc(100% - 700px);
    height: 520px;
    position: absolute;
    border-radius: 20px;
    -webkit-border-radius: 20px;
    -moz-border-radius: 20px;
    -ms-border-radius: 20px;
    -o-border-radius: 20px;
    background: rgba(0, 0, 0, 0.224);
    margin-left: 350px;
    box-shadow:  0 30px 20px rgba(0,0,0,0.4);
    }
    .book-data {
    padding: 30px;
    position: absolute;
    width: 100%;
    height: 100%;
    border-top-left-radius: 20px;
    border-bottom-left-radius: 20px;
    }
    .book-title {
    color: var(--SixthColor);
    font-family: var(--SecondFont);
    font-size: 2.75rem;
    display: flex;
    justify-content: center;
    align-items: center;
    padding-bottom: 20px;
}
form {
    position: absolute;
    width: calc(100% - 60px);
}
.only {
    position: relative;
        width: calc((100% - 120px)/ 2);
        margin-bottom: 20px;
        display: inline-block;
    }
.only label {
    margin-left: 10px;
}
label {
    color: var(--SecondFontColor);
}
.exact1 {
    margin-left: 25px;
}
.exact2 {
    margin-left: 37px;
}
.only-pass {
    position: relative;
    width: calc((100% - 5px) / 2);
    margin-bottom: 25px;
    display: inline-block;
    margin-left: 50px;
}
.only-pass input {
    width: 65%;
}
input,select {
    position: absolute;
    width: 80%;
    margin-left: 10px;
    background: var(--SecondFontColor);
    border-radius: 25px;
    border: none;
    height: 30px;
    transition: 0.5s;
    color: var(--MainColor);
    padding-left: 20px;
}
input:focus {
    outline: none;
}
#total{
    position: absolute;
    left: 82px;
    bottom: -35px;
    color: var(--SecondFontColor);
}
button[type='submit']{
    position: absolute;
    left: 40%;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 130px;
    height: 40px;
    border-radius: 20px;
    background-color: var(--MainColor);
    color: var(--SecondFontColor);
    border: 1px solid var(--SecondColor);
    outline: none;
    box-shadow:  0 30px 20px rgba(0,0,0,0.4);
    transition: all 0.2s ease;
    }
.down {
    position: relative;
    width: calc(100% - 250px);
    margin-bottom: 25px;
    margin-left: 10px;
}
.sub:active{
    background-color: var(--SecondColor);
    transform: scale(0.96);
}
 body {
        background-color: var(--MainColor);
        color: var(--FontColor);
        font-family: var(--SecondFont);
    }
    /* ===============Eye_password==================== */
    .pass-show {
        position: relative;
    }
    .show{
    position: absolute;
    color: #eee4e488;
    font-weight: 700;
    font-size: 18px;
    line-height: 1;
    top: 22%;
    right: 6%;
    cursor: pointer;
}
    .show i {
        font-size: 18px;
        line-height: 1;
        color: var(--SecondColor);
        transition: color 0.3s ease-in-out;
        margin-bottom: 20px;
    }
        
    .show i:hover {
        color: #000;
    }
        
    .show:hover {
        color: #000;}

    </style>

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
                        <a href="#" class="list-link"><i class="ri-article-fill"></i> Book</a>
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
                    <button class="log-out" id="log-out" onclick="logout()">Log Out</button>
                   </div>
                </div>
            </nav>
        </header>
        <main class="main">
        <section class="Book" id="book">
            <div class="book-img"></div>
            <div class="book-shadow"></div>
            <div class="book-continer">
                <div class="book-data">  
                    <h3 class="book-title">Book Now</h3>
                        <form action="" method="post">
                            <div class="only">
                                <label>From:</label>
                                <input type="text" required placeholder="Enter your place" id="from" name="from">
                            </div>
                            <div class="only exact1">
                                <label for="country">The country:</label>
                                <select name="country" id="country" onchange="second_select()">
                                <option selected>Your distination</option>
                                <option value="America">America</option>
                                <option value="Archaeological">Archaeological</option>
                                <option value="Egypt">Egypt</option>
                                <option value="France">France</option>
                                <option value="Fun Places">Fun Places</option>
                                <option value="Germany">Germany</option>
                                <option value="Islands">Islands</option>
                                <option value="Mountains">Mountains</option>
                                <option value="Turkey">Turkey</option></select>
                            </div>
                            <div class="only">
                                <label>Name: </label>
                                <input type="text" required  name="Name" placeholder="Enter your name">
                            </div>
                            <div class="only exact2">
                                <label for="city">The Place: </label>
                                <select  name="city" id="city" disabled>
                                    <option selected disabled value="">Select your place</option>
                                </select>
                            </div>
                            <div class="only">
                                <label>Email: </label>
                                <input type="email" required name="Email" placeholder="Enter your email">
                            </div>
                            <div class="only-pass">
                                <label>Password: </label>
                            <input type="password" id="password" required name="Password" placeholder="Enter your password" class="pass-show">
                            <span class="show" ><i class="ri-eye-fill"></i></span><br>
                            </div>
                            <div class="down" style="margin-left: 57px;">
                                <label>Duration of stay: </label>
                        <input type="number" min="1" max="30" required name="Duration_of_stay" placeholder="Duration of stay" id="day" oninput="calc_price()">
                            </div>
                            <div class="down">
                                <label>Number of individuals: </label>
                        <input type="number" min="1" max="10" required  name="Number_of_individuals" placeholder="Number of individuals" id="pep" oninput="calc_price()">
                            </div>
                            <div class="down" style="margin-left: 35px;">
                                <label>Date that suits you: </label>                     
                        <input type="datetime-local" required name="Date_that_suits_you" placeholder="Date that suits you">
                            </div>
                        <div class="down" style="margin-left: 61px;">
                            <label>Phone_Number: </label>
                        <input type="tel" required name="Phone_Number" placeholder="Enter the Phone Number" >
                        </div>
                          <p id=total> Total Price: 0$</p>                       
                        <button  type='submit'name="submit" class="sub" value="Register"><h4>Submit</h4></button>
                        <input type="hidden" id="hideinput" name="hideinput">
                    </form>
                </div>
            </div>             
        </section>
        </main>
        <script>
            const pass_test = document.getElementById("password");
            const showpass=document.querySelector('.show i');
            showpass.addEventListener('click' , function(){
                if ( pass_test.type == "password"){
                    pass_test.type="text";
                    showpass.classList.remove("ri-eye-fill");
                    showpass.classList.add("ri-eye-off-line");
                } else {
                pass_test.type = "password";
                showpass.classList.remove("ri-eye-off-line");
                showpass.classList.add("ri-eye-fill");
                }
            })

            //login
            function logout() {
                history.replaceState(null, null, 'login.php');
                window.location.replace('login.php');                                            
            }

            //options
            function second_select(){
                var country=document.getElementById("country");
                var city=document.getElementById("city");
                city.innerHTML='<option selected disabled value="">Select your place</option>';
                city.disabled=false;
                var selected_country=country.value;
                if(selected_country==="America"){
                    addOption(city,"Grand Canyon","Grand Canyon");
                    addOption(city,"Liberty Statue","Liberty Statue");
                    addOption(city,"Yellow stone","Yellow stone");
                }
                else if(selected_country==="Archaeological"){
                    addOption(city,"pyramids","pyramids");
                    addOption(city,"Taj Mahal","Taj Mahal");
                    addOption(city,"Babylon","Babylon");
                }
               else if(selected_country==="Egypt"){
                    addOption(city,"The Giza Pyramids","The Giza Pyramids");
                    addOption(city,"Egyptain Museum","Egyptain Museum");
                    addOption(city,"Cairo Tower","Cairo Tower");
                }
               else if(selected_country==="France"){
                    addOption(city,"Eiffel Tower","Eiffel Tower");
                    addOption(city,"Louvre Museum","Louvre Museum");
                    addOption(city,"Nice City","Nice City");
                }
               else if(selected_country==="Fun Places"){
                    addOption(city,"Disneyland","Disneyland");
                    addOption(city,"Europa Park","Europa Park");
                    addOption(city,"Santa Claus Village","Santa Claus Village");
                }
               else if(selected_country==="Germany"){
                    addOption(city,"Heidelberg","Heidelberg");
                    addOption(city,"Bonn","Bonn");
                    addOption(city,"Garmisch","Garmisch");
                }
               else if(selected_country==="Islands"){
                    addOption(city,"Maldives","Maldives");
                    addOption(city,"Bora Bora","Bora Bora");
                    addOption(city,"Santorini","Santorini");
                }
               else if(selected_country==="Mountains"){
                    addOption(city,"Saint Catherine","Saint Catherine");
                    addOption(city,"Matterhorn","Matterhorn");
                    addOption(city,"Kirkjufell","Kirkjufell");
                }
               else if(selected_country==="Turkey"){
                    addOption(city,"Istanbul","Istanbul");
                    addOption(city,"Cappadocia","Cappadocia");
                    addOption(city,"Antalya","Antalya");
                }

            }
                function addOption(selectElement,value,text){
                    var option=document.createElement("option");
                    option.text=text;
                    option.value=value;
                    selectElement.add(option);
                }
                function calc_price(){
                    var select_city=city.value;
                    if(select_city==="Antalya"){
                    var day=document.getElementById("day").value;
                    var pep=document.getElementById("pep").value;
                    var price=localStorage.getItem("price");
                    var total=price*day*pep;
                    document.getElementById("total").textContent="Total Price: "+total+" $";
                    console.log(price)
                    console.log(total)
                }
                
                    else if(select_city==="Cappadocia"){
                    var day=document.getElementById("day").value;
                    var pep=document.getElementById("pep").value;
                    var price=localStorage.getItem("price1");
                    var total=price*day*pep;
                    document.getElementById("total").textContent="Total Price: "+total+" $";
                    console.log(price)
                    console.log(total)
                }
                
                   else if(select_city==="Istanbul"){
                    var day=document.getElementById("day").value;
                    var pep=document.getElementById("pep").value;
                    var price=localStorage.getItem("price2");
                    var total=price*day*pep;
                    document.getElementById("total").textContent="Total Price: "+total+" $";
                    console.log(price)
                    console.log(total)
                }
                
                   else if(select_city==="Kirkjufell"){
                    var day=document.getElementById("day").value;
                    var pep=document.getElementById("pep").value;
                    var price=localStorage.getItem("price3");
                    var total=price*day*pep;
                    document.getElementById("total").textContent="Total Price: "+total+" $";
                    console.log(price)
                    console.log(total)
                }
                
                   else if(select_city==="Matterhorn"){
                    var day=document.getElementById("day").value;
                    var pep=document.getElementById("pep").value;
                    var price=localStorage.getItem("price4");
                    var total=price*day*pep;
                    document.getElementById("total").textContent="Total Price: "+total+" $";
                    console.log(price)
                    console.log(total)
                }
                
                   else if(select_city==="Saint Catherine"){
                    var day=document.getElementById("day").value;
                    var pep=document.getElementById("pep").value;
                    var price=localStorage.getItem("price5");
                    var total=price*day*pep;
                    document.getElementById("total").textContent="Total Price: "+total+" $";
                    console.log(price)
                    console.log(total)
                }
                
                   else if(select_city==="Santorini"){
                    var day=document.getElementById("day").value;
                    var pep=document.getElementById("pep").value;
                    var price=localStorage.getItem("price6");
                    var total=price*day*pep;
                    document.getElementById("total").textContent="Total Price: "+total+" $";
                    console.log(price)
                    console.log(total)
                }
                
                   else if(select_city==="Bora Bora"){
                    var day=document.getElementById("day").value;
                    var pep=document.getElementById("pep").value;
                    var price=localStorage.getItem("price7");
                    var total=price*day*pep;
                    document.getElementById("total").textContent="Total Price: "+total+" $";
                    console.log(price)
                    console.log(total)
                }
                
                
                   else if(select_city==="Maldives"){
                    var day=document.getElementById("day").value;
                    var pep=document.getElementById("pep").value;
                    var price=localStorage.getItem("price8");
                    var total=price*day*pep;
                    document.getElementById("total").textContent="Total Price: "+total+" $";
                    console.log(price)
                    console.log(total)
                }
                
                   else if(select_city==="Garmisch"){
                    var day=document.getElementById("day").value;
                    var pep=document.getElementById("pep").value;
                    var price=localStorage.getItem("price9");
                    var total=price*day*pep;
                    document.getElementById("total").textContent="Total Price: "+total+" $";
                    console.log(price)
                    console.log(total)
                }
                
                   else if(select_city==="Bonn"){
                    var day=document.getElementById("day").value;
                    var pep=document.getElementById("pep").value;
                    var price=localStorage.getItem("price0");
                    var total=price*day*pep;
                    document.getElementById("total").textContent="Total Price: "+total+" $";
                    console.log(price)
                    console.log(total)
                }
                
                   else if(select_city==="Heidelberg"){
                    var day=document.getElementById("day").value;
                    var pep=document.getElementById("pep").value;
                    var price=localStorage.getItem("price11");
                    var total=price*day*pep;
                    document.getElementById("total").textContent="Total Price: "+total+" $";
                    console.log(price)
                    console.log(total)
                }
                
                   else if(select_city==="Santa Claus Village"){
                    var day=document.getElementById("day").value;
                    var pep=document.getElementById("pep").value;
                    var price=localStorage.getItem("price12");
                    var total=price*day*pep;
                    document.getElementById("total").textContent="Total Price: "+total+" $";
                    console.log(price)
                    console.log(total)
                }
                
                   else if(select_city==="Europa Park"){
                    var day=document.getElementById("day").value;
                    var pep=document.getElementById("pep").value;
                    var price=localStorage.getItem("price13");
                    var total=price*day*pep;
                    document.getElementById("total").textContent="Total Price: "+total+" $";
                    console.log(price)
                    console.log(total)
                }
                
                
                   else if(select_city==="Disneyland"){
                    var day=document.getElementById("day").value;
                    var pep=document.getElementById("pep").value;
                    var price=localStorage.getItem("price14");
                    var total=price*day*pep;
                    document.getElementById("total").textContent="Total Price: "+total+" $";
                    console.log(price)
                    console.log(total)
                }
                
                   else if(select_city==="Nice City"){
                    var day=document.getElementById("day").value;
                    var pep=document.getElementById("pep").value;
                    var price=localStorage.getItem("price15");
                    var total=price*day*pep;
                    document.getElementById("total").textContent="Total Price: "+total+" $";
                    console.log(price)
                    console.log(total)
                }
                
                   else if(select_city==="Louvre Museum"){
                    var day=document.getElementById("day").value;
                    var pep=document.getElementById("pep").value;
                    var price=localStorage.getItem("price16");
                    var total=price*day*pep;
                    document.getElementById("total").textContent="Total Price: "+total+" $";
                    console.log(price)
                    console.log(total)
                }
                
                   else if(select_city==="Eiffel Tower"){
                    var day=document.getElementById("day").value;
                    var pep=document.getElementById("pep").value;
                    var price=localStorage.getItem("price17");
                    var total=price*day*pep;
                    document.getElementById("total").textContent="Total Price: "+total+" $";
                    console.log(price)
                    console.log(total)
                }
                
                   else if(select_city==="Cairo Tower"){
                    var day=document.getElementById("day").value;
                    var pep=document.getElementById("pep").value;
                    var price=localStorage.getItem("price18");
                    var total=price*day*pep;
                    document.getElementById("total").textContent="Total Price: "+total+" $";
                    console.log(price)
                    console.log(total)
                }
                
                   else if(select_city==="Egyptain Museum"){
                    var day=document.getElementById("day").value;
                    var pep=document.getElementById("pep").value;
                    var price=localStorage.getItem("price19");
                    var total=price*day*pep;
                    document.getElementById("total").textContent="Total Price: "+total+" $";
                    console.log(price)
                    console.log(total)
                }
                
                   else if(select_city==="The Giza Pyramids"){
                    var day=document.getElementById("day").value;
                    var pep=document.getElementById("pep").value;
                    var price=localStorage.getItem("price20");
                    var total=price*day*pep;
                    document.getElementById("total").textContent="Total Price: "+total+" $";
                    console.log(price)
                    console.log(total)
                }
                
                   else if(select_city==="Babylon"){
                    var day=document.getElementById("day").value;
                    var pep=document.getElementById("pep").value;
                    var price=localStorage.getItem("price21");
                    var total=price*day*pep;
                    document.getElementById("total").textContent="Total Price: "+total+" $";
                    console.log(price)
                    console.log(total)
                }
                
                
                   else if(select_city==="Taj Mahal"){
                    var day=document.getElementById("day").value;
                    var pep=document.getElementById("pep").value;
                    var price=localStorage.getItem("price22");
                    var total=price*day*pep;
                    document.getElementById("total").textContent="Total Price: "+total+" $";
                    console.log(price)
                    console.log(total)
                }
                
                   else if(select_city==="pyramids"){
                    var day=document.getElementById("day").value;
                    var pep=document.getElementById("pep").value;
                    var price=localStorage.getItem("price23");
                    var total=price*day*pep;
                    document.getElementById("total").textContent="Total Price: "+total+" $";
                    console.log(price)
                    console.log(total)
                }
                
                   else if(select_city==="Yellow stone"){
                    var day=document.getElementById("day").value;
                    var pep=document.getElementById("pep").value;
                    var price=localStorage.getItem("price24");
                    var total=price*day*pep;
                    document.getElementById("total").textContent="Total Price: "+total+" $";
                    console.log(price)
                    console.log(total)
                }
                
                   else if(select_city==="Liberty Statue"){
                    var day=document.getElementById("day").value;
                    var pep=document.getElementById("pep").value;
                    var price=localStorage.getItem("price25");
                    var total=price*day*pep;
                    document.getElementById("total").textContent="Total Price: "+total+" $";
                    console.log(price)
                    console.log(total)
                }
                
                   else if(select_city==="Grand Canyon"){
                    var day=document.getElementById("day").value;
                    var pep=document.getElementById("pep").value;
                    var price=localStorage.getItem("price26");
                    var total=price*day*pep;
                    document.getElementById("total").textContent="Total Price: "+total+" $";
                    console.log(price)
                    console.log(total)
                }
            var hide_input=document.getElementById("hideinput").value=total;
            console.log("t",hide_input)}
              
                
        </script>
            <?php
        include("config.php");
        
        if(isset($_POST['submit'])){
            
            $from=$_POST['from'];
            $country=$_POST['country'];
            $name=$_POST['Name'];
            $city=$_POST['city'];
            $email=$_POST['Email'];
            $pass=$_POST['Password'];
            $duration=$_POST['Duration_of_stay'];
            $num_indiv=$_POST['Number_of_individuals'];
            $date=$_POST['Date_that_suits_you'];
            $phone=$_POST['Phone_Number'];
            $price=$_POST['hideinput'];
            $verify_query=mysqli_query($con,"SELECT Email FROM book WHERE Email='$email'");
            if(mysqli_num_rows($verify_query)!=0){
                echo "<script>
                window.alert('This email is used, Try another one please!')</script>";
            }
            else{                        
                mysqli_query($con,"INSERT INTO book(`From`,Country,`Name`,City,Email,Pass_word,Duration_of_stay,Number_of_individuals,Date_the_journey,phone_number,Price)
            VALUES('$from','$country','$name','$city','$email','$pass','$duration','$num_indiv','$date','$phone','$price')");
             echo "<script>
             window.alert('Successfully booking!')</script>";
        }}
        ?></body></html>