<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description"
          content="IEEE MSBIEEE MSBIEEE MSBIEEE MSBIEEE MSBIEEE MSBIEEE MSBIEEE MSBIEEE MSBIEEE MSBIEEE MSBIEEE MSBIEEE MSBIEEE MSBIEEE MSBIEEE MSBIEEE MSBIEEE MSBIEEE MSBIEEE MSBIEEE MSB">
    <meta name="keywords" content=" IEEE, IEEE_MSB, IEEE-MSB, IEEE MSB, STC, Menofia SB, Menoufia SB ,Menouf SB, student branch. " >
    <title>@yield('title')</title>
    <link rel="icon" href="../resources/images/title-logo.png">
    <!-- to make html5 readable on old browsers-->
    <script src="../resources/js/html5shiv.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../resources/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="../resources/includes/font-awesome-4.3.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="../resources/css/style.css"/>
</head>
<body id="top">
<!--up arrow-->
<div class="fixed-arrow">
    <a href="#top"><i class="fa fa-arrow-circle-up"></i></a>
</div>
<!--banner-->
<div class="container-fluid ">
    <img src="../resources/images/banner.png" class="img-responsive center-block">
</div>


<!--nav bar start-->
<section data-spy="affix" data-offset-top="300" data-offset-bottom="0">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img class="img-responsive"
                                                      src="../resources/images/ieee-msb-logo.png"/>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                <ul class="nav navbar-nav navbar-right">
                    <li><a class="active-link" href="/">Home</a></li>
                    <li><a href="/events/ ">Events</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true"
                           aria-expanded="false">Competitions<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/compitions/stc1/">STC phase 1</a></li>
                            <!--<li><a href="compitions/stc2.html">STC phase 2</a></li>-->
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true"
                           aria-expanded="false">About<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/about/About%20IEEE/ ">About IEEE</a></li>

                            <li><a href="/about/IEEE-MSB%20board/ ">IEEE-MSB Board</a></li>
                            <li><a href="/about/volunteers/ ">Volunteers</a></li>
                            <!--<li><a href="about/benfits/ ">benefits</a></li>-->
                        </ul>
                    </li>
                    <li><a href="/contact%20us/ ">Contact us</a></li>
                    <!--<li><a href="#">Hall of fame</a></li>-->

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</section>
<!--nav bar end-->

<div class="clearfix"></div>
<div>

    @yield('body')

</div>
<div class="clearfix"></div>
<footer class="footer container-fluid">
    <div class="container  ">
        <div class="title"><img  src="../resources/images/footer-logo.png" class="img-responsive center-block"></div>
        <div class="col-md-5 col-xs-10 col-md-offset-0 col-xs-offset-1">
            <p class="add"><span>Find us :<br/></span>menouf - faculty of electroic engineering - menofia university</p>
            <br/>

            <p class="add"><span>Contact us :<br/></span>info@ieee-msb.com
            </p>
            <br>

            <div class="icons">
                <span id="face">  <a href=" https://www.facebook.com/IEEE.MSB/" target="_blanck"> <i class="fa fa-facebook-official"></i></a></span>
                <span id="youtube">  <a href="https://www.youtube.com/channel/UCGQk1wyE0it46dkDZVQ6RKg" target="_blanck"> <i class="fa fa-youtube-play"></i></a></span>
                <span id="twitter">  <a href="https://twitter.com/IEEE_MSB" target="_blanck"> <i class="fa fa-twitter"></i></a></span>
                <span id="linked">  <a href="https://plus.google.com/107129456030792500233/posts" target="_blank"> <i class="fa fa-google-plus"></i></a></span>
            </div>
        </div>
        <div class=" col-md-5 col-xs-10 col-md-offset-2 col-xs-offset-1 ">
            <p class="add"><span>Visit us :<br/></span></p>
            <a href="https://www.google.com.eg/maps/place/Faculty+Of+Electronic+Engineering+-+Menofia+University/@30.4733986,30.9248923,17z/data=!3m1!4b1!4m2!3m1!1s0x14587e447c6fc38b:0xc47ca8046df9b6d6?hl=en">
                <img width="85%" src="../resources/images/map.png">
            </a>
        </div>
    </div>
    <div class="dev-footer">
        All rights Reserved © 2015 IEEE MenofiaSB
        <span class="pull-right"><a href="#">contact us</a></span>
    </div>

</footer>

<script src="../resources/js/jqeury.js">
</script>
<script src="../resources/js/plugin.js"></script>
<script src="../resources/js/bootstrap.min.js"></script>
</body>
</html>