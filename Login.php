<?php
$mysqli = new mysqli("127.0.0.1", "thomasreznik", "thomas_reznik", "Tennis_Store_Website");

//Checks Connection to MySQL
if ($mysqli->connect_errno) {

    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;

}

//Retrieves username and password from XMLHttpRequest
$username = $_REQUEST['username_l'];
$password = $_REQUEST['password_l'];

//Checks if username and password entry is empty
if (strlen($username) == 0) {
    echo ("Your USERNAME entry is empty. Please fill in! \n");
}
if (strlen($password) == 0) {
    echo ("Your PASSWORD entry is empty. Please fill in! \n");
}

if (strlen($username) != 0 && strlen($password) != 0) {

//Query to retrieve username and password
    $sql = "SELECT * FROM Users WHERE Username = '$username' AND  Password = '$password'";

//Initialize user as false
    $valid_user = false;

//Sends sql query to mysql database
    $result = $mysqli->query($sql);

//If the result has more than 0 rows
    //if ($result->num_rows > 0) {
    if ($result && $result->num_rows > 0) {

        //Returns an array of strings representing the fetched row.
        // NULL if there are no more rows in result-set & exits while loop
        while ($row = $result->fetch_row()) {
            $valid_user = true;
        }
    }

    $result->close();

//If user is within DB, echo. If user is not in DB, echo different message
    if ($valid_user) {
        echo ("User is Valid");
    } else {
        echo ("The Username or Password you entered is incorrect. Please try again!");
    }
}

?>

