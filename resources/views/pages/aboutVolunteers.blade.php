@extends('layouts.layout2')
@section('title')
    IEEE-MSB
    @stop
    @section('body')


            <!-- volunteers section-->
    <section class="margb">
        <h1 class="text-center margb"><span class="ieee">IEEE</span> MSB Volunteers</h1>

        <div class="container cont-v">


            <ul>

                <!-- item -->
                @foreach($volunteers as $vol)
                    <li class="vitem">
                        <div class="padd border  ">
                            <!-- Large modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target=".{{$vol->id}}">
                                <img src="../../resources/images/volunteers/{{$vol->image}}"
                                     class="img-responsive v-img-height  " height="100%" width="100%">

                            </button>
                            <div class="modal fade bs-example-modal-lg {{$vol->id}}" tabindex="-1" role="dialog"
                                 aria-labelledby="myLargeModalLabel">

                                <img src="../../resources/images/volunteers/{{$vol->image}}"
                                     class="center-block modal-content modal-dialog img-responsive "
                                     width="100%"></button>

                            </div>
                            <div class="vname">{{$vol->name}}</div>
                            <!--end Large modal -->
                        </div>
                    </li>
                    @endforeach
                            <!-- end item -->
            </ul>


        </div>
    </section>

    <div class="clearfix"></div>

    <!--includes of bootstraps and jQuery-->
@stop