<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
    <!-- Personal CSS -->
    <link href="locateUs.css" rel= "stylesheet">

    <!-- Google Icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Saira&display=swap" rel="stylesheet">
    
    <!--Bing Refrence to Map -->
    <!-- API Connection -->
    <script type='text/javascript' src='http://www.bing.com/api/maps/mapcontrol?callback=GetMap&key=ArNjgyavXLkXrhZQVeVT_7uyWQO0tbefWqTmd4Xq9r1__-iopc0wv12tnUFRh_Bp' async defer></script>
   
    <!-- Browser Icon-->
    <link rel="icon" type="image/x-icon" href="images/mainpage/Logo.jpg">
    
    <!-- Browser Title-->
    <title>Locate Us</title>
  </head>
  <body>

    <?php
    include 'navbar.php';
    ?>
    <div class = "container-fl"  id = "locate-us"> 
        <h1 class=" display-5 text-center pt-5 pb-3" style="color:white;">LOCATE US</h1>
        <h5 class="text-center" style="color:white;">Ready to swing by the store? Click on the pin to view our store address.</h5>
        <div class = "d-flex justify-content-center mt-5 pb-5 ">
            <div id="myMap" style='width:1400px;height:700px;'></div>
        </div>

    <!-- [START] of work from Bing Maps Documentation Site -->
    <script type="text/javascript">
    var infobox;
        function GetMap(){

            var map = new Microsoft.Maps.Map('#myMap',{
            center: new Microsoft.Maps.Location(40.649496416349606, -73.96225904505238) });

            var center = map.getCenter();

             infobox = new Microsoft.Maps.Infobox(map.getCenter(), {
             visible: false, maxWidth: 350, maxHeight: 350
             });

            infobox.setMap(map);


            var pin = new Microsoft.Maps.Pushpin(center,{
            color: 'red',
            title: 'Reznik Rackets'
            });

            pin.metadata = {
            title: 'Address:',

            //Created Description myself
            description: '<div class="col-sm"><img src="images/mainpage/Reznik_Rackets.jpg" height = "50"/></div><div class="col-sm">25 Tennis Ct, Brooklyn, NY 11226</div>'
            };

            Microsoft.Maps.Events.addHandler(pin, 'click', pushpinClicked);

            map.entities.push(pin);
        }

        function pushpinClicked(e) {
            if (e.target.metadata) {
                infobox.setOptions({
                    location: e.target.getLocation(),
                    title: e.target.metadata.title,
                    description: e.target.metadata.description,
                    visible: true
                });
            }
        }

    </script>
    <!--[END] of work from Bing Maps Documentation Help -->
    
    </div>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

  </body>
</html>