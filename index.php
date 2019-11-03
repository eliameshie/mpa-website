<?php 
  include_once 'dbh.php';
 ?>

<!DOCTYPE html>
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
      
    <div id="img-container">

        <div class="info-container">
            <h1 data-sal-duration="1200" data-sal="slide-up" data-sal-delay="600" data-sal-easing="ease-out-bounce" class="landing-title">Find a Psychologist Today</h1>
            <button data-sal-duration="1200" data-sal="fade" data-sal-delay="900" data-sal-easing="ease-out-bounce" class="btn"><a href="#about-wrapper">Read More</a></button>
        </div>
    </div>
    <div class="header-section">
        <h1 class="header-title">Welcome to MPA</h1>
    </div>
    <div class="search-container"> 
        <h1 class="search-title">Search for a Psychologist</h1>
        <h1 class="search-header">Look for a Psychologist close to you or for your needs</h1>
        <form id="searchbar" action="search.php" method="POST">
            <input type="text" name="query" maxlength="21" placeholder="Search..." class="searchbar">
            <img src="https://images-na.ssl-images-amazon.com/images/I/41gYkruZM2L.png" alt="Magnifying Glass" type="submit" class="button" name="submit">
            </form>
<div class="psychologist-drop"> 
<?php 
  $sql = "SELECT * FROM psychologist";
  $result = mysqli_query($sql);
  $queryResults = mysqli_num_rows($result);

  if (queryResults > 0 ) {
    while($row = mysqli_fetch_array($result)) {
      echo $row['name'] . "<br>";
       
    }
  }

?>
</div>
    

    </div>

    <div class="about-container">
        <h1 class="about-title">About Us</h1>
        <p class="about-info">The Mecklenburg Psychological Association (MPA) is an unaffiliated group of psychologists with expertise in psychological therapy and testing. Located in Charlotte, North Carolina, MPA has been in existence for over forty years. MPA includes members from surrounding counties, including Cabarrus, Gaston, Iredell, and Union. Mecklenburg Psychological Association is interested in further promoting the field of psychology within the greater Charlotte, NC area.
            In addition to sponsoring continuing education and professional development programming and publishing the MPA Newsletter, the Mecklenburg Psychological Association is constantly acting to expand the parameters of psychology in our county and to increase the quality of our service to our community.</p>
            <img class="puzzleimg" src="img/puzzle.png" alt="">
            <h1 class="puzzle-header">
              Find the best fit psychologist to meet to your needs.
            </h1>
    </div>
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