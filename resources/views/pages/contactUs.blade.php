@extends('layouts.layout1')
@section('title')
    IEEE-MSB
    @stop
    @section('body')


            <!-- contact us section-->

    <section class="">
        <h1 class="text-center margt"><span class="ieee">IEEE</span> Menoufia SB</h1>

        <div class="container subtext2">
            <p class="text-center">
                <!--  some text needed -->
            </p>
        </div>
    </section>
    <section class=" ">

        <div class="form">
            <div class="container">
                <hr>
                <div class="row">

                    <form class="col-md-6 col-xs-12" method="post" action="">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <input type="text" name="name" value="" placeholder="full name" required>
                        <input type="email" name="email" value="" placeholder="email" required>
                        <input type="text" name="subject" value="" placeholder="subject" required>
                        <input type="number" name="number" value="" placeholder="mobile number                                          - not required -">
                        <textarea name="text" placeholder="tell us what you want ...." required></textarea>
                        <input type="submit" name="emails" value="sendmail">
                    </form>

                    <div class="col-md-5 pull-right col-xs-12 subtext">
                        <p>
                            We are always happy to hear your feedback about us , your opinion about any thing related to
                            us
                            <br><br>
                            IEEE Menoufia SB - Menouf - Faculty of Electronic Engineering - Menoufia University
                            <br><br>
                            info@ieee-msb.org
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <div class="clearfix"></div>
    <!--google map-->

    <!--<section class="container  margb">-->
    <!--<h2 class="text-center margb"> Reach us</h2>-->
    <!--<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3438.6837667310365!2d30.924892315125202!3d30.47339398172831!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2seg!4v1446992466444"-->
    <!--width="100%" height="450" frameborder="3px" style="border:2px" allowfullscreen>-->

    <!--</iframe>-->
    <!--</section>-->

    <div class="clearfix"></div>

@stop

  