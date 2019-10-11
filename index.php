<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MPA</title>
    <link rel="stylesheet" href="index.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script type="text/javascript">
        $(window).on('scroll', function() {
            if ($(window).scrollTop()) {
                $('nav').addClass('black');
            } else {
                $('nav').removeClass('black');
            }
        })
    </script>
</head>

<body>

    <!--Nav-Bar-->
    <header>
        <div class="container">
            <nav id="nav-bar">
                <ul>
                    <li class="nav-item"><a href="index.php">Home</a></li>
                    <li class="nav-item"><a href="about.php">About</a></li>
                    <li class="nav-item"><a href="member.php">Sources</a></li>
                    <li class="nav-item"><a href="message.php#contact-start">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div id="img-container">

        <div class="info-container">
            <h1 class="landing-title">Find a Psychologist Today</h1>
            <button class="btn"><a href="#about-wrapper">Read More</a></button>
        </div>
    </div>

    <div class="header-section">
        <h1 class="header-title">Welcome to MPA</h1>
    </div>
    <div id="about-wrapper">
    <div class="about-section">

        <h1 class="about-title"> About Us</h1>

        <p class="about-info">
            The Mecklenburg Psychological Association (MPA) is an unaffiliated group of psychologists with expertise in psychological therapy and testing. Located in Charlotte, North Carolina, MPA has been in existence for over forty years. MPA includes members from surrounding counties, including Cabarrus, Gaston, Iredell, and Union. Mecklenburg Psychological Association is interested in further promoting the field of psychology within the greater Charlotte, NC area. In addition to sponsoring continuing education and professional development programming and publishing the MPA Newsletter, the Mecklenburg Psychological Association is constantly acting to expand the parameters of psychology in our county and to increase the quality of our service to our community.
        </p>
    </div>
</div>
    <div class="image-title">
        Get matched to the best counselor for you
    </div>
    <div class="image-section">

        <img class="puzzle-img" src="img/puzzle.png" alt="">
        <p class="puzzle-info">Locate Licensed Psychologists in the Charlotte, North Carolina area who actively participate in their local professional association so they can keep up with the latest healthcare trends, share proven therapeutic techniques, and preserve the highest ethical standards for treatment of patients.</p>
        <img class="down-arrow" src="img/down-arrow.png" alt="">
    </div>

    <div class="communicate-title">
        Communicate your way
        <p class="communicate-header">Message, Email or Call</p>
    </div>

    <div class="communicate-section">

        <img class="communicate-image" src="img/communicate.png" alt="">
    </div>
    <div class="header-2">
        <h1 class="communicate-header2">
                Talk to them whenever you're ready.
        </h1>
    </div>
    <div class="section-2"></div>

    <div class="find-section">

        <h1 class="find-title">Find a Psychologist</h1>
    </div>
    <div class="header-container">
        <p class="find-header">Locate some close to you</p>
    </div>
    <div class="search-container">
        <form id="search" action="search.php" method="post">
        <input type="text" maxlength="21" placeholder="Search..." class="searchbar">
        <img src="https://images-na.ssl-images-amazon.com/images/I/41gYkruZM2L.png" alt="Magnifying Glass" class="button">
        </form>
    </div>

    <div class="footer-container">

        <img src="img/NeroDEV_Inverted.png" alt="" class="nero">
        <p class="copyright-info">Copyright 2019 © Mecklenburg Psychological Association. 
                All rights reserved.</p>
    </div>
</body>

</html>