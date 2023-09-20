<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script src="https://kit.fontawesome.com/5bb7bb3e3a.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Project 2</title>
</head>
<body>
    <main>
        <header class="header">
            <a id="homeimg" href="#home"><img id="homelogo" src="img/logo.png" alt="pvv logo"></a>
            <a href="#home" class="active"><i class="fa fa-home"></i> Home</a>
            <a href="#about"><i class="fa fa-user"></i> Over ons</a>
            <a href="#projects"><i class="fa fa-list"></i> Nieuws</a>
            <a href="#contact"><i class="fa fa-donate"></i> Doneren</a>
            <a href="#contact"><i class="fa fa-comments"></i> Contact</a>
        </header>
        <section>
            <div id="imageholder">
                <img id="homeimg1" src="img\nieuws\splash__photo--2.jpg" alt="">
            </div>
        </section>
        <footer>
            <div class="row footer-main">
                <div class="col-six tab-full left footer-desc">
                    <div class="footer-logo"></div> Proin eget tortor risus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar.</div>
                <div class="col-six tab-full right footer-subscribe">
                    <h4>Get Notified</h4>
                    <p>Quia quo qui sed odit. Quaerat voluptas autem necessitatibus vitae aut non alias sed quia. Ut itaque enim optio ut excepturi deserunt iusto porro.</p>
                    <div class="subscribe-form">
                        <form id="mc-form" class="group" novalidate="true"> <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Email Address" required=""> <input type="submit" name="subscribe" value="Subscribe"> <label for="mc-email" class="subscribe-message"></label></form>
                    </div>
                </div>
            </div>
            <div class="row footer-bottom">
                <div class="col-twelve">
                    <div class="copyright"> <span>© Copyright JOVD 2023</span></div>
                    <div class="go-top" style="display: block;"> <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up" aria-hidden="true"></i></a></div>
                </div>
            </div>
        </footer>
    </main>
</body>
</html>1