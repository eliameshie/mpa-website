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
            <a href="#!">Logo</a>
          </div>
          <nav>
            <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
            <ul class="nav-list">
              <li>
                <a href="index.php">Home</a>
              </li>
              <li>
                <a href="#!">About</a>
                <ul class="nav-dropdown">
                  <li>
                    <a href="about.php">About MPA</a>
                  </li>
                  <li>
                    <a href="faq.php">FAQs</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="member.php">Resources</a>
              </li>
              <li>
                <a href="#!">Membership</a>
                <ul class="nav-dropdown">
                  <li>
                    <a href="membership.php">Membership</a>
                  </li>
                  <li>
                    <a href="#!">Newsletter</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="message.php#contact-start">Contact</a>
              </li>
            </ul>
          </nav>
        </div>
      </section>
          
     <div class="landing-wrapper">
        <h1 class="landing-title">
            Apply For A Membership Today
        </h1>
        <p class="landing-info">
            If you're a psychologist that would like to be dislayed on this website, sign up
            and pay for a membership for your name to appear.
        </p>
     </div>   
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

             <!-- Footer ish-->
    <div class="footer-container">

            <img src="img/Nero.png" alt="" class="nero">
            <p class="copyright-info">Copyright 2019 © Mecklenburg Psychological Association. 
                    All rights reserved.</p>
        </div>
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