<?php 

$servername = 'meckpsych.startlogicmysql.com';
$username = 'nerodev';
$password = 'nero';
$database = 'psyho';

$conn = mysqli_connect($servername, $username, $password, $database) or die();

if (isset($_POST['submit'])) {
    $keyword = $_POST['search']
    $sqll = "SELECT * FROM psychologist WHERE name LIKE '%$keyword%'";
    $query = mysqli_query($conn, $sqll);


    if (mysqli_num_rows($query) < 1) {
        echo "There's not results that match your search.";

    } else {
        while($fetch = mysqli_fetch_assoc($query)) {
            $name = $fetch['name'];
            $lastname = $fetch['lastName'];

            echo $name." - ".$lastName."<br>";
        }


}


}


?>