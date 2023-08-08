<?php
echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FundMyStartup</title>
   
    <link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
 
  <link rel="stylesheet" href="style.css">
   
</head>
<body>
    <header>
        <a href="#" class="logo">FundMyStartup</a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">Setup</a></li>
            <li><a href="#menu">Info</a></li>
            <li><a href="#services">Features</a></li>
            <li><a href="#contact">Contact</a></li>
            <div class="bx bx-moon" id="darkmode"></div>
        </ul>
    </header>
    <section class="home" id="home">
        <div class="home-text">
            <h1>FundMyStartup</h1>
            <h2>Empowering the next generation of entrepreneurs.</h2>
        </div>
        <div class="home-img">
            <img src="img/35307.jpg" alt="">
        </div>
    </section>

    <section class="about" id="about">
        <div class="about-img">
            <img src="img/bg1.png" alt="">
        </div>
        <div class="about-text">
            <span>Profile</span>
            <h2>Startup Profile Creation</h2>
            <a href="#" class="btn">Go Now</a>
        </div>
    </section>

    <section class="menu" id="menu">
        <div class="heading">
            <span>Info</span>
            <h2>Take a deep dive here!</h2>
        </div>
        <div class="menu-container">
            <div class="box">
                <div class="box-img">
                    <img src="img/bg55.png" alt="">
                </div>
                <h2>Insights</h2>
                <i class=\'bx bx:caret\'></i>
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/bg44.png" alt="">
                </div>
                <h2>Analytics</h2>
                <i class=\'bx bx:caret\'></i>
            </div>
        </div>
    </section>

    <section class="services" id="services">
        <div class="heading">
            <span>Features</span>
            <h2>Check out our exclusive features</h2>
        </div>

        <div class="servives-container">
            <div class="s-box">
                <img src="img/responsive.png" alt="">
                <h3>Pitch Platform</h3>
                <a href="pitch.html" class="btn">Check Now</a>
                <p padding-top="35px">A platform for startups to pitch their business ideas to investors, with the ability to upload pitch decks, videos, and other supporting materials.</p>
            </div>
            <div class="s-box">
                <img src="img/bookshelf.png" alt="">
                <h3>Resources Library</h3>
                <a href="library.html" class="btn">Surf Now</a>
                <p padding-top="35px">A library of resources, such as articles, videos, and webinars, to help startups learn more about fundraising, entrepreneurship, and building successful businesses.</p>
            </div>
        </div>
    </section>

 
    <section class="connect">
        <div class="connect-text">
            <span>Let\'s Talk</span>
            <h2>Connect now</h2>
        </div>
        <a href="#" class="btn">Contact Us</a>
    </section>

    <section class="contact" id="contact">
        <div class="contact-box">
            <h3>FundMyStartup</h3>
            <span>Connect With Us</span>
            <div class="social">
                <a href="#"><i class=\'bx bxl-facebook\' ></i></a>
                <a href="#"><i class=\'bx bxl-twitter\' ></i></a>
                <a href="#"><i class=\'bx bxl-instagram\' ></i></a>
            </div>
        </div>
        <div class="contact-box">
            <h3>Nav Links</h3>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">Setup</a></li>
            <li><a href="#menu">Info</a></li>
            <li><a href="#services">Features</a></li>
            <li><a href="#contact">Contact</a></li>
        </div>
        <div class="contact-box">
            <h3>Quick Links</h3>
            <li><a href="#Contact">Contact</a></li>
            <li><a href="#Privacy Policy">Privacy Policy</a></li>
            <li><a href="#Disclaimer">Disclaimer</a></li>
            <li><a href="#Terms Of Use">Terms Of Use</a></li>
        </div>
        <div class="contact-box address">
            <h3>Contact</h3>
            <i class=\'bx bxs-map\' ><span>MIT ADT University, Pune</span></i>
            <i class=\'bx bxs-phone\' ><span>9325782</span></i>
            <i class=\'bx bxs-envelope\' ><span>abc@gmail.com</span></i>
        </div>
    </section>

   
    <div class="copyright">
        <p>&#169; FundMyStartup All Right Reserved.</p>
    </div>


 
    <script src="https://unpkg.com/scrollreveal"></script>

    <script src="main.js"></script>
</body>
</html>
';
?>