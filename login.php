<?php session_start();
 include("config.php");
 if(isset($_POST['log-btn'])){
     $email =mysqli_real_escape_string($con,$_POST['email']);
     $password=mysqli_real_escape_string($con,$_POST['password']);
 
     $result=mysqli_query($con,"SELECT * FROM userinfo WHERE Email='$email' AND Pass_word='$password' ");
     $row=mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result)>0){
     if(is_array($row) && !empty($row)){
         $_SESSION['valid']=$row['Email'];
         $_SESSION['name']=$row['Name'];
         $_SESSION['gender']=$row['Gender'];
     }
     if(isset($_SESSION['valid'])){
         header("Location:home.php");
         exit();
        }}
    
     }?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="discription" content="Explore Your Funny">
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Traveler | Login </title>
       
        <!-- Icon of the website -->
        <link rel="icon" href="img/distance.png">
        
        <!-- Icon inside page -->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&family=Poppins:wght@400;500;600&display=swap"
            rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">

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

}
#link{
    
    transition: color 0.5s; 
    font-size: 0.9rem;
    color: #afb3b7;
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
.container {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: calc(100% - 400px);
    max-width: 950px;
    height: 500px;
    border-radius: 20px;
    background: rgba(0, 0, 0, 0.224);
    -webkit-border-radius: 20px;
    -moz-border-radius: 20px;
    -ms-border-radius: 20px;
    -o-border-radius: 20px;
    box-shadow:  0 30px 20px rgba(0,0,0,0.4);
    color: var(--SixthColor);
    opacity: 0;
    animation: transationtitle 2.5s 3.2s forwards;
}
.hide {
    font-size: 10rem;
    position: absolute;
    top: 50%;
    left: 50%;
    color: var(--SecondFontColor);
    font-family: var(--FirstFont);
    transform: translate(-50%,-50%);
    opacity: 0;
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
    }
    to {
        opacity: 1;
    }
}
/* ================= login ============= */
.container .login {
    position: absolute;
    right: 0;
    top: 0;
    width: calc(100% - 400px);
    height: 100%;
    border-top-right-radius: 20px;
    border-bottom-right-radius: 20px;
}

