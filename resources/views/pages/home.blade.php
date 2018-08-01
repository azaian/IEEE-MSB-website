@extends('layouts.layout')
@section('title')
    IEEE-MSB
    @stop
    @section('body')

@if(!Auth::guest())

            <a href="cp" style="position: absolute; z-index: 9999; top: 0px;">cp</a>
            @endif
            <!--slider start-->
    <section class=" slider">
        <div id="carousel-example-generic" class="carousel slide full" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="carousel-img">
                        <img src="resources/banners/stc-open.png" class="img-responsive" width="100%">
                    </div>
                </div>
                <div class="item">
                    <div class="carousel-img">
                        <img src="resources/banners/Developian.png" class="img-responsive " width="100%">
                    </div>
                </div>
                <div class="item">
                    <div class="carousel-img">
                        <img src="resources/banners/debug-it.png" class="img-responsive" width="100%">
                    </div>

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

    </section>
    <!--slider end -->

    <div class="clearfix"></div>

    <!-- about IEEE and IEEE-MSB section-->
    <section class="container-fluid a-ieee">
        <div class="row">
            <div class=" col-md-6 col-xs-10 col-md-offset-0 col-xs-offset-1 ">
                <img src="resources/images/ieee-logo.png" class="center-block img-responsive">

                <div class="container aboutieee ">
                    <span>About IEEE</span>

                    <div>
                        The IEEE is the world’s largest professional association advancing innovation and technological
                        excellence for the benefit of humanity.
                        IEEE and its members inspire a global community to innovate for a better tomorrow through its
                        highly-cited publications,
                        conferences, technology standards, and professional and educational activities.
                        IEEE is the trusted “voice” for engineering, computing and technology information around the
                        globe.
                    </div>
                </div>
            </div>
            <div class=" col-md-6 col-md-offset-0 col-xs-10 col-xs-offset-1 ">
                <img src="resources/images/ieee-msb-logo2.png" class="center-block img-responsive">

                <div class="container aboutieee ">
                    <span>About IEEE-MSB</span>

                    <div>
                        IEEE MSB was established at Menoufia university in 2007 as part o fIEEE Student Branches
                        which was established at universities and colleges around the world.
                        IEEE MSB is team of volunteer students aiming at improving students' scientific and
                        practical skills in the fields of electronic engineering and management besides the
                        empowerment of creativity and entrepreneurship to achieve the ultimate goal of community
                        revival.
                    </div>
                </div>
            </div>

        </div>

        <div class="button"><a href="about/About IEEE">Read More</a></div>
    </section>
    <div class="clearfix"></div>


    <!--IEEE_MSB mission and vision -->
    <section class="container-fluid mission-vision">
        <h1 class="text-center">IEEE MSB</h1>

        <div class="row">
            <div class=" col-md-6 col-xs-10 col-md-offset-0 col-xs-offset-1 ">

                <div class="container mv ">
                    <span>Mission</span>

                    <div>
                        Work on linking scientific article studied the labor market and develop the skills of students
                        by providing a selection of explanations, events and activities that provide an environment
                        very fruitful supports creativity in all fields of technology and engineering in addition to the
                        transfer of expertise of experienced engineers and efficiency to students and new graduates.
                    </div>
                </div>
            </div>
            <div class=" col-md-6 col-md-offset-0 col-xs-10 col-xs-offset-1 ">

                <div class="container mv ">
                    <span>Vision</span>

                    <div>
                        Promote students' skills in the field of electronic engineering, technology and management
                        to graduate engineers with good knowledge of new technologies and leadership skills,
                        decrease the gap between the academic study and industry and entrepreneurial spirit so that
                        they are able to interact with the labor market.

                    </div>
                </div>
            </div>

        </div>
    </section>
    <div class="clearfix"></div>


    <!-- up coming events -->
    <section class=" events container">
        <div class="title"><h1>Events</h1></div>
        <div class="row ">

        </div>
    </section>

    <div class="clearfix"></div>



    <!--includes of bootstraps and jQuery-->

@stop