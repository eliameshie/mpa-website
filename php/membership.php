<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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

    <!--Nav-Bar-->
    <section class="navigation">
        <div class="nav-container">
            <div class="brand">
                <img class="mpa-logo" src="img/imageedit_1_2995670230.png" alt="">
            </div>
            <nav class="top-bar" data-options="scrolltop: false">
                <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
                <ul class="nav-list">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="#!">Resources</a>
                        <ul class="nav-dropdown">
                            <li>
                                <a href="faq.html">FAQs</a>
                            </li>
                            <li>
                                <a href="member.html">Resources</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="membership.html">Membership</a>

                    </li>
                    <li>
                        <a href="message.html#contact-start">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
    <div class="header-section">
        <h1 class="header-title">Welcome to MPA</h1>
    </div>

    <div class="member-wrapper">

        <h1 class="member-title">
                Become an MPA member today
            </h1>
        <p class="member-info">
            Membership in the Mecklenburg Psychological Association shall be open to those (1) who are able to verify that they are a permanent or temporary Licensed Psychologist, Licensed Psychological Associate, or a Certified School Psychologist in North Carolina, or (2) who are able to verify membership in APA, NCPA, NCSPA, or NASP. An individual who is in any of the above categories may become a member of the MPA. Student affiliate memberships are also open to graduate students in advanced study programs in psychology. The application must include a letter from the department verifying degree candidacy or include a current official transcript.
        </p>
    </div>

    <div class="member-img">

        <svg class="member-img1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="72" height="72" viewBox="0 0 172 172" style=" fill:#000000;">
            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                <path d="M0,172v-172h172v172z" fill="none"></path>
                <g fill="#cccccc">
                    <path d="M31.64811,14.30534l-24.45345,0.12598l0.06999,14.33333l14.83724,-0.06999l23.61361,56.64746l-8.5804,13.71745c-6.00821,9.59438 1.29744,22.77376 12.61165,22.77376h86.41992v-14.33333h-86.41992c-0.79745,0 -0.8894,-0.15716 -0.46191,-0.83985l8.42643,-13.49349h53.52604c5.203,0 10.005,-2.8258 12.52767,-7.37663l25.8112,-46.48535c2.65883,-4.773 -0.79584,-10.63802 -6.25684,-10.63802h-105.69434zM50.16667,129c-7.91608,0 -14.33333,6.41725 -14.33333,14.33333c0,7.91608 6.41725,14.33333 14.33333,14.33333c7.91608,0 14.33333,-6.41725 14.33333,-14.33333c0,-7.91608 -6.41725,-14.33333 -14.33333,-14.33333zM121.83333,129c-7.91608,0 -14.33333,6.41725 -14.33333,14.33333c0,7.91608 6.41725,14.33333 14.33333,14.33333c7.91608,0 14.33333,-6.41725 14.33333,-14.33333c0,-7.91608 -6.41725,-14.33333 -14.33333,-14.33333z"></path>
                </g>
            </g>
        </svg>

        <svg class="member-img2" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="72" height="72" viewBox="0 0 172 172" style=" fill:#000000;">
            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                <path d="M0,172v-172h172v172z" fill="none"></path>
                <g fill="#cccccc">
                    <path d="M28.66667,28.66667c-7.91917,0 -14.33333,6.41417 -14.33333,14.33333v71.66667c0,7.90483 6.4285,14.33333 14.33333,14.33333h-28.66667v14.33333h71.66667v-21.5v-7.16667h-43v-71.66667h121.83333c0,-7.91917 -6.41417,-14.33333 -14.33333,-14.33333zM121.83333,57.33333c-7.83362,0 -14.33333,6.49972 -14.33333,14.33333v14.33333h-21.5v57.33333c0,7.83362 6.49972,14.33333 14.33333,14.33333h57.33333c7.83362,0 14.33333,-6.49972 14.33333,-14.33333v-57.33333h-21.5v-14.33333c0,-7.83362 -6.49972,-14.33333 -14.33333,-14.33333zM121.83333,71.66667h14.33333v14.33333h-14.33333zM100.33333,100.33333h57.33333v43h-57.33333z"></path>
                </g>
            </g>
        </svg>

        <svg class="member-img3" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="72" height="72" viewBox="0 0 172 172" style=" fill:#000000;">
            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                <path d="M0,172v-172h172v172z" fill="none"></path>
                <g fill="#cccccc">
                    <path d="M14.33333,21.5v86h143.33333v-86zM35.20345,35.83333h101.5931c1.08296,3.05239 3.48439,5.45383 6.53678,6.53678v44.25977c-3.05239,1.08296 -5.45382,3.48439 -6.53678,6.53678h-101.5931c-1.08296,-3.05239 -3.4844,-5.45382 -6.53678,-6.53678v-44.25977c3.05239,-1.08296 5.45383,-3.4844 6.53678,-6.53678zM86,43c-11.87412,0 -21.5,9.62588 -21.5,21.5c0,11.87412 9.62588,21.5 21.5,21.5c11.87412,0 21.5,-9.62588 21.5,-21.5c0,-11.87412 -9.62588,-21.5 -21.5,-21.5zM50.16667,57.33333c-3.956,0 -7.16667,3.2035 -7.16667,7.16667c0,3.96317 3.21067,7.16667 7.16667,7.16667c3.956,0 7.16667,-3.2035 7.16667,-7.16667c0,-3.96317 -3.21067,-7.16667 -7.16667,-7.16667zM121.83333,57.33333c-3.956,0 -7.16667,3.2035 -7.16667,7.16667c0,3.96317 3.21067,7.16667 7.16667,7.16667c3.956,0 7.16667,-3.2035 7.16667,-7.16667c0,-3.96317 -3.21067,-7.16667 -7.16667,-7.16667zM28.59668,121.83333l116.13639,30.24837l7.88054,-30.24837h-14.80924l-1.69368,6.4528c-3.21784,0.2795 -6.12336,1.99513 -7.93652,4.66113l-42.69206,-11.11393z"></path>
                </g>
            </g>
        </svg>
    </div>

    <div class="member-img-text">
        <h1 class="text-1">Filler Text</h1>
        <h1 class="text-2">Filler Text</h1>
        <h1 class="text-3">Filler Text</h1>
    </div>

    <div class="last-section">
        <h1 class="calander-header">
  Calender of Events</h1>

        <div class="information-wrapper">

            <p class="info2">The MPA Member Supervision Listing and MPA Member Office Space Available Listing is information provided by our members. MPA is not endorsing, recommending any psychologist listed and assumes no liability. Please contact psychologists listed for additional and/or updated information regarding availability and services.</p>
            <p class="info1"><a href="http://www.mpacharlotte.org/download/MPA-Members-Supervisor-Listing-2018.pdf">Members Supervisor Listing 2018</a></p>
            <p class="info3"><a href="http://www.mpacharlotte.org/download/MPA-Office-Space-2018.pdf">MPA Members Office Space Availability Listing 2018</a> </p>
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