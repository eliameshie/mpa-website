<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MPA</title>
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="css/fixed.css">
    <link rel="stylesheet" href="main/main.css">
    <link rel="stylesheet" href="./node_modules/sal.js/dist/sal.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script
    src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script type="text/javascript">
      $(window).on('scroll', function(){
          if ($(window).scrollTop()){
              $('nav').addClass('black');
          }
          else
          {
              $('nav').removeClass('black');
          }
      })
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
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
      
    <!--Lander Ish-->
    <div id="img-wrapper">
    <div id="img-container">

            <div class="info-container">
                    <button class="btn"><a href="#about-wrapper">Read More</a></button>
                <h1 class="landing-title">MPA offers the best in NC</h1>
                <div class="img-underline">
                    <div class="word-container">
                        <p class="item-1"><a href="#about-wrapper">About</a></p>
                        <p class="item-2"><a href="#services-wrapper">Services</a></p>
                        <p class="item-3"><a href="#member-wrapper">Member</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Container -1 -->
    <div id="about-wrapper"></div>
    <div class="container-1-wrapper">
    <div class="container-1">
        <h1 class="container-1-title">Serving the Community</h1>
    </div>
    <div class="container-1-text">
            <p class="container-1-info">MPA is dedicated to the 
                improvement of our community through the application 
                of knowledge from the field of psychology to the issues 
                and problems of people and organizations. Its members
                 are involved in all areas of psychology and work in 
                 settings such as hospitals, clinics, private practice, 
                 schools, universities, industry, and community agencies. 
                 The MPA works to disseminate information to the public 
                 about psychology and its application to various issues. 
                 It serves as a resource for individuals and organizations
                  interested in clinical services or in information or 
                  education about any of the various areas of psychology.
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
                    <p class="container-2-info">MPA maintains an
                         "Provider Membership & Referral Directory" 
                         for individuals and groups who are seeking
                          clinical services. The psychologists participating
                          in the referral service are all licensed 
                          psychologists who can provide services such as 
                          individual and group therapy, psychological testing,
                           and consultation to individuals,
                            groups and organizations. Multilingual therapists
                             and therapists trained to help individuals or 
                             groups with special needs are available.
        
                        </p>
                </div>
        </div>
</div>

            <!--Container -3 -->
    <div class="container-3-wrapper">
            <div id="member-wrapper">
            <div class="container-3">
                
                <h1 class="container-3-title">MPA Board Members</h1>            <div class="container-2-text">

                    <div class="member-container">


                      
                    </div>

                  </div>
            </div>
                          </div>

                </div>
        </div>
    </div>
        

    <div class="footer-container">

        <img src="img/Nero.png" alt="" class="nero">
        <p class="copyright-info">Copyright 2019 © Mecklenburg Psychological Association. 
                All rights reserved.</p>
    </div>
        <script src="app.js"></script>
</body>
<script>
    sal();
</script>
</html>