<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

     <!-- Personal CSS -->
    <link href="mainPage.css" rel= "stylesheet">

    <!-- Google Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Saira&display=swap" rel="stylesheet">

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <!-- Browser Icon-->
    <link rel="icon" type="image/x-icon" href="images/mainpage/Logo.jpg">
    
    <!-- Browser Title-->
    <title>Home Page</title>
    
  </head>
  <body>

  <?php
  include 'navbar.php';
  ?>
  <!--Welcome message at the top of the main page-->

 <div class="container-fl">
    <div class="row">
        <img class = "img-fluid" src="images/mainpage/welcome_picture.jpg" >
        </div>
    </div>
 </div>


    <div class="container-fl featured">

        <h1 class= "featured_title display-5"> FEAUTRED PRODUCTS</h1>

 <!-- [START] of Bootstrap Documentation for Carousel-->
        <div id="theCARU" class="carousel slide" data-ride="carousel">

            <!--Indicators on the bottom of the car-->
            <ol class="carousel-indicators">
              <li class=" item1 active"></li>
              <li class = "item2"></li>
             <li class = "item3"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block h-50 mx-auto" src="images/mainpage/exclusive1.jpg" alt="First slide" >
                <div class="carousel-caption d-none d-md-block" style="color:red;" >
                    <h4 style = "color:black;"><b>Head Radical MP</b></h4>
                    <h5 style = "color:red;">$229.95</h5>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block h-50 mx-auto" src="images/mainpage/exclusive2.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block" style="color:red;" >
                    <h4 style = "color:black;"><b>Hyper G</b></h4>
                    <h5 style = "color:red;">$11.99</h5>
                </div>
              </div>
               <div class="carousel-item">
                <img class="d-block h-50 mx-auto" src="images/mainpage/exclusive3.jpg" alt="Third slide" >
                <div class="carousel-caption d-none d-md-block" style="color:red;" >
                    <h4 style = "color:black;"><b>Adidas Defiant Generation</b></h4>
                    <h5 style = "color:red;">$78.94</h5>
                </div>
              </div>
            <a class="carousel-control-prev" data-target="#theCARU" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" data-target="#theCARU" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
 <!-- [End] of Bootstrap Documentation for Carousel-->
    </div>

    <!--Exclusive Product in Store-->
    <div class="exclusive">
        <div class= "container">
            <div class="row">
                <div class = "col-2">
                    <img src="images/mainpage/Ethan.jpg" class="exclusive-img">
                </div>
                <div class = "col-2">
                    <h3 style="color:white">20% OFF RACKET STRINGING AFTER A PURCHASE OF $50 OR MORE!</h3>
                     <p class ="pt-3" style="color:white">We provide top-quality, full-service racket stringing. We also provide grommet and grip replacements. 
                     Our skilled team provides a one to two business day turn around, and will get you back on the court in no time! 
                     <p class = "pt-2"> <a href="contactUs.php" style="color: red">Contact us to book your next stringing appointment.</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>


  <!-- [START] of Jquery Script from the Bootrap Documentation -->
    <script>
       $(document).ready(function(){

        $("#theCARU").carousel();

        //Functionality of the Carousel Indicators
        $(".item1").click(function(){
            $("#theCARU").carousel(0);
        });
        $(".item2").click(function(){
            $("#theCARU").carousel(1);
        });
        $(".item3").click(function(){
            $("#theCARU").carousel(2);
        });

       //Functionality of Carousel Controls
       $(".carousel-control-prev").click(function(){
            $("#theCARU").carousel("prev");
        });
        $(".carousel-control-next").click(function(){
            $("#theCARU").carousel("next");
        });
        });
    </script>
  <!--- [END] of Jquery Script from the Bootrap Documentation -->
  </body>

</html>