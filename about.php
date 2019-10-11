<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MPA</title>
    <link rel="stylesheet" href="about.css">
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

    <!--Lander Ish-->
    <div id="img-wrapper">
    <div id="img-container">

            <div class="info-container">
                    <button class="btn"><a href="#about-wrapper">Read More</a></button>
                <h1 class="landing-title">MPA offers the best in NC</h1>
                <div class="img-underline">
                    <ul class="word-container">
                    <li class="item-1"><a href="#about-wrapper">About</a></li>
                    <li class="item-2"><a href="#services-wrapper">Services</a></li>
                    <li class="item-3"><a href="#member-wrapper">Member</a></li>
                    </ul>
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
                <h1 class="container-2-title">Pyschologist Services</h1>
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
                
                <h1 class="container-3-title">Membership & Staff</h1>            <div class="container-2-text">
                <p class="container-3-text">MPA maintains an
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
                    <div id="container-3-image">
                      <img class="img-1" src="img/nona.jpg" alt="">
                      <img class="img-2"  src="img/nona.jpg" alt="">
                      <img class="img-3" src="img/nona.jpg" alt="">

                    </div>
                  </div>
            </div>
                          </div>

                </div>
        </div>
    </div>
        


        
        
        <div class="footer-container">

          <img src="img/NeroDEV_Inverted.png" alt="" class="nero">
          <p class="copyright-info">Copyright 2019 © Mecklenburg Psychological Association. 
                  All rights reserved.</p>
      </div>

        <script src="about.js"></script>
</body>
</html>