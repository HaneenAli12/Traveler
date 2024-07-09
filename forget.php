<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="discription" content="Explore Your Funny">
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Traveler | Reset Password </title>
        <!-- Icon of the website -->
        <link rel="icon" href="img/distance.png">
        <style>
            @import url("https://fonts.googleapis.com/css?family=Poppins:400,500&display=swap"); 
                @import url('https://fonts.googleapis.com/css2?family=Caveat&display=swap');
                * {
                    box-sizing: border-box;
                    padding: 0;
                    margin: 0;
                    font-family: var(--FirstFont);
                }

                /*=============== VARIABLES CSS ===============*/
:root {
    --dark-color: #222;
    --MainColor: #0d1f23;
    --SecondColor: #132e35;
    --ThirdColor: #2d4a53;
    --Fourthcolor: #69818d;
    --FontColor: #5a636a;
    --SecondFontColor: #afb3b7;
    --FirstFont: 'Poppins', sans-serif;
    
    --SecondFont: 'Montserrat', sans-serif;
    --thirdFont :'Caveat', cursive;
    
    

    
    --silvercolor: #5a636ade;
    --FirstFont: 'Poppins', sans-serif;
    
    --SecondFont: 'Montserrat', sans-serif;
    --thirdFont :'Caveat', cursive;
}

/*=============== main ===============*/

body {
    background-color: var(--MainColor);
    color: var(--FontColor);
    justify-content: center;
    align-items: center;
    height: 100vh;
    
}

.main {
    overflow: hidden;
    width: 100%;
    height: 100vh;
    width: 100vw;
    color: aliceblue;
    align-items: center;

}
/* ================= back ground ============= */

.home section {
    height: 100vh;
    position: relative;
    width: 100%;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.032);
    
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
    max-width: 700px;
    padding: 50px;
    border-radius: 100px;
    font-weight: 20;
    font-size: 1.4rem;
    text-decoration: none;
    text-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
    text-align: center;
    color: #eaf7f7; 
    background: rgba(0, 0, 0, 0.119);
    width: 100%;    
    opacity: 0;
    animation: transationtitle 2.5s forwards;
    box-shadow:  0 30px 20px rgba(0,0,0,0.4);
}
@keyframes transationtitle{
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}
.home-data h2 {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 30px;
    font-size: 50px;
    font-family: 'Ubuntu', sans-serif;
    text-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
}
form input {
    margin-bottom: 30px;
    background-color: var(--SecondFontColor);
    border: none;
    border-radius: 5px;
    width: 350px;
    height: 50px;
    position: relative;
    outline: none;
    transition: 0.2s ease;
    padding: 20px;
    font-size: 15px;
}
::placeholder {

    color: var(--FontColor);
}
form input:focus {
    border-bottom: 5px solid var(--Fourtholor);
    color: var(--MainColor);
}
/* ========================== Buttons ===================*/

.link button,
.start-jorn{
    font-size: 14px;
    width: 200px;
    height: 35px;
    border-radius: 25px;
    -webkit-border-radius: 25px;
    -moz-border-radius: 25px;
    -ms-border-radius: 25px;
    -o-border-radius: 25px;
    margin-top: 5%;
    border: none;
    background-color: var(--MainColor);
    color: var(--SecondFontColor);
    border: 1px solid var(--SecondColor);
    box-shadow:  0 30px 20px rgba(0,0,0,0.4);
    transition: all 0.2s ease;
    cursor: pointer;
}
.link button:active,
.start-jorn:active {
    background-color: var(--SecondColor);
    transform: scale(0.96);
}
        </style>
        
        <!-- Icon inside page -->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&family=Poppins:wght@400;500;600&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Font+Tangerine">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>


    <body>
        <main class="main">
            <section class="home section" id="home">
                <!-- <img src="img/back.jpg" alt="Home image" class="home-img"> -->
                <div class="home-img"></div>
                <div class="home-shadow"></div>
                <div class="home-data">
                    <form action="" method="post">
                        <h2> Reset Password </h2><br>
                        <div class="user-box">
                        <label for="email">Email:</label>&nbsp;
                        <input type="text" id="email" name="email" required placeholder="Enter email">
                    </div>
                        
                    
                        <br>
                        <button class="start-jorn" name="forget-btn"  > 

                            Reset <i class="ri-arrow-right-line"></i>

                        </button>
                    


                    </form>
                    <div class="link">
                    <button onclick="document.location = 'login.php'"> Log In <i class="ri-arrow-right-line"></i> </button> 
                </div>
            </section>
            <?php
                include("config.php");
                if(isset($_POST['forget-btn'])){
                    $Email=$_POST['email'];
                    $verify_query=mysqli_query($con,"SELECT Pass_word FROM userinfo WHERE Email='$Email'");
                    if (mysqli_num_rows($verify_query)>0){
                        $row=mysqli_fetch_assoc($verify_query);
                        $retreived=$row['Pass_word'];
                        echo"<script>window.alert('Your password is: $retreived')</script>";
                           
                    }else{
                        echo "<div class='message' >Email is not found.</div>";
                    } 
                    
                }
            ?>  
    </body>
</html>