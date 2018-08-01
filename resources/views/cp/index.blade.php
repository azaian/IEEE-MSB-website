@extends('layouts.cplayout')
@section('body')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <!--up arrow-->
                    <div class="fixed-arrow">
                        <a href="#top"><i class="fa fa-arrow-circle-up"></i></a>
                    </div>

                    <div class="clearfix"></div>


                    <div class="container margt">
                        <section class="cp">
                            <div class="row">
                                <aside class="col-xs-3">
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                                        <!--           item strat ---------------------------------------------------------->
                                        <div class="panel panel-default">
                                            <div class="panel-heading collapsed" id="headingOne" role="button"
                                                 data-toggle="collapse"
                                                 data-parent="#accordion" href="#collapseOne"
                                                 aria-expanded="false" aria-controls="collapseOne">
                                                <h4 class="panel-title">
                                                    Events
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel"
                                                 aria-labelledby="headingOne" aria-expanded="false">
                                                <div class="panel-body">
                                                    <!--                            sub items-->
                                                    <div><a href="/cp/v_eventshome">Event Home </a></div>
                                                    <div><a href="/events/create">Add Event </a></div>

                                                </div>
                                            </div>
                                        </div>
                                        <!--           item end ------------------------------------------------------------->
                                        <!--           item strat ---------------------------------------------------------->
                                        <div class="panel panel-default">
                                            <div class="panel-heading collapsed" id="headingFour" role="button"
                                                 data-toggle="collapse"
                                                 data-parent="#accordion" href="#collapseFour"
                                                 aria-expanded="false" aria-controls="collapseOne">
                                                <h4 class="panel-title">
                                                    Volunteers
                                                </h4>
                                            </div>
                                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                                                 aria-labelledby="headingFour" aria-expanded="false">
                                                <div class="panel-body">
                                                    <!--                            sub items-->
                                                    <div><a href="/cp/v_volunteershome">Volunteers Home </a></div>
                                                    <div><a href="/about/volunteers/create">Add Volunteers </a></div>

                                                </div>
                                            </div>
                                        </div>
                                        <!--           item end ------------------------------------------------------------->
                                        <!--           item strat ---------------------------------------------------------->
                                        <div class="panel panel-default">
                                            <div class="panel-heading collapsed" id="headingThree" role="button"
                                                 data-toggle="collapse"
                                                 data-parent="#accordion" href="#collapseThree"
                                                 aria-expanded="false" aria-controls="collapseThree">
                                                <h4 class="panel-title">
                                                    Tool
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                                 aria-labelledby="headingThree" aria-expanded="false">
                                                <div class="panel-body">
                                                    <!--               sub items    -->
                                                    <div><a href="/cp/junk">delete junk images</a></div>


                                                </div>
                                            </div>
                                        </div>
                                        <!--           item end ------------------------------------------------------------->


                                    </div>
                                </aside>

                                <div class="page col-xs-9" style="background-color: rgba(0,0,0,.05);">

                                    <br>
                                    @if(isset($includedPage))
                                        @include("layouts.errors")
                                        <br>
                                        @include($includedPage)
                                    @else
                                        @include('cp._views')
                                    @endif

                                </div>
                            </div>

                        </section>

                        <div class="clearfix"></div>
                        <footer>
                            <p>
                                copyright &copy reserved to abdelmnem samy
                            </p>
                        </footer>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection

