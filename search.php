<?php 

    if (isset($_POST['submit'])) {
        $conn = new mysqli("meckpsych.startlogicmysql.com","psyho","mecklenburg","psyho");
        $q = $connection->real_escape_string($_POST['q']);
    }
        $data = $connection->query("SELECT * FROM psychologist");
        if ($data->num_rows > 0 ) {

        } else {
            echo "Your search could not be found";
        }

?>