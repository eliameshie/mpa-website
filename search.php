<?php 
 $conn = mysql_connect("meckpsych.startlogicmysql.com", "psyho", "mecklenburg") or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ("psyho");

?>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>

<h1> Psychologist Results </h1>

<div class="psychologist-drop">

<?php 
   
    if (isset($_POST['submit'])) {
        $search = mysqli_real_escape_string($conn, $_POST['query']);
        $sql = "SELECT * FROM psychologist WHERE name LIKE  OR lastName like '%$query%' or company LIKE '%$query%' or address LIKE '%$query%' or city LIKE '%$query%' or state LIKE '%$query%' or zip LIKE '%$query%' or phone LIKE '%$query%' or otherphone LIKE '%$query%' or fax LIKE '%$query%' or email LIKE '%$query%'";
        $result = mysqli_query($sql);
        $queryResult = mysqli_num_rows($result);
    
        echo "There are ".$queryResult;

        if (queryResult > 0)  {
            while ($row = mysqli_fetch_array($result)) {
                echo $row['name']. "<br>";
            }
        } else {
            echo "There are no results that match your query!";
        }
 
        }

?>

</div> 
</body>
</html>