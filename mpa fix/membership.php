<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mecklenburg Psychological Association</title>
    <link rel="stylesheet" href="membership.css">
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

    <div class="section-2"> 
        <div class="information-wrapper">
        </div>
        <div class="col-1">
                    <h1 class="content-title">Become a MPA member today</h1>
                    <p class="content-info">Membership in the Mecklenburg Psychological Association shall be open to those (1) who are able to verify that they are a permanent or temporary Licensed Psychologist, Licensed Psychological Associate, or a Certified School Psychologist in North Carolina, or (2) who are able to verify membership in APA, NCPA, NCSPA, or NASP. An individual who is in any of the above categories may become a member of the MPA. Student affiliate memberships are also open to graduate students in advanced study programs in psychology. The application must include a letter from the department verifying degree candidacy or include a current official transcript. <a href="MPA 2020 Membership Application.pdf">Apply Here</a></p>
                 <img class="image-member-1" src="img/memberimg1.jpg" alt="">

             </div>
             <div class="col-2">
                    <h1 class="info-title">MPA Supervision/Office Space Listings</h1>
                    <p class="info-info">The MPA Member Supervision Listing and MPA Member Office Space Available Listing is information provided by our members. MPA is not endorsing, recommending any psychologist listed and assumes no liability. Please contact psychologists listed for additional and/or updated information regarding availability and services. <br>
                        <div class="url">
                        <a class="link-1" href="http://www.mpacharlotte.org/download/MPA-Members-Supervisor-Listing-2018.pdf">Members Supervisor Listing 2018</a>
                        <br>
                        <a class="link-2" href="http://www.mpacharlotte.org/download/MPA-Office-Space-2018.pdf">MPA Members Office Space Availability Listing 2018</a></div>
                    </p>
                </div>
            </div>
    <!--
    <div class="total-wrapper">
        <div class="member-wrap">
            <h1 class="member-title">
                Become an MPA member today
            </h1>
        <p class="member-info">
            Membership in the Mecklenburg Psychological Association shall be open to those (1) who are able to verify that they are a permanent or temporary Licensed Psychologist, Licensed Psychological Associate, or a Certified School Psychologist in North Carolina, or (2) who are able to verify membership in APA, NCPA, NCSPA, or NASP. An individual who is in any of the above categories may become a member of the MPA. Student affiliate memberships are also open to graduate students in advanced study programs in psychology. The application must include a letter from the department verifying degree candidacy or include a current official transcript. <a href="#">Apply Here</a>
        </p>

        <div class="member-underline">
        </div>
        <img class="member-image" src="img/memberimg2.jpg" alt="">
    </div>

    <div class="last-section">

        <div class="information-wrapper">
             <h1 class="calander-header">
  Calender of Events</h1>

            <p class="info2">The MPA Member Supervision Listing and MPA Member Office Space Available Listing is information provided by our members. MPA is not endorsing, recommending any psychologist listed and assumes no liability. Please contact psychologists listed for additional and/or updated information regarding availability and services.</p>
            <p class="info1"><a href="http://www.mpacharlotte.org/download/MPA-Members-Supervisor-Listing-2018.pdf">Members Supervisor Listing 2018</a></p>
            <p class="info3"><a href="http://www.mpacharlotte.org/download/MPA-Office-Space-2018.pdf">MPA Members Office Space Availability Listing 2018</a> </p>
        </div>
    </div>
</div>

-->
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