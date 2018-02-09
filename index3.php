<html>
    <head>
        <title>
            My web page
        </title>
    </head>

    <link href="owl/assets/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
    <link href="owl/assets/owl.theme.default.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>



        .container-fluid.main{
            position: relative; /* To make the navbar positions relative to this container */
            padding: 0;
        }

        .navbar-default {
            background-image: none;
            background-color: transparent; /* Make the menu become transparent */
            border-radius: 0px;
            border: 0;
            box-shadow: none;
            padding: 10px;
            position: absolute; /* Make the menu out of the document flow so it can placed anywhere without disturbing other widgets */
            top: 0;
            left: 0;
            right: 0;
            z-index:100 ; /* If you delete this line, your menu link won't be clicked because it is behind the background. Applying this code bring the menu in front of the background */
        }

        .navbar-default .navbar-brand {
            font-family: Verdana;
            color: #ffffff;
            font-size: 20px;
        }

        .navbar-default .navbar-brand:hover,
        .navbar-default .navbar-brand:focus {
            color: #ffffff;
            background-color: transparent;
        }

        .navbar-default .navbar-nav > li > a {
            color: #ffffff;
        }

        .navbar-default .navbar-nav > li > a:hover,
        .navbar-default .navbar-nav > li > a:focus {
            color: #ffffff;
            background-color: transparent;
        }

        .navbar-default .navbar-toggle {
            border-color: transparent;
        }

        .navbar-default .navbar-toggle:hover {
            background-color: transparent;
        }

        .navbar-default .navbar-toggle:focus {
            background-color: transparent;
        }

        .navbar-default .navbar-toggle .icon-bar {
            background-color: #ffffff;
        }

        .carousel .background {
            background-position: center center;
            background-size: 100% 100%;
            background-repeat: no-repeat;
            height: 700px;
        }

        @media (max-width:991px) {
            .carousel .background {
                background-size: cover; /* To make the background image looks good */
            }
        }

        .carousel .background.a {
            background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("https://static.pexels.com/photos/92090/pexels-photo-92090-large.jpeg");
        }

        .carousel .background.b {
            background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("https://static.pexels.com/photos/93750/pexels-photo-93750-large.jpeg");
        }

        .carousel .background.c {
            background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("https://static.pexels.com/photos/76827/bahia-ocean-bay-boat-76827-large.jpeg");
        }

        .carousel-fade .carousel-inner .item {
            opacity: 0;
            transition: opacity 0.5s; /* The 0.5s describes the duration to make the opacity from 0 to 1 */
        }

        .carousel-fade .carousel-inner .active {
            opacity: 1;
        }

        /* CSS Hack to trigger GPU for smooth transition */
        @media all and (transform-3d),
        (-webkit-transform-3d) {
            .carousel-fade .carousel-inner > .item.next,
            .carousel-fade .carousel-inner > .item.active.right {
                opacity: 0;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
            .carousel-fade .carousel-inner > .item.prev,
            .carousel-fade .carousel-inner > .item.active.left {
                opacity: 0;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
            .carousel-fade .carousel-inner > .item.next.left,
            .carousel-fade .carousel-inner > .item.prev.right,
            .carousel-fade .carousel-inner > .item.active {
                opacity: 1;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }
        /* CSS Hack to trigger GPU for smooth transition */

        .covertext {
            position: absolute; /* To make the div to be place anywhere. It is out of the document flow */
            top: 200px; /* The distance between the div with the top of document */
            left: 0px; /* Make the div full width */
            right: 0px; /* Make the div full width */
        }

        .title {
            font-family: Verdana;
            font-weight: 600;
            font-size: 60px;
            color: #ffffff;
            text-align: center;
        }

        .subtitle {
            font-family: Verdana;
            font-size: 23px;
            color: #ffffff;
            text-align: center;
        }

        .explore {
            text-align: center;
            margin-top: 10px;
        }

        .explore .btn-lg,
        .explore .btn-lg:hover {
            border-radius: 30px;
            padding: 15px 25px;
            font-size: 22px;
            background-image: none;
            background-color: #FF4000;
            border-color: #FF4000;
            color: #ffffff;
        }

        .btn,
        .btn:hover {
            border-radius: 0px;
            background-image: none;
            background-color: #FF4000;
            border-color: #FF4000;
            color: #ffffff;
            margin-bottom: 20px;
            box-shadow: none;
            outline: none;
        }

        .btn:focus,
        .btn:active:focus,
        .btn.active:focus,
        .btn.focus,
        .btn:active.focus,
        .btn.active.focus {
            color: #ffffff;
            outline: none;
        }
    </style>
    <body>
        <div class="container-fluid main">

            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span> 
                        </button>
                        <img src="images/Burger_King_Logo.svg.png" alt="" style="width: 100px;height:80px; margin-left: 30px;padding-left: 10px;"/>
                        <a href=""><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
                        <a href=""><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
                        <a href=""><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
                        <a href=""<i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>

                    </div>
                    <div class="nav navbar-nav navbar-right">
                        <i class="fa fa-phone-square" aria-hidden="true" style="font-size:20px;color:white;">  077-0470537</i>
                       <i class="fa fa-envelope" aria-hidden="true" style="font-size:20px;color:white;padding-left:5px;">  Chalanadulaj99@gmail.com</i>
                   


                    
                    
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>


                </div>
            </nav>

            <div id="myCarousel" class="carousel carousel-fade slide" data-ride="carousel" data-interval="3000">
                <div class="carousel-inner" role="listbox">
                    <div class="item active background a"></div>
                    <div class="item background b"></div>
                    <div class="item background c"></div>
                </div>
            </div>

            <div class="covertext">
                <div class="col-lg-10" style="float:none; margin:0 auto;">
                    <h1 class="title">ELINE</h1>
                    <h3 class="subtitle">A Tidy, Clean, Easy-to-Use, and Responsive Landing Page Template</h3>
                </div>
                <div class="col-xs-12 explore">
                    <a href="#"><button type="button" class="btn btn-lg explorebtn">EXPLORE</button></a>
                </div>
            </div>

        </div>
        <br/>
        <br/>
        <br/>
        <div class="container-fluid">
            <div class="row">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox" >
                        <div class="item active" >
                            <img src="images/A.jpg" alt=""/>
                            <div class="carousel-caption">
                                First Image
                            </div>
                        </div>
                        <div class="item" >
                            <img src="images/B.jpg" alt=""/>
                            <div class="carousel-caption">
                                Second Image
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/C.jpg" alt=""/>
                            <div class="carousel-caption">
                                Third Image
                            </div>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>


                </div>
            </div>
        </div>
        <br/>
        <br/>
        <br/>
        <div class="owl-carousel owl-theme" id="1">
            <div> <img src="images/image-1.jpg" alt=""/> </div>
            <div> <img src="images/image-2.jpg" class="img-responsive"> </div>
            <div> <img src="images/image-1.jpg" class="img-responsive"> </div>
            <div> <img src="images/image-3.jpg" class="img-responsive">  </div>
            <div> <img src="images/image-1.jpg" class="img-responsive">  </div>
            <div> <img src="images/image-4.jpg" class="img-responsive">  </div>
            <div> <img src="images/image-1.jpg" class="img-responsive"> </div>
        </div>






        <script src="vendor/jquery-2.2.4.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="owl/owl.carousel.min.js" type="text/javascript"></script>



        <script>
            $(document).ready(function () {


                $('#1').owlCarousel({
                    loop: true,
                    margin: 10,
                    nav: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 3
                        },
                        1000: {
                            items: 5
                        }

                    },
                    autoplay: true,
                    autoplayTimeout: 800,
                })
            });

        </script>

    </body>
</html>


