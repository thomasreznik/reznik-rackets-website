<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

     <!-- Personal CSS -->
    <link href="Help.css" rel= "stylesheet">

    <!-- Google Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Saira&display=swap" rel="stylesheet">

    <!-- Javascript Connection -->
    <script type="text/javascript" src="Capstone.js"></script>

    <!-- Browser Icon-->
    <link rel="icon" type="image/x-icon" href="images/mainpage/Logo.jpg">
    
    <!-- Browser Title-->
    <title>Help</title>
    
  </head>
  <body>
    <?php
    include 'navbar.php';
    ?>
    <div class = "text-center">
        <div class = "container-fl"  id="help-top">
        <div class="container pt-5 pb-5">
          <h1 class = "display-5 pb-3" style="color:white">HELP CENTER</h1>
          <h5 style="color:white">Welcome to the Reznik Racket’s Help Center. Do you have any questions about our products? 
          Or do you have any technical trouble with the website? 
          Submit your request below and one of our team members will get back to you within two business days.</h5>
        </div>
        </div>
        

        <!-- Help Form-->
        <form class="mt-5 mb-5" style="max-width: 600px; margin:auto;" onsubmit="return false">

            <div class="row mx-auto mb-2">
                <input type = "text" id= "firstname_help" placeholder="First Name" class="form-control" required autofocus  >
            </div>
            <div class="row mx-auto mb-2">
            <input type = "text" id= "lastname_help" placeholder="Last Name" class="form-control" >
            </div>
            <div class="row mx-auto mb-3">
                <input type = "email" id= "email_help" placeholder="example@domain.com" class="form-control" >
            </div>
            <div class="form-group">
                <textarea class="form-control" id="message_help" placeholder="Please input message here:"rows="15"></textarea>
            </div>
            <div class="mt-4">
                <button type = "button" onclick = "send_help();"class="btn btn-lg btn-outline-secondary btn-block col-12"><b>Send</b></button>
            </div>

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

  </body>
</html>