.slide {
    position: absolute;
    left: 0;
    top: 0;
    width: 400px;
    height: 100%;
    background-color: var(--Fourtholor);
    border-radius: 20px 50px 50px 20px;
    text-shadow: 0 5px 25px rgba(0, 0, 0, 5);
    transition: 2s ease;
}
@keyframes opacitty {
    form {
        opacity: 1;
    }
    to {
        opacity: 0;
    }
}
.div-opacity {
    animation: opacitty 1.5s 2s forwards;
}
.container .sign-up{
    opacity: 0;
}
.login h2,
.sign-up h2 {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 30px;
    font-size: 50px;
    font-family: 'Ubuntu', sans-serif;
    text-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
}
.login p,
.sign-up p {
    margin-top: 10px;
    text-align: center;
}
.login form {
    margin-top: 30px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    padding: 20px;
}
.login input {
    display: block;
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
.login input:focus,
.sign-up .only:focus {
    border-bottom: 5px solid var(--Fourtholor);
    color: var(--MainColor);
}
.forget {
    position: absolute;
    right: 0;
    bottom: 75px;
    padding-right: 20px;

}
.forget a {
    text-decoration: none;
    color: var(--SecondFontColor);
}
.forget a:hover {
    color: var(--FifthColor);
}
.start-jorn,
.sign,
.log,
.sign-submit {
    display: block;
    font-size: 15px;
    width: 150px;
    height: 40px;
    border-radius: 25px;
    -webkit-border-radius: 25px;
    -moz-border-radius: 25px;
    -ms-border-radius: 25px;
    -o-border-radius: 25px;
    margin-top: 20px;
    border: none;
    background-color: var(--MainColor);
    color: var(--SecondFontColor);
    border: 1px solid var(--SecondColor);
    box-shadow:  0 30px 20px rgba(0,0,0,0.4);
    transition: all 0.2s ease;
    cursor: pointer;
    margin: 50px auto 0 auto;
}
.start-jorn:active,
.sign:active,
.log:active {
    background-color: var(--SecondColor);
    transform: scale(0.96);
}
/*=========================== Eye_Password ============= */
.show{
    position: absolute;
    color: #eee4e488;
    font-weight: 700;
    font-size: 18px;
    line-height: 1;
    bottom: 0;
    right: 0;
    cursor: pointer;
    margin-right: 35px;
}
.show i {
    position: absolute;
    font-size: 18px;
    line-height: 1;
    color: #333;
    transition: color 0.3s ease-in-out;
    top: -143px;
    right: 0px;               
}
    
.show i:hover {
    color: #000;
}
.slide .signup,
.slide .signin {
    color: white;
    transition: 1s ease;
}
.slide .signup p,
.slide .signin p {
    font-size: 20px;
    margin-top: 150px;
    margin-left: 20px;
    text-shadow: 0 5px 25px rgba(0, 0, 0, 0.5);
}
.slide .signup h2,
.slide .signin h2 {
    font-size: 50px;
    text-align: center;
}
.slide .signin {
    display: none;
}
.dis {
    display: none;
}
.slide-style{
    left: 100%; transform: translateX(-100%); border-radius: 50px 20px 20px 50px; width: 350px;
}
@keyframes opacitty {from {opacity: 1;}to {opacity:0;}}
.reg-opacity{animation: opacitty 1s forwards}
@keyframes dis-opacity {from {opacity: 0;}to {opacity: 1;}}
.dis-opacitty {animation: dis-opacity 2s 1s forwards}
/* ================= login ============= */
.container .sign-up {
    position: absolute;
    left: 0;
    top: 0;
    width: calc(100% - 350px);
    height: 100%;
    border-top-left-radius: 20px;
    border-bottom-left-radius: 20px;
}
.user-box {
    display: inline-block;
}
.sign-up form {
    margin-top: 10px;
}

.sign-up .only {
    margin-top: 25px;
    margin-left: 30px;
    background-color: var(--SecondFontColor);
    border: none;
    width: 250px;
    height: 50px;
    border-radius: 5px;
    outline: none;
    transition: 0.2s ease;
    padding: 20px 10px 20px 20px;
    font-size: 15px;
}
.radio {
    margin-top: 20px;
    margin-left: 30px;
}
.radio label {
    margin-right: 15px;
}
.radio input {
    margin-right: 10px;
}
.sign-submit {
    margin-top: 30px;
}
.showw{
    position: absolute;
    color: #eee4e488;
    font-weight: 700;
    font-size: 18px;
    line-height: 1;
    bottom: 233px;
    left: 253px;
    cursor: pointer;
    margin-right: 35px;
}
.showw i {
    position: absolute;
    font-size: 18px;
    line-height: 1;
    color: #333;
    transition: color 0.3s ease-in-out;
    top: -18px;
    right: -17px ;             
}
    
.showw i:hover {
    color: #000;
}
        </style>
    </head>
    

    <body>
        <main class="main">
            <section class="home section" id="home">
                <div class="home-img"></div>
                 <div class="home-shadow"></div>
                 <h1 class="hide" id="hide">Traveler</h1>
                 <div class="container">
                    <div class="sign-up" id="sign-up">
                        <div class="back"></div>
                        <h2>Sign Up</h2>
                        <p>Create your account</p>
                        <form action="" method="post">
                            <div class="form-inp">
                                <div class="user-box">
                                    <!-- <label for="username">Username:</label>&nbsp; -->
                                    <input type="text" id="username" name="name" required placeholder="Enter username" class="only">
                                </div>
                                <div class="user-box">
                                    <!-- <label for="Email" > Email:</label> -->
                                    <input type="email"  id ="Email" name="email" required placeholder="Enter E-mail" class="only" > </div>
                            
                                <div class="user-box">
                                    <!-- <label for="password">Password:</label>&nbsp; -->
                                        
                                    <input type="password" id="passwordd" name="pass" required="" placeholder="Enter Password" class="only">
                                    <span class="showw" ><i class="ri-eye-fill"></i></span></div>
                                <div class="user-box">
                                    <!-- <label>Confirm Password</label> -->
                                    <input type="password" placeholder="Enter Confirm Password" id="confirm_password" required class="only">
                                </div>
                                <div class="user-box">

                                    <!-- <label > Age </label> -->
                                    <input type="number" min="18" required name="age" placeholder="Enter Your Age" class="only"> 
                                </div>
                                <div class="radio">    
                                    <label class="choose-gender"> Gender   </label>
                                        <input type="radio" id="male" name="radio" value='Male' required ><label for="male" class="gender male">Male</label>
                                        <input type="radio" id="female" name="radio" value='Female' required> <label for="female" class="gender">Female</label>
                                </div>
                                <button class="sign-submit" name="submit" value="Register" > 
                                    Sign Up <i class="ri-arrow-right-line"></i>
                                </button>
                            </div>
                        </form>
                        </div>
                    <div class="login" id="login">
                        <h2> Log In </h2>
                        <p>Register your account</p>
                        <form method="post">
                            <label for="email">Email:</label>
                            <input type="text" id="email" name="email" required placeholder="Enter Email">
                            
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password" required placeholder="Enter password" />
                            <span class="show" ><i class="ri-eye-fill"></i></span>
                            <div class="forget">
                                <a href="forget.php" class="forget-password">Forget password?</a>
                            </div>
                            
                            <button class="start-jorn" name="log-btn"  > 
    
                                Log In <i class="ri-arrow-right-line"></i>
    
                            </button>
                        </form>
                    </div>
                    <div class="slide" id="slide">
                        <div class="signup" id="signup">
                            <p>You don't have an account?</p>
                            <h2>Sign Up Now</h2>
                            <button type="button" class="sign" id="sign">Sign Up</button>
                        </div>
                        <div class="signin" id="signin">
                            <p>You already have an account?</p>
                            <h2>Login Now</h2>
                            <button type="button" class="log" id="log">Log IN</button>
                        </div>
                    </div>
                    </div>
                
            </section>
            <script>
                document.getElementById("sign").onclick = function(){
                    document.getElementById("slide").classList.add("slide-style");
                    document.getElementById("signup").classList.add("dis");
                    document.getElementById("login").classList.add("reg-opacity");
                    document.getElementById("login").style.display = "none";
                    document.getElementById("login").classList.remove("dis-opacitty");
                    document.getElementById("signin").style.cssText = "display: block;";
                    document.getElementById("sign-up").classList.add("dis-opacitty");
                    document.title = "Traveler | Sign Up";

                }
                document.getElementById("log").onclick = function(){
                    document.getElementById("slide").classList.remove("slide-style");
                    document.getElementById("signin").style.cssText = "display: none;";
                    document.getElementById("signup").classList.remove("dis");
                    document.getElementById("login").style.opacity = 0;
                    document.getElementById("login").style.display = "block";
                    document.getElementById("login").classList.remove("reg-opacity");
                    document.getElementById("login").classList.add("dis-opacitty");
                    document.getElementById("sign-up").classList.remove("dis-opacitty");
                    document.getElementById("sign-up").classList.add("reg-opacity");
                    document.title = "Traveler | Login";
                }
                // show pass login
                const pass_test = document.getElementById("password");
                const showpass=document.querySelector('.show i'); 
                showpass.addEventListener('click' , function(){
                    if ( pass_test.type === "password"){
                        pass_test.type="text";
                        showpass.classList.remove("ri-eye-fill");
                        showpass.classList.add("ri-eye-off-line");
                    } else {
                    pass_test.type = "password";
                    showpass.classList.remove("ri-eye-off-line");
                    showpass.classList.add("ri-eye-fill");
                    }
                })
                // show pass sign up
                var password = document.getElementById("passwordd")
            , confirm_password = document.getElementById("confirm_password");

            function validatePassword(){
            if(password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Passwords Don't Match");
            } else {
                confirm_password.setCustomValidity('');
            }
            }

            password.onchange = validatePassword;
            confirm_password.onkeyup = validatePassword;



            const passs_test = document.getElementById("passwordd") ;
            const confirm=document.getElementById("confirm_password");
            const showwpass=document.querySelector('.showw i');
            showwpass.addEventListener('click' , function(){
                if ( passs_test.type === "password"){
                    passs_test.type ="text";
                    confirm.type="text"; 
                    showwpass.classList.remove("ri-eye-fill");
                    showwpass.classList.add("ri-eye-off-line");
                } else {
                passs_test.type = "password";
                confirm.type="password"; 
                showwpass.classList.remove("ri-eye-off-line");
                showwpass.classList.add("ri-eye-fill");
                }
            })

            </script>
        <?php
            include("config.php");
            if(isset($_POST['submit'])){
                $username=$_POST['name'];
                $email=$_POST['email'];
                $age=$_POST['age'];
                $password=$_POST['pass'];
                $gender=$_POST['radio'];
            $verify_query=mysqli_query($con,"SELECT Email FROM userinfo WHERE Email='$email'");
            $verify_queryy=mysqli_query($con,"SELECT`Name` FROM userinfo WHERE `Name`='$username'");
            if(mysqli_num_rows($verify_query)!=0 || mysqli_num_rows($verify_queryy)!=0){
                echo "<script>
                window.alert('This email or name is used, Try another one please!');</script><br>";
                
            }
            else{
                mysqli_query($con,"INSERT INTO userinfo(Name,Email,Age,Pass_word,Gender)
                VALUES('$username','$email','$age','$password','$gender')");
                echo"<script>
                window.alert('Registeration Successfully!');
                </script><br>";
            }
            }
        ?>
        <?php
     include("config.php");
     if(isset($_POST['log-btn'])){
         $email =mysqli_real_escape_string($con,$_POST['email']);
         $password=mysqli_real_escape_string($con,$_POST['password']);
     
         $result=mysqli_query($con,"SELECT * FROM userinfo WHERE Email='$email' AND Pass_word='$password' ");
         $row=mysqli_fetch_assoc($result);
        if(mysqli_num_rows($result)==0){
            echo "<script>
                window.alert('Wrong Email or Password');
                </script><br>";
        }
         }?>

    </body>
</html>