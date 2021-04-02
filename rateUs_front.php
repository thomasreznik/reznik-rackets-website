<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!--Personal CSS -->
    <link href="rateUs.css" rel="stylesheet">

    <!-- Google Icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

      <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Saira&display=swap" rel="stylesheet">

    <!-- Javascript Connection -->
    <script type="text/javascript" src="Capstone.js"></script>

    <!-- Browser Icon-->
    <link rel="icon" type="image/x-icon" href="images/mainpage/Logo.jpg">
    
    <!-- Browser Title-->
    <title>Rate Us</title>
    
</head>

<body>

    <?php
    include 'navbar.php';
    ?>
    <div class = "text-center">
        <div class = "container-fl"  id="rateUs_top">
        <div class="container pt-5 pb-5">
          <h1 class = "display-5 pb-3" style="color:white">RATE US</h1>
          <h5 style="color:white">Welcome to the Reznik Racket’s Rating Center. In order for us to keep improving our site, feedback is extremely important. We appreicate you taking time to complete this valuable survey!</h5>
        </div>
        </div>
    </div>
        <!--START of code from Yaworek on Codepen.io -->

        <div class="container-fl">
            <!--<form class="mt-5 mb-5" style="max-width: 400px; margin:auto;" >-->
            <form id="rating_form" class=" mt-5 mb-5" style="max-width: 400px; margin:auto;" onsubmit="return false" action="rateUs_back.php" method="POST">

                <h4 class="text-center"> Design</h4>
                <div class="starrating1 d-flex justify-content-center flex-row-reverse">
                    <input type="radio" id="design_5" name="rating_design" value="5" /><label for="design_5" title="star_design"></label>
                    <input type="radio" id="design_4" name="rating_design" value="4" /><label for="design_4" title="star_design"></label>
                    <input type="radio" id="design_3" name="rating_design" value="3" /><label for="design_3" title="star_design"></label>
                    <input type="radio" id="design_2" name="rating_design" value="2" /><label for="design_2" title="star_design"></label>
                    <input type="radio" id="design_1" name="rating_design" value="1" /><label for="design_1" title="star_design"></label>
                </div>
                <h4 class="text-center pt-5"> Functionality</h4>
                <div class="starrating1 d-flex justify-content-center flex-row-reverse">
                    <input type="radio" id="functionality_5" name="rating_functionality" value="5" /><label for="functionality_5" title="star_funct"></label>
                    <input type="radio" id="functionality_4" name="rating_functionality" value="4" /><label for="functionality_4" title="star_funct"></label>
                    <input type="radio" id="functionality_3" name="rating_functionality" value="3" /><label for="functionality_3" title="star_funct"></label>
                    <input type="radio" id="functionality_2" name="rating_functionality" value="2" /><label for="functionality_2" title="star_funct"></label>
                    <input type="radio" id="functionality_1" name="rating_functionality" value="1" /><label for="functionality_1" title="star_funct"></label>
                </div>
                <h4 class="text-center pt-5"> User Friendliness</h4>
                <div class="starrating1 d-flex justify-content-center flex-row-reverse">
                    <input type="radio" id="userfriendly_5" name="rating_userfriendly" value="5" /><label for="userfriendly_5" title="5 star"></label>
                    <input type="radio" id="userfriendly_4" name="rating_userfriendly" value="4" /><label for="userfriendly_4" title="4 star"></label>
                    <input type="radio" id="userfriendly_3" name="rating_userfriendly" value="3" /><label for="userfriendly_3" title="3 star"></label>
                    <input type="radio" id="userfriendly_2" name="rating_userfriendly" value="2" /><label for="userfriendly_2" title="2 star"></label>
                    <input type="radio" id="userfriendly_1" name="rating_userfriendly" value="1" /><label for="userfriendly_1" title="1 star"></label>
                </div>
                <h4 class="text-center pt-5"> Navigability</h4>
                <div class="starrating1 d-flex justify-content-center flex-row-reverse">
                    <input type="radio" id="navigability_5" name="rating_navigability" value="5" /><label for="navigability_5" title="5 star"></label>
                    <input type="radio" id="navigability_4" name="rating_navigability" value="4" /><label for="navigability_4" title="4 star"></label>
                    <input type="radio" id="navigability_3" name="rating_navigability" value="3" /><label for="navigability_3" title="3 star"></label>
                    <input type="radio" id="navigability_2" name="rating_navigability" value="2" /><label for="navigability_2" title="2 star"></label>
                    <input type="radio" id="navigability_1" name="rating_navigability" value="1" /><label for="navigability_1" title="1 star"></label>
                </div>
                <h4 class="text-center pt-5"> Helpfulness</h4>
                <div class="starrating1 d-flex justify-content-center flex-row-reverse">
                    <input type="radio" id="helpfulness_5" name="rating_helpfulness" value="5" /><label for="helpfulness_5" title="5 star"></label>
                    <input type="radio" id="helpfulness_4" name="rating_helpfulness" value="4" /><label for="helpfulness_4" title="4 star"></label>
                    <input type="radio" id="helpfulness_3" name="rating_helpfulness" value="3" /><label for="helpfulness_3" title="3 star"></label>
                    <input type="radio" id="helpfulness_2" name="rating_helpfulness" value="2" /><label for="helpfulness_2" title="2 star"></label>
                    <input type="radio" id="helpfulness_1" name="rating_helpfulness" value="1" /><label for="helpfulness_1" title="1 star"></label>
                </div>
        <!--End of code from Yaworek on Codepen.io -->
                <div class="mt-4 text-center">
                    <button type="button" onclick="send_rating(document.getElementById('rating_form'));" class="btn btn-lg btn-outline-secondary col-8"> <b>Submit</b></button>
                </div>
            </form>
        </div>

 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>

</html>