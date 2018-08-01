<h2>junk images</h2>

@if(count($deletedimg)>0)
    @foreach($deletedimg as $img)
        <div class="border">{{$img}} --->>> has been deleted</div>
    @endforeach
@else
<h3> their is no junk images </h3>
@endif

