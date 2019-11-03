<?php
//Database connection.
$con = MySQLi_connect(
   "meckpsych.startlogicmysql.com", //Server host name.
   "psyho", //Database username.
   "mecklenburg", //Database password.
   "psyho" //Database name or anything you would like to call it.
);
//Check connection
if (MySQLi_connect_errno()) {
   echo "Failed to connect to MySQL: " . MySQLi_connect_error();
}
?>
