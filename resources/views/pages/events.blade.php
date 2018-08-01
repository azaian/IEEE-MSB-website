@extends('layouts.layout1')
@section('title')
    IEEE-MSB
    @stop
    @section('body')


            <!-- events section -->
    <section class="sec-events">
        <div class="head-events">
            <img src="../resources/images/events-page-title.png" class="img-responsive center-block">
            <hr>
            <hr>
        </div>
        <div class="container multi-event ">
            <!-- put content here inside row- ------------------------------------------------------------------------>
            <div class="row ">

                @if(!is_null($event))


                    <div class="event-details">
                        <h1>{{$event->event_name}} </h1>

                        <div class="container row">
                            <div class="col-md-5 col-xs-10 col-md-offset-0 col-xs-offset-1">
                                <p>

                                <h3>describtion :</h3>

                                <div id="date">{{$event->date}}
                                </div>
                                {{$event->event_desc}}
                                </p>
                            </div>
                            <div class=" col-md-7 col-xs-10 col-md-offset-0 col-xs-offset-1 pull-right ">
                                <img src="../resources/images/events/{{$event->event_banner}}"
                                     class="img-responsive ">
                            </div>
                        </div>

                        @else
                            @foreach(@$events as $event)
                                <div class="col-md-4 col-sm-4 col-xs-10 col-xs-offset-1 col-sm-offset-0 ">
                                    <div class="col-xs-12 event">
                                        <img src="../resources/images/events/{{$event->event_image}}"
                                             class="img-responsive">

                                        <div class="sub-event">
                                            <h3>{{$event->event_name}}</h3>

                                            <div class="link">
                                                <a href="/events/{{$event->id}}">See More <i class="fa fa-search"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
            </div>
    </section>


    <div class="clearfix"></div>



    <!--includes of bootstraps and jQuery-->
@stop