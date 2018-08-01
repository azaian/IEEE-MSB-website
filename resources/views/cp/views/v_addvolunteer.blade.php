<h2>Add new volunteer :</h2>




{!! Form::open(['url'=>'/about/volunteers/','enctype'=>"multipart/form-data"]) !!}


<div class="form-group">
    {!! Form::label('name','Volunteer name:') !!}
    {!! Form::text('name',null,['class'=>'form-control' ]) !!}
</div>
<div class="form-group">
    {!! Form::label('position','Volunteer position:') !!}
    {!! Form::text('position',null,['class'=>'form-control' ]) !!}
</div>

<div class="form-group">
    {!! Form::label('join_date','join date:') !!}
    {!! Form::text('join_date',null,['class'=>'form-control' ]) !!}
</div>

<div class="form-group">
    {!! Form::label('image','Volunteer image: ( 612*612 )') !!}
    {!! Form::file('image',null,['class'=>'form-control' ]) !!}
</div>

<div class="form-group">
    {!! Form::label('order','Volunteer order:') !!}
    {!! Form::input( 'number', 'order',null,['class'=>'form-control','min'=>'0' ]) !!}
</div>


{!! Form::submit('add vulunteer',['class'=>' form-control btn btn-primary']) !!}

{!! Form::close() !!}

