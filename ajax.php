<?php
$con = new MySQLi(
   "meckpsych.startlogicmysql.com", //Server host name.
   "nerodev", //Database username.
   "nero", //Database password.
   "psyho"); //Database name or anything you would like to call it.
//Getting value of "search" variable from "script.js".
if (isset($_POST['search'])) {
//Search box value assigning to $Name variable.
   $Name = $_POST['search'];
//Search query.
   $Query = "SELECT name FROM psychologist WHERE name LIKE '%$Name%' LIMIT 5";
//Query execution
   $ExecQuery = MySQLi_query($con, $Query);
//Creating unordered list to display result.
   echo '
<ul>
   ';
   //Fetching result from database.
   while ($Result = MySQLi_fetch_array($ExecQuery)) {
       ?>
   <!-- Creating unordered list items.
        Calling javascript function named as "fill" found in "script.js" file.
        By passing fetched result as parameter. -->
   <li onclick='fill("<?php echo $Result['name']; ?>")'>
   <a>
   <!-- Assigning searched result in "Search box" in "search.php" file. -->
       <?php echo $Result['name']; ?>
   </li></a>
   <!-- Below php code is just for closing parenthesis. Don't be confused. -->
   <?php
}}
?>
</ul>