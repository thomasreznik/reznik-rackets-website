<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!--Personal CSS -->
    <link href="mainPage.css" rel="stylesheet">

    <!-- Google Icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Saira&display=swap" rel="stylesheet">
    
     <!-- Browser Icon-->
    <link rel="icon" type="image/x-icon" href="images/mainpage/Logo.jpg">
    
    <!-- Browser Title-->
    <title>Grips</title>
</head>

<body>
    <!-- Adds Navigation Bar to Page -->
    <?php
    include 'navbar.php';
    ?>

    <?php
    $mysqli = new mysqli("127.0.0.1", "thomasreznik", "thomas_reznik", "Tennis_Store_Website");


    if ($mysqli->connect_errno) {

        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    //Retrieves brand name from href located in Navbar.php
    $brandName = $_REQUEST['brand_name'];

    //Query to get the ID of the Brand the user selected (a row gets retrieved)
    $brand_sql = "SELECT id FROM Brand WHERE name = '$brandName' ";

    $result = $mysqli->query($brand_sql);

    //Checks if the query result has more than 0 rows, and in this case there is 1 row
    if ($result->num_rows > 0) {

        //Returns an array of strings representing the fetched row
        // NULL if there are no more rows in result-set & exits while loop
        while ($row = $result->fetch_row()) {

            //Gets the value of the ID of the Brand   
            $brand_id = $row[0];
            break;
        }
    } else {
        echo "Brand not found";
    }
    ?>

    <!-- Creating table to display grips -->
    <div class="table-responsive">
    <div class="text-center pt-3">
    <h1>GRIPS</h1>
    </div>
        <table class="table table-hover table-bordered" id="strings_table">
            <thead class="thead-dark">
                <tr class="table-dark">
                    <th scope="col" class="text-center" style="font-size:25px">Image</th>
                    <th scope="col" class="text-center" style="font-size:25px">Model</th>
                    <th scope="col" class="text-center" style="font-size:25px">Price ($)</th>
                </tr>
            </thead>
            <tbody>
                <?php

                //Query to get all grip products from the particular brand that the user selected

                $product_sql = "SELECT * FROM Grips WHERE Brand_ID = $brand_id";

                $result = $mysqli->query($product_sql);


                if ($result->num_rows > 0) {

                    //Creating the table data with query results

                    $myDisplayResults = "";

                    while ($row = $result->fetch_row()) {

                        $myDisplayResults .= "
                    <tr class = 'table-light'>
                    <td align='center'><img src='$row[4]' height = '250px' width = '250px'/></td>
                    <td align='center' style='font-size:20px' ><b>$row[2]</b></td>
                    <td align='center' style='font-size:20px;color:red'>$$row[3]</td>
                    </tr>
                    ";
                    }

                    echo $myDisplayResults;
                } else {

                    echo "0 results";
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>

</html>