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

    <body>
        <div class="container-fluid">
            <div class="row" id="header1">
                <div class="container header inner">
                    <nav class="navbar">
                        <div class="container">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <img src="images/Burger_King_Logo.svg.png" alt="" class="image1" class="img-responsive"/>
                            </div>
                            <div class="collapse navbar-collapse" id="myNavbar">
                                <ul class="nav navbar-nav navbar-right masthead-nav">
                                    <li><a href="#"> E-commerce Logistics</a></li>
                                    <li><a href="#"> Contract Logistics</a></li>
                                    <li><a href="#"> Courier</a></li>
                                    <li><a href="#"> Transport</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
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


