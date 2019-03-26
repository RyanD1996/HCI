<?php

session_start();
if(!isset($_SESSION['firstname'])){
  header('location:login.php');
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hello World</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- ElegantFonts CSS -->
    <link rel="stylesheet" href="css/elegant-fonts.css">

    <!-- themify-icons CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
</head>
<body class="single-page causes-page">
    <header class="site-header">
   

    <div class="nav-bar">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                    <div class="site-branding d-flex align-items-center">
                        <a class="d-block" href="home.php" rel="home"><img class="d-block" src="images/transitcycle-logo.png" alt="logo" width="120px"></a>
                    </div><!-- .site-branding -->

                    <nav class="site-navigation d-flex justify-content-end align-items-center">
                        <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center">
                            <li><a href="home.php">Home</a></li>
                            <li><a href="about.html">About us</a></li>
                            <li><a href="faq.php">FAQ</a></li>
                            <li><a class="current-menu-item" href="causes.html">My Account</a></li>
                            <li><a href="index.php">Log Out</a></li>
                        </ul>
                    </nav><!-- .site-navigation -->

                    <div class="hamburger-menu d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div><!-- .hamburger-menu -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .nav-bar -->
</header><!-- .site-header -->

    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Your Account</h1>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .page-header -->
        <div class="row elements-wrap">
            <div class="col-12">
                <header class="entry-header elements-heading">
                    <h2 class="entry-title">Your Activity</h2>
                    <a href="#" id="graph-view-button" class="btn gradient-bg">Graph View</a>
                    <a href="#" id="text-view-button" class="btn orange-border">Text View</a>
                </header>
                
                <div class="entry-content elements-container">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div id="chartContainer" style="height:300px;"></div>
                        </div>
                    </div>
                </div>
                
                <div id="text-view-container" style="display : none;" class="entry-content elements-container">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            
                            <div class="accordion-wrap type-accordion">
                                <h3 class="entry-title d-flex justify-content-between align-items-center">Trip 1 - Saturday 10th January 2018<span class="arrow-r"></span></h3>

                                <div class="entry-content">
                                    <!--<div id="map1" style="margin: 0 auto; height: 300px; width:300px;"></div>-->
                                    <div class="milestones">
                                        <div class="row flex flex-wrap justify-content-between">
                                            <div class="col-12 col-sm-6 col-lg-3 mt-5 mt-lg-0">
                                                <div class="counter-box">
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <img src="images/teamwork.png" alt="">
                                                    </div>

                                                    <div class="d-flex justify-content-center align-items-baseline">
                                                        <div class="start-counter" data-to="70" data-speed="2000"></div>
                                                        <div class="counter-k"></div>
                                                    </div>

                                                    <h3 class="entry-title">Points Scored</h3><!-- entry-title -->
                                                </div><!-- counter-box -->
                                            </div><!-- .col -->

                                            <div class="col-12 col-sm-6 col-lg-3 mt-5 mt-lg-0">
                                                <div class="counter-box">
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <img src="images/donation.png" alt="">
                                                    </div>

                                                    <div class="d-flex justify-content-center align-items-baseline">
                                                        <div class="start-counter" data-to="1" data-speed="2000"></div>
                                                        <div class="counter-k">Miles driving a petrol car</div>
                                                    </div>

                                                    <h3 class="entry-title">Environmental Savings</h3><!-- entry-title -->
                                                </div><!-- counter-box -->
                                            </div><!-- .col -->

                                            <div class="col-12 col-sm-6 col-lg-3 mt-5 mt-lg-0">
                                                <div class="counter-box">
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <img src="images/dove.png" alt="">
                                                    </div>

                                                    <div class="d-flex justify-content-center align-items-baseline">
                                                        <div class="start-counter" data-to="1" data-speed="2000"></div>
                                                        <div class="counter-k">miles</div>
                                                    </div>

                                                    <h3 class="entry-title">Distance Travelled</h3><!-- entry-title -->
                                                </div><!-- counter-box -->
                                            </div><!-- .col -->

                                        </div>
                                    </div>
                                    
                                </div>

                                <h3 class="entry-title d-flex justify-content-between align-items-center">Trip 2 - Sunday 11th January 2018<span class="arrow-r"></span></h3>

                                <div class="entry-content">
                                    <div class="milestones">
                                        <div class="row flex flex-wrap justify-content-between">
                                            <div class="col-12 col-sm-6 col-lg-3 mt-5 mt-lg-0">
                                                <div class="counter-box">
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <img src="images/teamwork.png" alt="">
                                                    </div>

                                                    <div class="d-flex justify-content-center align-items-baseline">
                                                        <div class="start-counter" data-to="70" data-speed="2000"></div>
                                                        <div class="counter-k"></div>
                                                    </div>

                                                    <h3 class="entry-title">Points Scored</h3><!-- entry-title -->
                                                </div><!-- counter-box -->
                                            </div><!-- .col -->

                                            <div class="col-12 col-sm-6 col-lg-3 mt-5 mt-lg-0">
                                                <div class="counter-box">
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <img src="images/donation.png" alt="">
                                                    </div>

                                                    <div class="d-flex justify-content-center align-items-baseline">
                                                        <div class="start-counter" data-to="1" data-speed="2000"></div>
                                                        <div class="counter-k">Miles driving a petrol car</div>
                                                    </div>

                                                    <h3 class="entry-title">Environmental Savings</h3><!-- entry-title -->
                                                </div><!-- counter-box -->
                                            </div><!-- .col -->

                                            <div class="col-12 col-sm-6 col-lg-3 mt-5 mt-lg-0">
                                                <div class="counter-box">
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <img src="images/dove.png" alt="">
                                                    </div>

                                                    <div class="d-flex justify-content-center align-items-baseline">
                                                        <div class="start-counter" data-to="1" data-speed="2000"></div>
                                                        <div class="counter-k">miles</div>
                                                    </div>

                                                    <h3 class="entry-title">Distance Travelled</h3><!-- entry-title -->
                                                </div><!-- counter-box -->
                                            </div><!-- .col -->

                                        </div>
                                    </div>
                                    
                                </div>

                                <h3 class="entry-title d-flex justify-content-between align-items-center">Vestibulum convallis risus vel condimentum<span class="arrow-r"></span></h3>

                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    
    <!-- User Accumulated Milestone Stats Section -->
        <div class="row elements-wrap">
            <div class="col-12">
                 <div class="col-12">
                    <h1>Your Stats</h1>
                 </div><!-- .col -->

                <div class="milestones">
                    <div class="row flex flex-wrap justify-content-between">
                        <div class="col-12 col-sm-6 col-lg-3 mt-5 mt-lg-0">
                            <div class="counter-box">
                                <div class="d-flex justify-content-center align-items-center">
                                    <img src="images/teamwork.png" alt="">
                                </div>

                                <div class="d-flex justify-content-center align-items-baseline">
                                    <div class="start-counter" data-to="<?php echo $_SESSION['points'];?>" data-speed="2000"></div>
                                    <div class="counter-k"></div>
                                </div>

                                <h3 class="entry-title">Points Scored</h3><!-- entry-title -->
                            </div><!-- counter-box -->
                        </div><!-- .col -->

                        <div class="col-12 col-sm-6 col-lg-3 mt-5 mt-lg-0">
                            <div class="counter-box">
                                <div class="d-flex justify-content-center align-items-center">
                                    <img src="images/donation.png" alt="">
                                </div>

                                <div class="d-flex justify-content-center align-items-baseline">
                                    <div class="start-counter" data-to="<?php echo $_SESSION['environmental_savings'];?>" data-speed="2000"></div>
                                    <div class="counter-k">Miles driving a petrol car</div>
                                </div>

                                <h3 class="entry-title">Environmental Savings</h3><!-- entry-title -->
                            </div><!-- counter-box -->
                        </div><!-- .col -->

                        <div class="col-12 col-sm-6 col-lg-3 mt-5 mt-lg-0">
                            <div class="counter-box">
                                <div class="d-flex justify-content-center align-items-center">
                                    <img src="images/dove.png" alt="">
                                </div>

                                <div class="d-flex justify-content-center align-items-baseline">
                                    <div class="start-counter" data-to="<?php echo $_SESSION['distance_travelled'];?>" data-speed="2000"></div>
                                    <div class="counter-k">miles</div>
                                </div>

                                <h3 class="entry-title">Distance Travelled</h3><!-- entry-title -->
                            </div><!-- counter-box -->
                        </div><!-- .col -->

                        <div class="col-12 col-sm-6 col-lg-3 mt-5 mt-lg-0">
                            <div class="counter-box">
                                <div class="d-flex justify-content-center align-items-center">
                                    <img src="images/olive.png" alt="">
                                </div>

                                <div class="d-flex justify-content-center align-items-baseline">
                                    <div class="start-counter" data-to="<?php echo $_SESSION['trips_taken'];?>" data-speed="2000"></div>
                                </div>

                                <h3 class="entry-title">Trips Taken</h3><!-- entry-title -->
                            </div><!-- counter-box -->
                        </div><!-- .col -->
                    </div>
                </div>
            </div>
        </div>
    <!-- User Accumulated Milestone Stats Section -->

    <footer class="site-footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="foot-about">
                            <h2><a class="foot-logo" href="#"><img src="images/foot-logo.png" alt=""></a></h2>

                            <p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit. Mauris temp us vestib ulum mauris.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.Lorem ipsum dolo.</p>

                            <ul class="d-flex flex-wrap align-items-center">
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div><!-- .foot-about -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <h2>Useful Links</h2>

                        <ul>
                            <li><a href="#">Privacy Polticy</a></li>
                            <li><a href="#">Become  a Volunteer</a></li>
                            <li><a href="#">Donate</a></li>
                            <li><a href="#">Testimonials</a></li>
                            <li><a href="#">Causes</a></li>
                            <li><a href="#">Portfolio</a></li>
                            <li><a href="#">News</a></li>
                        </ul>
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <div class="foot-latest-news">
                            <h2>Latest News</h2>

                            <ul>
                                <li>
                                    <h3><a href="#">A new cause to help</a></h3>
                                    <div class="posted-date">MArch 12, 2018</div>
                                </li>

                                <li>
                                    <h3><a href="#">We love to help people</a></h3>
                                    <div class="posted-date">MArch 12, 2018</div>
                                </li>

                                <li>
                                    <h3><a href="#">The new ideas for helping</a></h3>
                                    <div class="posted-date">MArch 12, 2018</div>
                                </li>
                            </ul>
                        </div><!-- .foot-latest-news -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <div class="foot-contact">
                            <h2>Contact</h2>

                            <ul>
                                <li><i class="fa fa-phone"></i><span>+45 677 8993000 223</span></li>
                                <li><i class="fa fa-envelope"></i><span>office@template.com</span></li>
                                <li><i class="fa fa-map-marker"></i><span>Main Str. no 45-46, b3, 56832, Los Angeles, CA</span></li>
                            </ul>
                        </div><!-- .foot-contact -->

                        <div class="subscribe-form">
                            <form class="d-flex flex-wrap align-items-center">
                                <input type="email" placeholder="Your email">
                                <input type="submit" value="send">
                            </form><!-- .flex -->
                        </div><!-- .search-widget -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-widgets -->

        <div class="footer-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div><!-- .col-12 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-bar -->
    </footer><!-- .site-footer -->

<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='js/swiper.min.js'></script>
    <script type='text/javascript' src='js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='js/circle-progress.min.js'></script>
    <script type='text/javascript' src='js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='js/jquery.barfiller.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>
    <script type='text/javascript' src='canvasjs/canvasjs.min.js'></script>

    
    <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGIPp4uri3pIEpHcmgCWzn_urEHE5bIBA&callback=initialiseMap"
    ></script>
    <script>
        window.onload = function () {

        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            theme: "light2",
            title:{
                text: ""
            },
            axisY:{
                includeZero: false
            },
            data: [{        
                type: "line",   
                toolTipContent: "<p>{name}<hr/>Duration: {y} minutes. <hr/>Distance: {d} mile'(s)' <hr/>Points Earned: {p}", 
                dataPoints: [
                    { x: new Date(2019, 02, 10),y: 20, name: "57 Blenheim Road to Reading WhiteKnights Campus", d: 1 },
                    { x: new Date(2019, 02, 11),y: 25, name: "24 Blenheim Gardens to Reading WhiteKnights Campus", d:2, p:50 },
                    { x: new Date(2019, 02, 12),y: 25, name: "1 Blenheim Road to Reading WhiteKnights Campus", d:2, p:50 },
                    { x: new Date(2019, 02, 13),y: 10, name: "57 Blenheim Road to Reading WhiteKnights Campus", d:1, p:20},
                    { x: new Date(2019, 02, 14),y: 10, name: "57 Blenheim Road to Reading WhiteKnights Campus", d:1, p:20 },
                    { x: new Date(2019, 02, 15),y: 50, name: "57 Blenheim Road to Reading WhiteKnights Campus", d:3, p:70},
                    { x: new Date(2019, 02, 16),y: 60, name: "Reading WhiteKnights Campus to 7 Blenheim Road ", d:6, p:100 },
                    { x: new Date(2019, 02, 17),y: 40,name: "Reading WhiteKnights Campus to 7 Blenheim Road ", d:4, p:100 },
                    { x: new Date(2019, 02, 18),y: 40,name: "Reading WhiteKnights Campus to 7 Blenheim Road ", d:4, p:100 },
                    { x: new Date(2019, 02, 19),y: 40,name: "Reading WhiteKnights Campus to 7 Blenheim Road ", d:4, p:100 },
                    { x: new Date(2019, 02, 20),y: 20,name: "Reading WhiteKnights Campus to 7 Blenheim Road ", d:2, p:50 },
                    { x: new Date(2019, 02, 21),y: 30,name: "Reading WhiteKnights Campus to 7 Blenheim Road ", d:3, p:70 }
                ]
            }]
        });
        chart.render();

        }
    </script>
    <script>
        $( "#graph-view-button" ).click(function() {
            //alert( "Handler for .click() called." );
            $("#graph-view-button").addClass("gradient-bg");
            $("#text-view-button").removeClass("gradient-bg");
            $("#text-view-button").addClass("orange-border");
            document.getElementById("text-view-container").style.display = "none"
            document.getElementById("chartContainer").style.display = "block"
            return false;
        });
        
        $( "#text-view-button" ).click(function() {
            //alert( "Handler for .click() called." );
            $("#text-view-button").addClass("gradient-bg");
            $("#graph-view-button").removeClass("gradient-bg");
            $("#graph-view-button").addClass("orange-border");
            document.getElementById("chartContainer").style.display = "none"
            document.getElementById("text-view-container").style.display = "block"
            return false;
        });
    </script>
</body>
</html>