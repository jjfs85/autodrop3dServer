
<div class="btn-group btn-group-justified" data-toggle="buttons" role="group" aria-label="...">
    @foreach(\App\Group::getGroups() as $group)
        @if ($loop->index % 4 == 0) {{--This loop wraps the buttons to the next line after every 4th button--}}
</div><div class="btn-group btn-group-justified" data-toggle="buttons" role="group" aria-label="...">
    @endif
    <div class="btn-group" role="group">
        @if(!(isset($user) and isset($groups)))
                <input type="checkbox" name="group[{{$group->id}}]" autocomplete="off"> {{$group->name}}
        @else
                <input type="checkbox" name="group[{{$group->id}}]" autocomplete="off" {{($groups->where('id','=',$group->id)->first())?'checked':''}}> {{$group->name}}
        @endif
    </div>
    @endforeach
</div>