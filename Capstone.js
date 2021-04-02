//Function of moving user to the main page of the site 
function proceed_to_mainpage() {
    var newLocation = "mainPage.php";
    window.location = newLocation;
}

//The functionality of logging into the website
function login_functionality() {

    if (this.readyState === this.DONE) {

        if (this.response === "User is Valid\n") {
            proceed_to_mainpage();
        }
        else {
            //Creates seperate alert for each echo
            var alerts = (this.response).split("\n");
            for (let i = 0; i < alerts.length; i++) {
                if (alerts[i].length > 0)
                    alert(alerts[i]);
            }
        }
    }
}
//Process after user clicks on sign up button
function signup_button() {

    //Retrieves values that the user inputted into the sign up form
    var signup_firstname = document.getElementById("first_name_signup").value;
    var signup_lastname = document.getElementById("last_name_signup").value;
    var signup_username = document.getElementById("username_signup").value;
    var signup_password = document.getElementById("password_signup").value;

    //Makes new XMLHttpRequest object
    var myXMLRequest = new XMLHttpRequest();

    //Initilizes new request
    myXMLRequest.open("GET", "./signUp.php?firstname_s=" + signup_firstname + "&lastname_s=" + signup_lastname + "&username_s=" + signup_username + "&password_s=" + signup_password, true);


    //Function called when an XMLHttpRequest transaction completes successfully
    myXMLRequest.onload = function () {
        if (myXMLRequest.response === "") {
            var newLocation = "Login.html";
            window.location = newLocation;
        }
        else {
            //Creates seperate alert for each echo
            var alerts = (myXMLRequest.response).split("\n");
            for (let i = 0; i < alerts.length; i++) {
                if (alerts[i].length > 0)
                    alert(alerts[i]);
            }

        }
    };

    //Sends the request to the server
    myXMLRequest.send();
}

//Process after user clicks on login button
function login_button() {

    //Retrieves values that the user inputted into the login form
    var login_username = document.getElementById("username_login").value;
    var login_password = document.getElementById("password_login").value;

    //Makes new XMLHttpRequest object
    var myXMLRequest = new XMLHttpRequest();

    //Initilizes new request
    myXMLRequest.open("GET", "./Login.php?password_l=" + login_password + "&username_l=" + login_username, true);

    //Function called when an XMLHttpRequest transaction completes successfully
    myXMLRequest.onload = login_functionality;

    //Sends the request to the server
    myXMLRequest.send();
}

//Process after user clicks on Send on the Help Center
function send_help() {

    //Retrieves values that the user inputted into the help form
    var help_firstname = document.getElementById("firstname_help").value;
    var help_lastname = document.getElementById("lastname_help").value;
    var help_email = document.getElementById("email_help").value;
    var help_message = document.getElementById("message_help").value;


    //Makes new XMLHttpRequest object
    var myXMLRequest = new XMLHttpRequest();

    //Initilizes new request
    myXMLRequest.open("GET", "./Help_Backend.php?firstname_h=" + help_firstname + "&lastname_h=" + help_lastname + "&email_h=" + help_email + "&message_h=" + help_message, true);


    //Function called when an XMLHttpRequest transaction completes successfully
    myXMLRequest.onload = function () {
        if (myXMLRequest.response === "") {
        var newLocation = "Help_Response.php";
        window.location = newLocation;
          }
        else {
            //Creates seperate alert for each echo
            var alerts = (myXMLRequest.response).split("\n");
            for (let i = 0; i < alerts.length; i++) {
                if (alerts[i].length > 0)
                    alert(alerts[i]);
            }

        }
    };
    
      //Sends the request to the server
    myXMLRequest.send();

}
function checkRadioButtonGroup(radioButtons) {
    var is_selected = false;
    for (var i = 0; i < radioButtons.length; i++) {
        if (radioButtons[i].checked) {
            is_selected = true;
            break;
        }
    }
    return is_selected;
}

function send_rating(form) {
    // validate form 
    //alert(form.elements["rating_design"].value);

    if (!checkRadioButtonGroup(form.elements["rating_design"])) {
        alert("You have left DESIGN empty! Please fill in");
    }
    if (!checkRadioButtonGroup(form.elements["rating_functionality"])) {
        alert("You have left FUNCTIONALITY empty! Please fill in");
    }
    if (!checkRadioButtonGroup(form.elements["rating_userfriendly"])) {
        alert("You have left USER FRIENDLINESS empty! Please fill in");
    }
    if (!checkRadioButtonGroup(form.elements["rating_navigability"])) {
        alert("You have left NAVIGABILITY empty! Please fill in");
    }
    if (!checkRadioButtonGroup(form.elements["rating_helpfulness"])) {
        alert("You have left HELPFULNESS empty! Please fill in");
    } else if (checkRadioButtonGroup(form.elements["rating_design"]) &&
        checkRadioButtonGroup(form.elements["rating_functionality"]) &&
        checkRadioButtonGroup(form.elements["rating_userfriendly"]) &&
        checkRadioButtonGroup(form.elements["rating_navigability"]) &&
        checkRadioButtonGroup(form.elements["rating_helpfulness"])
    ) {
        form.submit();
    }
}

