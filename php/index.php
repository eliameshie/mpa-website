<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MPA</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="css/fixed.css">
    <link rel="stylesheet" href="main/main.css">
    <link rel="stylesheet" href="./node_modules/sal.js/dist/sal.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

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
    <section class="navigation">
        <div class="nav-container borderXwidth">
            <div class="brand">
            </div>
            <nav class="top-bar" data-options="scrolltop: false">
                <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
                <ul class="nav-list">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="#!">About</a>
                        <ul class="nav-dropdown">
                            <li>
                                <a href="about-information.html">About</a>
                            </li>

                            <li>
                                <a href="faq.html">FAQs</a>
                            </li>
                            <li>
                                <a href="member.html">Resources</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="membership.html">Professionals</a>

                    </li>
                    <li>
                        <a href="message.html#contact-start">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
    
    <div id="img-container">
        <div class="red"></div>
        <img class="landing-image" src="img/memberimg1.jpg" alt="">
        <img class="landing-image" src="img/memberimg2.jpg" alt="">
        <img class="landing-image" src="img/memberimg3.jpg" alt="">
        <div class="red"></div>
    </div>

    <!--    <img clsrc="img/charlotte_nc.jpg" alt="">
        <div class="info-container">
            <h1 data-sal-duration="1200" data-sal="slide-up" data-sal-delay="600" data-sal-easing="ease-out-bounce" class="landing-title">Find a Psychologist Today</h1>
            <button data-sal-duration="1200" data-sal="fade" data-sal-delay="900" data-sal-easing="ease-out-bounce" class="btn"><a href="#about-wrapper">Read More</a></button>
        </div>
-->

    <div class="header-section">
        <h1 class="header-title">Welcome to MPA</h1>
    </div>
    <div id="search">
        <div class="search-container">
            <h1 class="search-title">Search for a Psychologist</h1>
            <h1 class="search-header">Look for a Psychologist close to you or for your needs</h1>
            <form id="searchbar" action="search.php" method="GET">
                <input type="text" name="query" maxlength="21" placeholder="Search..." class="searchbar">
                <img src="https://images-na.ssl-images-amazon.com/images/I/41gYkruZM2L.png" alt="Magnifying Glass" type="submit" class="button" name="submit">
            </form>
        </div>
    </div>
    <!-- Puzzle -->
    <div id="puzzle">
        <img class="puzzleimg" src="img/puzzle.png" alt="">
        <h1 class="puzzle-header">
              Find the best fit psychologist to meet to your needs.
            </h1>
    </div>

    <div id="about-wrapper">
        <div class="about-container">
            <h1 class="about-title">About Us</h1>
            <p class="about-info">The Mecklenburg Psychological Association (MPA) is an unaffiliated group of psychologists with expertise in psychological therapy and testing. Located in Charlotte, North Carolina, MPA has been in existence for over fifty five years. MPA includes members from surrounding counties, including Cabarrus, Gaston, Iredell, and Union. Mecklenburg Psychological Association is interested in further promoting the field of psychology within the greater Charlotte, NC area. In addition to sponsoring continuing education and professional development programming and publishing the MPA Newsletter, the Mecklenburg Psychological Association is constantly acting to expand the parameters of psychology in our county and to increase the quality of our service to our community.</p>
        </div>
    </div>

    <!-- ABOUT SECTION INTERGRATION -->

    <div class="img-underline">
        <!--Container -1 -->
        <div class="container-1-wrapper">
            <div class="container-1">
                <h1 class="container-1-title">Serving the Community</h1>
            </div>
            <div class="container-1-text">
                <p class="container-1-info">MPA is dedicated to the improvement of our community through the application of knowledge from the field of psychology to the issues and problems of people and organizations. Its members are involved in all areas of psychology and work in settings such as hospitals, clinics, private practice, schools, universities, industry, and community agencies. The MPA works to disseminate information to the public about psychology and its application to various issues. It serves as a resource for individuals and organizations interested in clinical services or in information or education about any of the various areas of psychology.
                </p>
            </div>
        </div>
    </div>
    <!--Container -2 -->
    <div id="services-wrapper">
        <div class="container-2-wrapper">
            <div class="container-2">
                <h1 class="container-2-title">Psychologist Services</h1>
            </div>
            <div class="container-2-text">
                <p class="container-2-info">MPA maintains an <a href="#search">"Provider Membership & Referral Directory"</a> for individuals and groups who are seeking clinical services. The psychologists participating in the referral service are all licensed psychologists who can provide services such as individual and group therapy, psychological testing, and consultation to individuals, groups and organizations. Multilingual therapists and therapists trained to help individuals or groups with special needs are available.

                </p>
            </div>
        </div>
    </div>

    <!--Container -3 -->
    <div class="container-3-wrapper">
        <div id="member-wrapper">
            <div class="container-3">

                <h1 class="container-3-title">MPA Board Members</h1>
                <div class="container-2-text">

                    <div class="member-container">

                        <div class="row-1">
                            <div class="board-1">
                                <p class="board-info">Joseph A. Parisi, Ph.D.</p>
                                <p class="board-info">President</p>
                                <p class="board-info">jp@drjoeparisi.com</p>
                            </div>

                            <div class="board-2">
                                <p class="board-info">Amy Combs, Psy.D.</p>
                                <p class="board-info">Past-President</p>
                                <p class="board-info">acombs@charlottebalance.com</p>
                            </div>

                            <div class="board-3">
                                <p class="board-info">Nona Patterson, Ph.D.</p>
                                <p class="board-info">Secretary</p>
                                <p class="board-info">drnlpatters.on@mac.com</p>
                            </div>

                            <div class="board-4">
                                <p class="board-info">Open Position</p>
                                <p class="board-info">Treasurer</p>
                                <p class="board-info">nniilampti@southeastpsych.com</p>
                            </div>

                            <div class="board-5">
                                <p class="board-info">Kevin Gyoerkoe, Psy.D.</p>
                                <p class="board-info">Member-at-Large</p>
                                <p class="board-info">kgyoerkoe@gmail.com</p>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Footer ish-->
    <footer>

        <img src="img/Nero.png" alt="" class="nero">
        <p class="copyright-info">Copyright 2019 © Mecklenburg Psychological Association. All rights reserved.</p>

    </footer>

</body>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
<script src="./node_modules/sal.js/dist/sal.js"></script>
<script>
    sal();
</script>
<script src="app.js"></script>

</html>