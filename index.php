<?php 
  session_start(); 
  
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
    } 
?>

<!DOCTYPE html>
<html>
<head>
  <title>ArtSpace</title>
  <link rel="icon" type="image/logo" href="img/artspace-logo-2.png">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

</head>
<body>
    <!-- Navigation Bar -->
    <div class="content">
        <section id="top"></section>
        <header class="header">
            <nav class="navbar">
                <ul class="nav-menu">
                    <div class="logo">
                        <img src="img/artspace-logo-1.png">
                    </div>
                    <div class="navbar-list">
                        <li class="nav-item">
                            <a href="#top" class="nav-link">home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#about" class="nav-link">about</a>
                        </li>
                        <li class="nav-item">
                            <a href="#explore" class="nav-link">explore</a>
                        </li>
                    </div>
                </ul>
                
                <!-- Displays username and logout button -->
                <?php  if (isset($_SESSION['username'])) : ?>
                    <p class="username"><strong>hello, <?php echo $_SESSION['username']; ?></strong></p>
                    <p> <a href="index.php?logout='1'" class="logout">logout</a> </p>
                <?php endif ?>

                </nav>
        </header>

        <!-- Landing Page -->
        <section>
            <div class="landing-page">
                <div class="saturn-desc">
                    <h3>a space where art and <br>
                        community thrive.</h3>
                </div>
                <div class="saturn">
                    <img src="img/artspace-logo-3.png" alt="">
                </div>
            </div>
        </section>

        <!-- Short about section -->
        <section id="about">
            <div class="divider-section reveal">
                <img class="divider-canvas" src="img/canvas.png" alt="">
                <h3>a space for creatives to make <br> 
                connections, to find like-minded people, <br>
                to talk about their hobbies and interests.</h3>
            </div>
            
        </section>

        <!-- Display artists -->
        <section id="explore">
            <div class="container reveal">
                <div class="artists-corner">
                    <h2>meet new artists.</h2>
                    <h3>meet new artists.</h3>
                    <h1>meet new artists.</h1>
                </div>
                <div class="artists-page">
                    <img src="artists/artist-1.png" alt="">
                    <img src="artists/artist-2.png" alt="">
                    <img src="artists/artist-3.jpg" alt="">
                    <img src="artists/artist-4.jpg" alt="">
                </div>

                <div class="artists-name">
                    <h3>@iamtheableh</h3>
                    <h3>@aeveternal</h3>
                    <h3>@Lorminatti</h3>
                    <h3>@Gamchawizzy</h3>
                </div>
            </div>
        </section>

        <!-- Displays artworks -->
        <section>
            <div class="container reveal">
                <div class="artwork-corner">
                    <h2>discover new artworks.</h2>
                    <h3>discover new artworks.</h3>
                    <h1>discover new artworks.</h1>
                </div>
                <div class="artwork-page">
                    <img src="artwork/artwork-1.png" alt="">
                    <img src="artwork/artwork-2.png" alt="">
                    <img src="artwork/artwork-3.jpg" alt="">
                    <img src="artwork/artwork-4.png" alt="">
                </div>
            </div>
        </section>
    </div>
    
    <script src="./script.js"></script>
    
    <script>  

        // Checks if user has been idle for 5 minutes
        $(document).ready(function () {
        var inactiveTime;
        $('*').bind('mousemove click mouseup mousedown keydown keypress keyup submit change mouseenter scroll resize dblclick', function () {

            function alertUser() {
                alert('Your session has been expired due to inactivity');  
                window.location.href="login.php";
            }
            
            clearTimeout(inactiveTime);

            // (alertUser, 1000 * (60*5) // 5 minutes
            inactiveTime = setTimeout(alertUser, 1000 * (60*5));
        });
        $("body").trigger("mousemove");
        });

        window.addEventListener('scroll', reveal);

        // Functions that slowly reveals each section 
        function reveal(){
        var reveals = document.querySelectorAll('.reveal');

        for(var i = 0; i < reveals.length; i++){

            var windowheight = window.innerHeight;
            var revealtop = reveals[i].getBoundingClientRect().top;
            var revealpoint = 150;

            if(revealtop < windowheight - revealpoint){
            reveals[i].classList.add('active');
            }
            else{
            reveals[i].classList.remove('active');
            }
        }
        }

    </script>
</body>
</html>