 <?
 include 'dbh.php';

  $sql = "SELECT * FROM psychologist WHERE City LIKE \"%$City%\" AND Specialties LIKE  \"%$Specialties%\" ORDER BY name "  ;
 
 
  $result = mysql_query($sql) or die(mysql_error());
  echo "<br>";
  while($row = mysql_fetch_array($result)){
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
		echo "<br><br>";
 echo " </td>";
 echo " </tr>";
echo "</table>";
		echo "<br><br>";

		

?>