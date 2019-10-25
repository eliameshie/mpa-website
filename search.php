<?php 
$link = mysqli_connect('meckpsych.startlogicmysql.com', 'psyho', 'mecklenburg'); 
if (!$link) { 
    die('Could not connect: ' . mysql_error()); 
} 
echo 'Connected successfully'; 
mysqli_select_db(psyho); 
?> 


<?php 
    $sql = "SELECT * FROM psychologist";
    $result = mysqli_query($link, $sql);
    $queryResults = mysqli_num_rows($result);

    if ($queryResults > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div> 
                <h3>".$row['name']."</h3>
                <h3>".$row['lasttName']."</h3>

            </div";
        }
    }

?>