<?php 
$link = mysql_connect('meckpsych.startlogicmysql.com', 'psyho', 'mecklenburg'); 
if (!$link) { 
    die('Could not connect: ' . mysql_error()); 
} 
echo 'Connected successfully'; 
mysql_select_db(psyho); 
?> 


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
      