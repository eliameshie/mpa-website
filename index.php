<?php include "dbh.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MPA</title>
    <link rel="stylesheet" href="index.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
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
    <div id="img-container">
        <div class="info-container">
            <h1 class="landing-title">Find a Psychologist Today</h1>
            <button class="btn"><a href="#about-wrapper">Read More</a></button>
        </div>
    </div>
    <div class="header-section">
        <h1 class="header-title">Welcome to MPA</h1>
    </div>
    <div id="about-wrapper">
    <div class="about-section">
        <h1 class="about-title"> About Us</h1>
        <p class="about-info">
            The Mecklenburg Psychological Association (MPA) is an unaffiliated group of psychologists with expertise in psychological therapy and testing. Located in Charlotte, North Carolina, MPA has been in existence for over forty years. MPA includes members from surrounding counties, including Cabarrus, Gaston, Iredell, and Union. Mecklenburg Psychological Association is interested in further promoting the field of psychology within the greater Charlotte, NC area. In addition to sponsoring continuing education and professional development programming and publishing the MPA Newsletter, the Mecklenburg Psychological Association is constantly acting to expand the parameters of psychology in our county and to increase the quality of our service to our community.
        </p>
    </div>
</div>
    <div class="image-title">
        Get matched to the best counselor for you
    </div>
    <div class="image-section">
        <img class="puzzle-img" src="img/puzzle.png" alt="">
        <p class="puzzle-info">Locate Licensed Psychologists in the Charlotte, North Carolina area who actively participate in their local professional association so they can keep up with the latest healthcare trends, share proven therapeutic techniques, and preserve the highest ethical standards for treatment of patients.</p>
        <img class="down-arrow" src="img/down-arrow.png" alt="">
    </div>
    <div class="communicate-title">
        Communicate your way
        <p class="communicate-header">Message, Email or Call</p>
    </div>
    <div class="communicate-section">
        <img class="communicate-image" src="img/communicate.png" alt="">
    </div>
    <div class="header-2">
        <h1 class="communicate-header2">
                Talk to them whenever you're ready.
        </h1>
    </div>
    <div class="section-2"></div>
    <div class="find-section">
        <h1 class="find-title">Find a Psychologist</h1>
    </div>
    <div class="header-container">
        <p class="find-header">Locate some close to you</p>
    </div>
    <div class="search-container">
        <form id="searchbar"  method="post">
        <input type="text" name="search" maxlength="21" placeholder="Search..." class="searchbar">
        <img src="https://images-na.ssl-images-amazon.com/images/I/41gYkruZM2L.png" alt="Magnifying Glass" class="button" name="submit">
        </form>
    </div>
    <div class="footer-container">
        <img src="img/NeroDEV_Inverted.png" alt="" class="nero">
        <p class="copyright-info">Copyright 2019 © Mecklenburg Psychological Association. 
                All rights reserved.</p>
    </div>
</body>
</html>


<?php

$con = new PDO("mysql:hostmeckpsych.startlogicmysql.com;dbname=Psyho", 'psyho', '');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `psychologist` WHERE name = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

  	if($row = $sth->fetch()) {
		?>
  		<?php 
<br>
      // Build your formatted results here.
        $variable=$row["id"];
		$variable1=$row["name"];
		$variable20=$row["address"];
		$variable2=$row["city"];
		$variable3=$row["specialties"];
		$variable4=$row["state"];
		$variable5=$row["zip"];
		$variable6=$row["phone"];
		$variable7=$row["otherPhone"];
		$variable10=$row["email"];
		$variable8=$row["fax"];
		$variable9=$row["website"];
		$variable16=$row["treatmentOrientation"];
		$variable17=$row["treatmentModality"];
		$variable11=$row["assessmentEvaluations"];
		$variable18=$row["populationsServed"];
		$variable19=$row["languages"];
		$variable21=$row["imgurl"];
		$variable22=$row["ps_url"];
echo "<table width='680px'>";
  echo "<tr>";
 echo " <td width='153' align='center' valign='top' class='ramka'><img src='http://www.mpacharlotte.org/search/images/".$variable21."' width='130' height='180' hspace='5' /></td> ";
 
     echo "  <td width='515' class='ramka'>";
  		echo "<br><br>";
		
		if($variable22 !== ""){ 
		
  		echo "<b>Name: </b>
		
		<a href='".$variable22."' target='_blank' >".$variable1."</a><br><br>";
		
		}
		else {
		
		echo "<b>Name: </b>".$variable1."<br><br>";
		}
		echo "<b>Address: </b>".$variable20."<br><br>";
		echo "<b>City: </b>".$variable2."<br><br>";
		echo "<b>Specialities: </b>".$variable3."<br><br>";
		echo "<b>State: </b>".$variable4."<br><br>";
		echo "<b>Zip: </b>".$variable5."<br><br>";
		echo "<b>Phone: </b>".$variable6."<br><br>";
		echo "<b>Other Phone: </b>".$variable7."<br><br>";
		echo "<b>E-mail: </b>".$variable10."<br><br>";
		echo "<b>Fax: </b>".$variable8."<br><br>";
		echo "<b>Website: </b>".$variable9."<br><br>";
		echo "<b>Treatment Orientation: </b>".$variable16."<br><br>";
		echo "<b>Treatment Modality: </b>".$variable17."<br><br>";
		echo "<b>Assessment Evaluations: </b>".$variable11."<br><br>";
		echo "<b>Populations Served: </b>".$variable18."<br><br>";
		echo "<b>Languages: </b>".$variable19."<br><br>";
<br><br>
</td>
</tr>
</table>
<br><br>
		
		
		
		  }//while
		 if (isset($variable2))  {
		  echo "";
		  }else {
		  
		  echo "No record ($variable1) ";
		  }
		  
		  }//trimm
		  ?></td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>

	<?php
	}
	else {
		echo "Search doesn't exist";
	}
}
?>
