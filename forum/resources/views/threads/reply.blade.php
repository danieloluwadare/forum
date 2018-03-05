 <reply>
    {{--<div id="reply-{{$reply->id}}" class="panel panel-default">--}}
        {{--<div class="panel-heading">--}}
            {{--<div class="level">--}}
                {{--<h5 class="flex">--}}
                    {{--<a href="/profiles/{{$reply->owner->name}}">--}}
                        {{--{{$reply->owner->name}}--}}
                    {{--</a> said {{$reply->created_at->diffForHumans()}}--}}

                {{--</h5>--}}

                {{--<div>--}}
                    {{--@if(Auth::check())--}}
                        {{--<favorite :reply="{{$reply}}"></favorite>--}}
                    {{--@endif--}}
                    {{--<form action="/replies/{{$reply->id}}/favorites" method="post">--}}
                        {{--{{csrf_field()}}--}}
                        {{--<button type="submit" class="btn btn-default" {{$reply->isFavorited() ? 'disabled':''}}>--}}
                            {{--{{$reply->favorites_count}}{{str_plural('Like',$reply->favorites_count)}}--}}
                        {{--</button>--}}
                    {{--</form>--}}
                {{--</div>--}}

            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="panel-body">--}}
            {{--<div v-if="editing">--}}
                {{--<div class="form-group">--}}
                    {{--<textarea class="form-control" v-model="body"></textarea>--}}
                {{--</div>--}}

                {{--<button class="btn btn-xs btn-primary" @click="update">Update</button>--}}
                {{--<button class="btn btn-xs btn-link" @click="editing=false">Cancel</button>--}}

            {{--</div>--}}
            {{--<div v-else v-text="body"></div>--}}

        {{--</div>--}}
        {{--@can('update', $reply)--}}
            {{--<div class="panel-footer">--}}
                {{--<form method="post" action="/replies/{{$reply->id}}">--}}

                    {{--<button class="btn btn-xs mr-1" @click.prevent="editing=true">Edit</button>--}}

                    {{--{{csrf_field()}}--}}
                    {{--{{method_field('DELETE')}}--}}
                    {{--<button type="submit" class="btn btn-danger btn-xs">DELETE</button>--}}

                {{--</form>--}}
            {{--</div>--}}
        {{--@endcan--}}
    {{--</div>--}}
 </reply>