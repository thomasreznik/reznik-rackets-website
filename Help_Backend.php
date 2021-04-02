<?php

$mysqli = new mysqli("127.0.0.1", "thomasreznik", "thomas_reznik", "Tennis_Store_Website");

if ($mysqli->connect_errno) {

    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
} 


//Retrieves help data from XMLHttpRequest

    $firstname = $_REQUEST['firstname_h'];
    $lastname = $_REQUEST['lastname_h'];
    $email = $_REQUEST['email_h'];
    $message = $_REQUEST['message_h'];
    
    
//Checking if inputs are empty
if (strlen($firstname) == 0) {
    echo ("Your FIRST NAME entry is empty. Please fill in! \n");
}
if (strlen($lastname) == 0) {
    echo ("Your LAST NAME entry is empty. Please fill in! \n");
}
if (strlen($email) == 0) {
    echo ("Your EMAIL entry is empty. Please fill in! \n");
}
if (strlen($message) == 0) {
    echo ("Your MESSAGE entry is empty. Please fill in! \n");
}

//If inputs are NOT empty then proceed
if (strlen($firstname) != 0 && strlen($lastname) != 0 && strlen($email) != 0 && strlen($message) != 0) {
    
//Checks if email entry is valid
if (!(filter_var($email, FILTER_VALIDATE_EMAIL))) {
    echo ("Your EMAIL is invalid, please put it in the format: example@domain.com\n");
}
else{
    //Query to insert help data into Help table with DB
    $sql = "INSERT INTO Help VALUES ('$firstname', '$lastname', '$email', '$message')";

//Sends the query
    $result = $mysqli->query($sql);
    
    //Close result
    $result->close();
}
}
?>
