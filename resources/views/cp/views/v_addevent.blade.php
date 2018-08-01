<h2>Add new event :</h2>

{!! Form::open(['url'=>'/events/','enctype'=>"multipart/form-data"]) !!}


<div class="form-group">
    {!! Form::label('event_name','Event name:') !!}
    {!! Form::text('event_name',null,['class'=>'form-control' ]) !!}
</div>

<div class="form-group">
    {!! Form::label('date','Event date:') !!}
    {!! Form::text('date',null,['class'=>'form-control' ]) !!}
</div>

<div class="form-group">
    {!! Form::label('event_desc','Event description:') !!}
    <br>
    {!! Form::label('event_desc','to make a new line just write <br> .') !!}
    {!! Form::textarea('event_desc',null,['class'=>'form-control' ]) !!}

</div>

<div class="form-group">
    {!! Form::label('event_image','Event image: ( 360*170 ) ') !!}
    {!! Form::file('event_image',null,['class'=>'form-control' ]) !!}
</div>
<div class="form-group">
    {!! Form::label('event_banner','Event banner: ( 960*361 )') !!}
    {!! Form::file('event_banner',null,['class'=>'form-control' ]) !!}
</div>
<div class="form-group">
    {!! Form::label('order','Event order:') !!}
    {!! Form::input( 'number', 'order',null,['class'=>'form-control','min'=>'0' ]) !!}
</div>

<div class="form-group hidden">
    {!! Form::label('gallery_id','Event gallery id:') !!}
    {!! Form::input( 'number', 'gallery_id',null,['class'=>'form-control']) !!}
</div>


{!! Form::submit('add event',['class'=>' form-control btn btn-primary']) !!}

{!! Form::close() !!}





