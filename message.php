<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MPA</title>
    <link rel="stylesheet" href="contact.css">
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
</head>
<body>
    
        <header>
                <div class="container">
                    <nav id="nav-bar">
                        <ul>
                            <li class="nav-item"><a href="index.html">Home</a></li>
                            <li class="nav-item"><a href="about.html">About</a></li>
                            <li class="nav-item"><a href="member.html">sources</a></li>
                            <li class="nav-item"><a href="message.html#contact-start">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </header>
        
<div id="contact-start">
            <div id="img-container">

                    <div class="info-container">
                        <h1 class="landing-title">Contact Us Today</h1>
                        <button class="btn"><a href="#contact-wrapper">Learn more</a></button>
                    </div>
                </div>
                <div class="header-section">
                        <h1 class="header-title">Contact MPA below</h1>
                    </div>
                </div>
                        <!--Container -1 -->
                        <div id="contact-wrapper">
                        <div class="contact-container">  
                                <form id="con" action="contactform.php" method="post">
                                  <h3>Contact Form</h3>
                                  <h4>Contact us for any support</h4>
                                  <fieldset>
                                    <input placeholder="Your Name" type="text" tabindex="1" required autofocus>
                                  </fieldset>
                                  <fieldset>
                                    <input placeholder="Your Email Address" type="email" tabindex="2" required>
                                  </fieldset>
                                  <fieldset>
                                    <input placeholder="Your Phone Number (optional)" type="tel" tabindex="3">
                                  </fieldset>
                                  <fieldset>
                                    <textarea placeholder="Type your message here...." tabindex="5" type="message" required></textarea>
                                  </fieldset>
                                  <fieldset>
                                    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                                  </fieldset>
                                </form>
                              </div>

                            </div>
                <div class="contact-info-wrapper">
                    <h1 class="contact-title">Email and Address</h1>
                </div>
                <div class="contact-info-wrapper2">
                        <h1 class="contact-info">5970 Fairview Road
                                Charlotte, NC 28210
                                Suite 412</h1>
                    </div>
                    <div class="contact-info-wrapper3">
                            <h1 class="contact-email">mpacharlotte@gmail.com</h1>
                        </div>
<!-- Footer ish-->
    <div class="footer-container">

            <img src="img/NeroDEV_Inverted.png" alt="" class="nero">
            <p class="copyright-info">Copyright 2019 © Mecklenburg Psychological Association. 
                    All rights reserved.</p>
        </div>
</body>
</html>