<?php 
include_once 'dbh.php';
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
        $sql = "SELECT * FROM psychologist WHERE name LIKE  OR lastName like '%$search%' or company LIKE '%$search%' or address LIKE '%$search%' or city LIKE '%$search%' or state LIKE '%$search%' or zip LIKE '%$search%' or phone LIKE '%$search%' or otherphone LIKE '%$search%' or fax LIKE '%$search%' or email LIKE '%$search%'";
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);
    
        echo "There are ".$queryResult;

        if (queryResult > 0)  {
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['name']. "<br>" 
            }
        } else {
            echo "There are no results that match your search!";
        }
 
        }

?>

</div> 
</body>
</html>