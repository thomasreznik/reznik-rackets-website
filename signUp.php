<?php

//Connects to DB
$mysqli = new mysqli("127.0.0.1", "thomasreznik", "thomas_reznik", "Tennis_Store_Website");

//Checks connection to DB
if ($mysqli->connect_errno) {

    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

//Retrieves data from XMLHttpRequest
$firstname = $_REQUEST['firstname_s'];
$lastname = $_REQUEST['lastname_s'];
$username = $_REQUEST['username_s'];
$password = $_REQUEST['password_s'];

//SQL Query (this is in order to check if there is an existing user in DB)
$check_username = "SELECT * FROM Users WHERE Username = '$username' ";

//Retrieves row where the username is
$result_username = $mysqli->query($check_username);

//Counts the number of rows in above query result
$row_cnt = mysqli_num_rows($result_username);

//Checking if inputs are empty
if (strlen($firstname) == 0) {
    echo ("Your FIRST NAME entry is empty. Please fill in! \n");
}
if (strlen($lastname) == 0) {
    echo ("Your LAST NAME entry is empty. Please fill in! \n");
}
if (strlen($username) == 0) {
    echo ("Your USERNAME entry is empty. Please fill in! \n");
}
if (strlen($password) == 0) {
    echo ("Your PASSWORD entry is empty. Please fill in! \n");
}

//If inputs are not empty and the username isnt already in the DB, then insert the users information into DB
if (strlen($firstname) != 0 && strlen($lastname) != 0 && strlen($username) != 0 && strlen($password) != 0) {
    if ($row_cnt == 0) {
        $sql = "INSERT INTO Users VALUES ('$username', '$password', '$firstname','$lastname')";
        $result = $mysqli->query($sql);
    } else {
        echo ("The Username you have entered has already been used. Please enter a different username");
    }
    //Close results
    $result->close();
    $result_username->close();
}

?>