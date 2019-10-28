<?php 
    if (isset($_POST['submit'])) {
        $conn = new mysqli(host: "", username:"", passwd: "", dbname: "");
        $q = $connection->real_escape_string($_POST['q']);
    }
        $data = $connection->query(query: "SELECT * FROM psychologist");
        if ($data->num_rows > 0 ) {

        } else {
            echo "Your search could not be found";
        }

?>