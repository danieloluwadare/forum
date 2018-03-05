<div class="panel panel-default">
    <div class="panel-heading">
        <div class="level">
            <span class="flex">
                <b>{{$profileUser->name}}</b> created a thread::
                <a href="{{url('/')}}{{$activity->subject->path()}}">{{$activity->subject->title}}</a>
            </span>
            <span class="">{{$activity->subject->created_at->diffForHumans()}}</span>
        </div>

    </div>

    <div class="panel-body">
        {{$activity->subject->body}}
    </div>
</div>