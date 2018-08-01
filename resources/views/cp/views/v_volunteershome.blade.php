@include('layouts.message')

<h3>volunteers </h3>
<table class=" table-hover table-bordered tab">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>postion</th>
        <th>image</th>
        <th>join date</th>
        <th>order</th>
        <th>username</th>
    </tr>

    @if(isset($volunteers))

    @foreach($volunteers as $key => $volunteer)
            <!-- `id`, `event_name`,`event_desc`, `event_banner`, `add_time` -->
    <tr>
        <td>{{$volunteer->id}}</td>
        <td>{{$volunteer->name}}   </td>
        <td>{{$volunteer->position}}  </td>
        <td>{{$volunteer->image}} </td>
        <td>{{$volunteer->join_date}}  </td>
        <td>{{$volunteer->order}}  </td>
        <td>{{$volunteer->username_id}}    </td>

        <td >
            {!! Form::open(['url'=>['/about/volunteers',$volunteer->id],'method'=>'DELETE']) !!}
            {!! Form::submit('Delete',['class'=>' btn btn-danger btn-xs center-block ']) !!}
            {!! Form::close() !!}
            {!! Form::open(['url'=>['/about/volunteers/'.$volunteer->id.'/edit'],'method'=>'get']) !!}
            {!! Form::submit('Edit ',['class'=>'btn btn-xs btn-primary center-block ']) !!}
            {!! Form::close() !!}
        </td>
    </tr>

    @endforeach
    @endif


</table>