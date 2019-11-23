<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MPA</title>
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="search.css">
</head>
<body>

<?php 
$link = mysql_connect('meckpsych.startlogicmysql.com', 'nerodev', 'nero'); 
if (!$link) { 
    die('Could not connect: ' . mysql_error()); 
} 
mysql_select_db(psyho);



if (isset($_POST['search'])) {
    $keyword = $_POST['search'];
    $sql = "SELECT * FROM psychologist WHERE name LIKE '%$keyword%' OR lastName like '%$keyword%' or company LIKE '%$keyword%' or address LIKE '%$keyword%' or city LIKE '%$keyword%' or state LIKE '%$keyword%' or zip LIKE '%$keyword%' or phone LIKE '%$keyword%' or otherphone LIKE '%$keyword%' or fax LIKE '%$keyword%' or email LIKE '%$keyword%' or website LIKE '%$keyword%' or specialties LIKE '%$keyword%' or treatmentOrientation LIKE '%$keyword%' or insuranceAccepted LIKE '%$keyword%' or treatmentModality LIKE '%$keyword%' or assessmentEvaluations LIKE '%$keyword%' or populationsServed LIKE '%$keyword%' or languages LIKE '%$keyword%' LIMIT 36";
    $query = mysql_query($sql);
    $count = mysql_num_rows($query);


    if ($count < 0) {
        echo "There's not results that match your search.";

    } else {
        while($fetch = mysql_fetch_assoc($query)) {
            $name = $fetch['name'];
            $lastname = $fetch['lastName'];
            $company = $fetch['company'];
            $address = $fetch['address'];
            $city = $fetch['city'];
            $state = $fetch['state'];
            $zip = $fetch['zip'];
            $phone = $fetch['phone'];
            $otherphone = $fetch['otherphone'];
            $fax = $fetch['fax'];
            $email = $fetch['email'];
            $website = $fetch['website'];
            $website2 = $fetch['website2'];
            $specialties = $fetch['specialties'];
            $treatmentOri = $fetch['treatmentOrientation'];
            $insuranceAcc = $fetch['insuranceAccepted'];
            $treatmentMod = $fetch['treatmentModality'];
            $asssementEval = $fetch['assessmentEvaluations'];
            $popServed = $fetch['populationsServed'];
            $languages = $fetch['languages'];
            $imgurl = $fetch['imgurl'];
            $psurl = $fetch['ps_url'];

            echo '
<div class="row">
<div class="column">
    <div class="card border-dark mb-3"> 
        <img src="images/'.$imgurl.'" class="card-img-top">
            <div class="card-body"> 
                <h4 class="card-title">'.$name.' '.$lastname.'</h4>
                <h6 class="card-subtitle mb-2 text-muted">'.$company.'</h6>
                <h6 class="card-subtitle mb-2 text-muted">'.$address.' '.$city.', '.$state.'  '.$zip.'</h6>
                <h6 class="card-subtitle mb-2 text-muted">Phone: '.$phone.' </h6>
                <h6 class="card-subtitle mb-2 text-muted">Fax: '.$fax.' </h6>
            
                <p class="card-text">Specialities: '.$specialties.' </p>
                <p class="card-text">Assessments/Evaluations: '.$asssementEval.'</p>
                <p class="card-text">Population Served: '.$popServed.' </p>
                <p class="card-text">Treatment Modality: '.$treatmentMod.' </p>
                <p class="card-text">Treatment Orientation: '.$treatmentOri.'</p>
                <p class="card-text">Insurance Accepted: '.$insuranceAcc.' </p>
                <p class="card-text">Languages: '.$languages.' </p>
                <a href="http://'.$website.'" class="btn">Website</a>
                <a href="'.$email.'" class="btn">Email</a>
            </div>
    </div>
</div>

</div> ';




        }


}


}


?>
    
<footer>
<div class="footer-container">
    <a href="https://thenerodev.com"><img src="img/Nero.png" alt="" class="nero"></a>
    <p class="copyright-info">Copyright 2019 © Mecklenburg Psychological Association. 
                All rights reserved.</p>
</div>
</footer>


<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>


</body>
</html>
