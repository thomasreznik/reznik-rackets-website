<html>
<nav class= "navbar navbar-expand-md navbar-light bg-light sticky-top">
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav mr-auto px-">
                <li class = "nav-item ">
                    <li class="home"><a href="mainPage.php"><div class="home-image"><i class="material-icons" style="font-size:35px;color:black;">home</i></div></a></li>
                </li>

                <!-- Rackets Navigation Dropdown -->
                <li class = "nav-item dropdown ">
                    <a class = "nav-link dropdown-toggle"  data-bs-target="dropdown_target" href = "#"  style="color:black;">Rackets
                        <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu"  aria-labelledby="dropdown_target">
                        <a class = "dropdown-item" href="rackets.php?brand_name=Wilson"> Wilson</a>
                        <div class = "dropdown-divider"></div>
                        <a class = "dropdown-item"  href="rackets.php?brand_name=Babolat"> Babolat</a>
                        <div class = "dropdown-divider"></div>
                        <a class = "dropdown-item" href="rackets.php?brand_name=Head"> Head</a>
                        <div class = "dropdown-divider"></div>
                        <a class = "dropdown-item" href="rackets.php?brand_name=Yonex"> Yonex</a>
                    </div>
                </li>

                <!-- Shoes Navigation Dropdown -->
                <li class = "nav-item dropdown ">
                    <a class = "nav-link dropdown-toggle" data-bs-target="dropdown_target" href = "#" style="color:black;">Shoes
                        <span class="caret"></span>
                    </a>
                       <!-- Mens Shoes Navigation Dropdown -->
                    <ul class = "dropdown-menu">
                        <div class="btn-group" role="group">
                        <li class="nav-item dropdown ">
                            <a class="dropdown-item dropdown-toggle " href="#"  >
                                Mens Shoes
                            </a>
                            <ul class="dropdown-menu ">
                                <li><a class="dropdown-item" href="shoes.php?brand_name=Wilson&Sex=M">Wilson</a></li>
                                <hr class="dropdown-divider">
                                <li><a class="dropdown-item" href="shoes.php?brand_name=Babolat&Sex=M">Babolat</a></li>
                                <hr class="dropdown-divider">
                                <li><a class="dropdown-item" href="shoes.php?brand_name=Head&Sex=M">Head</a></li>
                                <hr class="dropdown-divider">
                                <li><a class="dropdown-item" href="shoes.php?brand_name=Asics&Sex=M">Asics</a></li>
                            </ul>
                        </li>
                      <!-- Womens Shoes Navigation Dropdown -->
                        <li class="nav-item dropdown ">
                            <a class="dropdown-item dropdown-toggle " href="#" >
                                Womens Shoes
                            </a>
                            <ul class="dropdown-menu">
                                 <li><a class="dropdown-item" href="shoes.php?brand_name=Nike&Sex=W">Nike</a></li>
                                <hr class="dropdown-divider">
                                <li><a class="dropdown-item" href="shoes.php?brand_name=Adidas&Sex=W">Adidas</a></li>
                                <hr class="dropdown-divider">
                                <li><a class="dropdown-item" href="shoes.php?brand_name=Head&Sex=W">Head</a></li>
                                <hr class="dropdown-divider">
                                <li><a class="dropdown-item" href="shoes.php?brand_name=Asics&Sex=W">Asics</a></li>
                            </ul>
                        </li>
                        </div>
                    </ul>
                </li>

                <!-- Strings Navigation Dropdown -->
                <li class = "nav-item dropdown ">
                    <a class = "nav-link dropdown-toggle"  data-bs-target="dropdown_target" href = "#" style="color:black;">Strings
                        <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu"  aria-labelledby="dropdown_target">
                        <a class = "dropdown-item" href="strings.php?brand_name=Wilson"> Wilson</a>
                        <div class = "dropdown-divider"></div>
                        <a class = "dropdown-item" href="strings.php?brand_name=Babolat"> Babolat</a>
                        <div class = "dropdown-divider"></div>
                        <a class = "dropdown-item" href="strings.php?brand_name=Head"> Head</a>
                        <div class = "dropdown-divider"></div>
                        <a class = "dropdown-item" href="strings.php?brand_name=Solinco"> Solinco</a>
                    </div>
                </li>

                <!-- Grips Navigation Dropdown -->
                <li class = "nav-item dropdown ">
                    <a class = "nav-link dropdown-toggle" data-bs-target="dropdown_target" href = "#" style="color:black;">Grips
                        <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu"  aria-labelledby="dropdown_target">
                        <a class = "dropdown-item" href="grips.php?brand_name=Wilson"> Wilson</a>
                        <div class = "dropdown-divider"></div>
                        <a class = "dropdown-item" href="grips.php?brand_name=Head"> Head</a>
                        <div class = "dropdown-divider"></div>
                        <a class = "dropdown-item" href= "grips.php?brand_name=Gamma"> Gamma</a>
                    </div>
                </li>

                <!-- Location of Shop Option -->
                <li class = "nav-item">
                    <a class = "nav-link" href="locateUs.php" style="color:red;">Locate Us </a>
                </li>

                <!-- Contact Us Option -->
                <li class = "nav-item">
                    <a class = "nav-link" href="contactUs.php" style="color:red;">Contact Us</a>
                </li>

                 <!-- About us Option -->
                <li class = "nav-item">
                    <a class = "nav-link" href="aboutUs.php" style="color:red;">About Us</a>
                </li>

                 <!-- Help Option -->
                 <li class = "nav-item">
                    <a class = "nav-link" href="Help_Front.php" style="color:red;">Help</a>
                </li>

                 <!-- Rate Us Option -->
                 <li class = "nav-item">
                    <a class = "nav-link" href="rateUs_front.php" style="color:red;">Rate Us</a>
                </li>

            </ul>
        </div>

</nav>
</html>
