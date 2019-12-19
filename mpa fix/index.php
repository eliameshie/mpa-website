<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mecklenburg Psychological Association</title>
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
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="#!">About</a>
                        <ul class="nav-dropdown">
                            <li>
                                <a href="about-information.php">About</a>
                            </li>

                            <li>
                                <a href="faq.php">FAQs</a>
                            </li>
                            <li>
                                <a href="member.php">Resources</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="membership.php">Professionals</a>

                    </li>
                    <li>
                        <a href="message.php#contact-start">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>

    <div class="total-img-container">
    <div id="img-container">
        <div class="sub-container">
        <h1 class="landing-title"> Mecklenburg Psychological Association</h1>
        <h1 class="landing-sub-title">Supporting mental health since 1960</h1>
    </div>
    </div>
</div>
    <div class="header-section">
        <h1 class="header-title">Welcome to <span class="text-color">MPA</span></h1>
    </div>

    <!--Section 1-->
    <div class="section-1">
        <div class="information-container">
            <div class="row-1">
                <div class="col-1">
                    <h1 class="search-title">Find A Psychologist</h1>
                    <p class="search-info">Locate Licensed Psychologists in the Charlotte, North Carolina area who actively participate in their local professional association so they can keep up with the latest healthcare trends, share proven therapeutic techniques, and preserve the highest ethical standards for treatment of patients.
                        <br> <a href="search-bar.php">Find a psychologist</a></p>
                </div>
                <div class="search-seperate">

                </div>
                <img class="search-image" src="img/membershiplanding.jpg" alt="">

            </div>

        </div>
        <div class="seperate-center">
            <div class="row-seperate">

            </div>
        </div>
        <div class="sub-information-container">
            <div class="row-2">
                <div class="col-2">
                    <h1 class="about-title">About Us</h1>
                    <p class="about-info">The Mecklenburg Psychological Association, is a not-for-profit association of licensed ...

                        <br> <a href="about-information.php">Read more about us</a></p>

                </div>

            </div>

        </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    <!-- Footer ish-->
    <footer>

        <a href="https://thenerodev.com"><img src="img/NeroDEV_Inverted.png" alt="" class="nero"></a>
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