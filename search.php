<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

</body>
</html>


<?php 
ini_set('display_errors', '1');

    if (isset($_POST['submit'])) {
        $conn = new mysqli("meckpsych.startlogicmysql.com","psyho","mecklenburg","psyho");
        $search = mysqli_real_escape_string($conn, $_POST['search']);
        $sql = "SELECT * FROM psychologist WHERE name LIKE  OR lastName like '%$search%' or company LIKE '%$search%' or address LIKE '%$search%' or city LIKE '%$search%' or state LIKE '%$search%' or zip LIKE '%$search%' or phone LIKE '%$search%' or otherphone LIKE '%$search%' or fax LIKE '%$search%' or email LIKE '%$search%'";
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);
    
        echo "There are ".$queryResult;

        if (queryResult > 0)  {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='psychologist'>
                <p>First Name: ".$row["name"]." </p> 
                <p>Last Name: ".$row["lastName"]." </p>
                <p>Company: ".$row["company"]." </p>
                <p>Address: ".$row["address"]." </p>
                <p>City: ".$row["city"]." </p>
                <p>State: ".$row["state"]." </p>
                <p>Zip: ".$row["zip"]." </p>
                <p>Phone: ".$row["phone"]." </p>
                <p>Other Phone: ".$row["otherphone"]." </p>
                <p>Fax: ".$row["fax"]." </p>
                <p>Email: ".$row["email"]." </p>
                </div>";
            }
        } else {
            echo "There are no results that match your search!";
        }
 
        }

?>

 