<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mecklenburg Psychological Association</title>
    <link rel="stylesheet" href="search-bar.css">
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

    <div class="search-section">
        <div id="search">
            <div class="search-container">
                <h1 class="search-title">Find a Psychologist</h1>
                <h1 class="search-header">Look for a Psychologist close to you or for your needs</h1>
            <form id="searchbar" action="search.php" method="POST">
                <input type="text" name="query" maxlength="21" placeholder="Search..." class="searchbar">
                <img src="https://images-na.ssl-images-amazon.com/images/I/41gYkruZM2L.png" alt="Magnifying Glass" type="submit" class="button" name="submit">
            </form>
            </div>
        </div>
        <!-- Puzzle -->
        <div id="puzzle">
            <h1 class="puzzle-header">
              Search for disorders, location and name
            </h1>
        </div>
    </div>
    <div class="center-seperate">
        <div class="section-seperate">
            <div class="word-col">
                <p class="search-info">Welcome to the <span class="text-color">Mecklenburg Psychological Association (MPA)</span> Psychologist Membership & Referral Directory. The Mecklenburg Psychological Association provides this service as a way for you to find licensed psychologists in your area. Using our search engine, you will receive a list of psychologists whose self-described services match with your needs. You may click on any psychologist's name to find out more about that psychologist. Many psychologists have web pages that further describe their services.
                </p>

                <p class="search-info2">
                    You may want to contact at least three psychologists by phone before making a decision about with whom you wish to schedule an initial appointment. You may want to discuss how much experience the psychologist has had with patients/clients with problems similar to the one(s) you have, the cost of services, how frequently you would be seen, the estimated length of treatment and any questions you have about training or experience. If you plan to use medical insurance to help cover the cost of therapy, you may want to call your insurance company to understand your mental health benefits, including co-pays and deductibles for in- or out-of-network providers. Please consider that you may need to leave a phone number and a time you can be reached in case the therapist is unavailable when you call.

                </p>
                <p class="search-info3">
                    Psychologists in the <span class="text-color">MPA Membership & Referral Directory are licensed in the State of North Carolina.</span> Psychologists provide testing/assessment, psychotherapy, consultation and other services. Psychologists do not prescribe medication. MPA hopes that this information will assist you in selecting a suitable therapist. Psychologists listed in this directory and their identified areas of specialization are based on self-report. MPA assumes no liability in the event you are not satisfied or helped by a psychologist you choose to meet with from this list.

                </p>

            </div>
        </div>
    </div>

    <!-- Footer ish-->
    <footer>

        <a href="https://thenerodev.com"><img src="img/NeroDEV_Inverted.png" alt="" class="nero"></a>
        <p class="copyright-info">Copyright 2019 © Mecklenburg Psychological Association. All rights reserved.</p>

    </footer>
    <script src="app.js"></script>
</body>

</html>