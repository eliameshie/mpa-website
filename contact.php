<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="contact.css">
    <title>MPA</title>
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

    
<!--Nav-Bar-->
<header>
    <div class="container">
        <nav id="nav-bar">
            <ul>
            <li class="nav-item"><a href="index.html">Home</a></li>
            <li class="nav-item"><a href="index.html">About</a></li>
            <li class="nav-item"><a href="location.html">Location</a></li>
            <li class="nav-item"><a href="contact.html">Contact</a></li>
        </ul>
        </nav>
    </div>
    </header>

    <div class="landing-img">
            <div class="title-container">
                    <h1 class="landing-title">Get in Touch</h1>
                </div>
                <div class="title-info">
                    <p>Want to get in touch with
                            us? Use the form below to send us an email!</h3>
                </div>
    </div>
    <div class="contact-container">
        <h1>
            Contact Us
        </h1>
    </div>
    <div class="container">  
            <form id="contact" action="contactform.php" method="post">
              <h3>Contact Form</h3>
              <h4>Contact us for any support</h4>
              <fieldset>
                <input placeholder="Your Name" type="text" tabindex="1" required autofocus>
              </fieldset>
              <fieldset>
                <input placeholder="Your Email Address" type="email" tabindex="2" required>
              </fieldset>
              <fieldset>
                <input placeholder="Your Phone Number (optional)" type="tel" tabindex="3" required>
              </fieldset>
              <fieldset>
                <textarea placeholder="Type your message here...." tabindex="5" type="message" required></textarea>
              </fieldset>
              <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
              </fieldset>
            </form>
          </div>

          <footer>
              <p class="copyright-info">Copyright 2019 © Mecklenburg Psychological Association. 
                  All rights reserved.</p>
                  <img class="nero-image" src="img/Nero.png" alt="">
          </footer>
</body>
</html>