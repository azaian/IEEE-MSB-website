@include('layouts.message')

<h3>events </h3>

<table class=" table-hover table-bordered tab">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>description</th>
        <th>event_banner</th>
        <th>event_image</th>
        <th>date</th>
        {{--<th>gallery id</th>--}}
        <th>order</th>
        <th>username</th>
    </tr>


    @if(isset($events))

    @foreach($events as $key => $event)
            <!-- `id`, `event_name`,`event_desc`, `event_banner`, `add_time` -->
    <tr>
        <td>{{$event->id}}</td>
        <td>{{$event->event_name}}   </td>
        <td>{{$event->event_desc}}  </td>
        <td>{{$event->event_banner}} </td>
        <td>{{$event->event_image}}  </td>
        <td>{{$event->date}}  </td>
        <td>{{$event->order}}    </td>
        <td>{{$event->username_id}}    </td>

        <td>
            {!! Form::open(['url'=>['events',$event->id],'method'=>'DELETE']) !!}
            {!! Form::submit('Delete',['class'=>' btn btn-danger btn-xs center-block ']) !!}
            {!! Form::close() !!}
            {!! Form::open(['url'=>['/events/'.$event->id.'/edit'],'method'=>'get']) !!}
            {!! Form::submit('Edit ',['class'=>'btn btn-xs btn-primary center-block ']) !!}
            {!! Form::close() !!}

        </td>
    </tr>

    @endforeach
    @endif

</table>


