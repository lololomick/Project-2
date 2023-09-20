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
            <a href="index.php" class="active"><i class="fa fa-home"></i> Home</a>
            <a href="bestuur.php"><i class="fa fa-user"></i> Over ons</a>
            <a href="nieuws.php"><i class="fa fa-list"></i> Nieuws</a>
            <a href="doneren.php"><i class="fa fa-donate"></i> Doneren</a>
            <a href="contact.php"><i class="fa fa-comments"></i> Contact</a>
        </header>
        <section>
            <div id="imageholder">
                <img id="homeimg1" src="img\nieuws\splash__photo--2.jpg" alt="">
            </div>
        </section>
        <footer>
        <footer>
            <div class="cr-con"><a class="footer1" href="bestuur.php" target="_blank">Over ons |</a> <a class="footer1" href="contact.php" target="_blank">contact info |</a>
              <a class="footer1">Email |</a> <a class="footer1" href="https://www.Facebook.com/" target="_blank">Facebook </a> <div class='cr-con'> KVK:88599665 | BTW NL999888492Z09 |  &copy; <script>document.write(new Date().getFullYear());</script> </div>
            </div>
      </footer>
        </footer>
    </main>
</body>
</html>
</html>