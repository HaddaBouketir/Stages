<!DOCTYPE html>
<html lang="en">
<head>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css"rel="stylesheet" >
    <link rel="stylesheet" href="site css/company.css">
    <style>
    
    </style>
</head>
<body>

<div class="wrapper">
        <div class="title-text">
           <div style="color: white;" class="title login">
              Login Form
           </div>
           <div class="title signup">
              Signup Form
           </div>
        </div>
        <div class="form-container">
           <div class="slide-controls">
              <input type="radio" name="slide" id="login" checked>
              <input type="radio" name="slide" id="signup">
              <label for="login" class="slide login">Login</label>
              <label for="signup" class="slide signup">Sign up</label>
              <div class="slider-tab"></div>
           </div>
           <div class="form-inner">
              <form class="login" action="{{url('/entreprise')}}">
                 <div class="field">
                <input type="text" placeholder="Email Address" required name="email" autocomplete="off">
                 </div>
                 <div class="field">
              <input type="password" placeholder="Password" required name="password" autocomplete="off">
                 </div>
                 <div class="pass-link">
                    <a href="#">Forgot password ?</a>
                 </div>
                 <div class="field btn">
                    <div class="btn-layer"></div>
                    <input type="submit" name="sub" value="Login" href="{{url('/entreprise')}}">
                 </div>
                 
                 
                 
                 <div class="signup-link">
                  <p class="link" style="  font-family: Comic Sans MS;font-size: 20px;padding-top: 20px;text-align:center; color: white;">Don't Have An Account ?<br><a href="">Sign Up </a> Here</p>
                    <p class="liw" style=" padding-top: 15px;padding-bottom: 10px;text-align:center; color: white; font-size: 20px;">Log In With</p>
                    <div class="icons">
                        <a href="#" style="text-decoration: none;
                        color: white;"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-skype"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-pinterest"></ion-icon></a>
                        <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
                    </div>
                 </div>
                </form>
          