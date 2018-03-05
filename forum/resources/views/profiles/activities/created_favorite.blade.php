<div class="panel panel-default">
    <div class="panel-heading">
        <div class="level">
            <span class="flex">
                <a href="{{url('/')}}{{$activity->subject->favorited->path()}}">
                    <b>{{$profileUser->name}}</b> favorited a reply
                </a>
            </span>
            <span class="">{{$activity->subject->created_at->diffForHumans()}}</span>
        </div>

    </div>

    <div class="panel-body">
        {{$activity->subject->favorited->body}}
    </div>
</div>