@if(isset($volunteer))

    <h2>edit {{$volunteer->name}}  details :</h2>

    {!! Form::open(['url'=>['/about/volunteers',$volunteer->id],'enctype'=>"multipart/form-data" , 'method'=>'put']) !!}


<div class="form-group">
    {!! Form::label('name','Volunteer name:') !!}
    {!! Form::text('name',$volunteer->name,['class'=>'form-control' ]) !!}
</div>
<div class="form-group">
    {!! Form::label('position','Volunteer position:') !!}
    {!! Form::text('position',$volunteer->position,['class'=>'form-control' ]) !!}
</div>

<div class="form-group">
    {!! Form::label('join_date','join date:') !!}
    {!! Form::text('join_date',$volunteer->join_date,['class'=>'form-control' ]) !!}
</div>

<div class="form-group">
    {!! Form::label('image','Volunteer image: ( 612*612 )') !!}
    {!! Form::file('image',null,['class'=>'form-control' ]) !!}
    {!! Form::label('image',$volunteer->image) !!}

</div>

<div class="form-group">
    {!! Form::label('order','Volunteer order:') !!}
    {!! Form::input( 'number', 'order',$volunteer->order,['class'=>'form-control','min'=>'0' ]) !!}
</div>


{!! Form::submit('update volunteer details',['class'=>' form-control btn btn-primary']) !!}

{!! Form::close() !!}

@endif