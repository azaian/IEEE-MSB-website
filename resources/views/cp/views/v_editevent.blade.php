@if(isset($event))

<h2>edit {{$event->event_name}}  event :</h2>


{!! Form::open(['url'=>['/events',$event->id],'enctype'=>"multipart/form-data" ,'method'=>'put']) !!}

<div class="form-group">
    {!! Form::label('event_name','Event name:') !!}
    {!! Form::text('event_name',$event->event_name,['class'=>'form-control' ]) !!}
</div>

<div class="form-group">
    {!! Form::label('date','Event date:') !!}
    {!! Form::text('date',$event->date,['class'=>'form-control' ]) !!}
</div>

<div class="form-group">
    {!! Form::label('event_desc','Event description:') !!}
    <br>
    {!! Form::label('event_desc','to make a new line just write <br> .') !!}
    {!! Form::textarea('event_desc',$event->event_desc,['class'=>'form-control' ]) !!}

</div>

<div class="form-group">
    {!! Form::label('event_image','Event image: ( 360*170 ) ') !!}
    {!! Form::file('event_image',null,['class'=>'form-control' ]) !!}
    {!! Form::label('event_banner',$event->event_banner) !!}

</div>
<div class="form-group">
    {!! Form::label('event_banner','Event banner: ( 960*361 )') !!}
    {!! Form::file('event_banner',null,['class'=>'form-control' ]) !!}
    {!! Form::label('event_banner',$event->event_banner) !!}
</div>
<div class="form-group">
    {!! Form::label('order','Event order:') !!}
    {!! Form::input( 'number', 'order',$event->order,['class'=>'form-control','min'=>'0' ]) !!}
</div>

<div class="form-group hidden">
    {!! Form::label('gallery_id','Event gallery id:') !!}
    {!! Form::input( 'number', 'gallery_id',$event->gallery_id  ,['class'=>'form-control']) !!}
</div>


{!! Form::submit('update event',['class'=>' form-control btn btn-primary']) !!}

{!! Form::close() !!}
@endif




