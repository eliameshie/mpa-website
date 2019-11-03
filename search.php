<?php

$connection = new mysqli('meckpsych.startlogicmysql.com', 'psyho', 'mecklenburg', 'psyho');

$search = $_GET['search'];
$search = $connection -> real_escape_string($search);

$query = "SELECT * FROM psychologist WHERE name LIKE  OR lastName like '%$search%' or company LIKE '%$search%' or address LIKE '%$search%' or city LIKE '%$search%' or state LIKE '%$search%' or zip LIKE '%$search%' or phone LIKE '%$search%' or otherphone LIKE '%$search%' or fax LIKE '%$search%' or email LIKE '%$search%'";
$result= $connection -> query($query);

while($row = $result -> fetch_object()){
    echo "<div id='link' onClick='addText(\"".$row -> name."\");'>" . $row -> name . "</div>";  
}
  ?>