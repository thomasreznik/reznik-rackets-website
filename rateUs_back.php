<?php

$mysqli = new mysqli("127.0.0.1", "thomasreznik", "thomas_reznik", "Tennis_Store_Website");

if ($mysqli->connect_errno) {

    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
} 


//Retrieves help data from XMLHttpRequest

    $design_value = $_REQUEST['rating_design'];
    $functionality_value = $_REQUEST['rating_functionality'];
    $user_friendliness_value = $_REQUEST['rating_userfriendly'];
    $navigability_value = $_REQUEST['rating_navigability'];
    $helpfulness_value = $_REQUEST['rating_helpfulness'];
    
    $total = $design_value + $functionality_value + $user_friendliness_value + $navigability_value + $helpfulness_value;
    
    $sql = "INSERT INTO Rating VALUES ('$design_value', '$functionality_value', '$user_friendliness_value', '$navigability_value', '$helpfulness_value', '$total')";
    
    //Sends the query
    $mysqli->query($sql);
    
    
    header("Location: http://thomasreznik.com/Capstone/rateUs_response.php");
    exit();

?>