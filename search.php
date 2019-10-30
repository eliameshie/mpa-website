<?php 

    if (isset($_POST['submit'])) {
        $conn = new mysqli("meckpsych.startlogicmysql.com","psyho","mecklenburg","psyho");
        $search = mysqli_real_escape_string($conn, $_POST['search']);
        $sql = "SELECT * FROM psychologist WHERE name LIKE  OR lastName like '%$search%' or company LIKE '%$search%' or address LIKE '%$search%' or city LIKE '%$search%' or state LIKE '%$search%' or zip LIKE '%$search%' or phone LIKE '%$search%' or otherphone LIKE '%$search%' or fax LIKE '%$search%' or email LIKE '%$search%'";
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);
        $echoHtml = "<p>".$row['name']."</p> 
                <p>".$row['lastName']."</p>
                <p>".$row['company']."</p>
                <p>".$row['address']."</p>
                <p>".$row['city']."</p>
                <p>".$row['state']."</p>
                <p>".$row['zip']."</p>
                <p>".$row['phone']."</p>
                <p>".$row['otherphone']."</p>
                <p>".$row['fax']."</p>
                <p>".$row['email']."</p>"
        $echoQueryResult = ""There are ".$queryResult";
        echo echoQueryResult;

        if (queryResult > 0)  {
            while ($row = mysqli_fetch_assoc($result)) {
                echo $echoHtml;
            }
        } else {
            echo "There are no results that match your search!";
        }
 
        }

?>

 