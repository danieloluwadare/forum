@extends('layouts.old_layout')


@section('content')
    <thread-view :initial-replies-count="{{$thread->replies_count}}" inline-template>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row" style="margin-bottom: 0px;
                                            margin-left: auto;
                                            margin-right: auto;
                                             background-color: #fff;
                                             border: 1px solid transparent;
                                             border-radius: 4px;
                                            box-shadow: rgba(46, 61, 73, 0.08) 2px 2px 8px 0px;">
                        <div class="col-md-1">
                            <div style="padding: 15px 0 15px 15px;">
                                <div style="width: 37px; margin-left: 5px;">
                                    <img src="{{ $thread->creator->avatar_path }}" alt="{{$thread->creator->name}}" width="25" height="25">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-11">
                            <div>
                                <h2 style="font-size: 18px;
                                        font-family: 'Open Sans', sans-serif;
                                        margin-top: 10px;
                                        margin-bottom: 10px">
                                    <a href="{{url('/')}}/profiles/{{$thread->creator->name}}">{{$thread->creator->name}}</a> posted:: {{$thread->title}}</h2>
                            </div>

                            <div>
                                <p style="text-align: justify; padding-right: 30px; padding-top: 20px; padding-bottom: 15px;">
                                    {{$thread->body}}
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 22px;
                                            margin-left: auto;
                                            margin-right: auto;
                                             background-color: rgb(245, 245, 245);
                                             border: 1px solid transparent;
                                             border-radius: 4px;
                         box-shadow: rgba(46, 61, 73, 0.08) 2px 2px 8px 0px;">
                        <hr style="margin-top: 0px; margin-bottom: 0px;">
                        <div class="col-md-2" style="line-height: 50px;" >
                            @if(auth()->check())
                                <subscribe-button :active="{{json_encode($thread->isSubscribedTo)}}"></subscribe-button>
                            @endif
                        </div>
                        <div class="col-md-10" style="line-height: 50px;">
                           <div class="col-md-3">Total Replies::<span class="badge" v-text="repliesCount"></span></div>
                            <div class="col-md-5">
                                <span class="glyphicon glyphicon-time"></span>
                                Posted on:: {{$thread->created_at->diffForHumans()}}
                            </div>
                            <div class="col-md-3 col-md-offset-1">

                                @can('update', $thread)
                                    <form action="{{url('/')}}{{$thread->path()}}" method="post">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <button class="btn btn-primary" style="background-color: #d9534f; border-color: #d43f3a; color: white" type="submit">Delete
                                            <span class="glyphicon btn-glyphicon glyphicon-trash img-circle text-danger"></span>
                                        </button>
                                    </form>
                                @endcan

                            </div>
                        </div>
                    </div>


                    {{--<div class="panel panel-default">--}}
                        {{--<div class="panel-heading">--}}
                            {{--<div class="level">--}}
                                {{--<span class="flex">--}}
                                    {{--<a href="{{url('/')}}/profiles/{{$thread->creator->name}}">{{$thread->creator->name}}</a> posted:: {{$thread->title}}--}}
                                {{--</span>--}}
                                {{--@can('update', $thread)--}}
                                    {{--<form action="{{$thread->path()}}" method="post">--}}
                                        {{--{{csrf_field()}}--}}
                                        {{--{{method_field('DELETE')}}--}}
                                        {{--<button class="btn btn-link">Delete</button>--}}
                                    {{--</form>--}}
                                {{--@endcan--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="panel-body">--}}
                            {{--{{$thread->body}}--}}
                        {{--</div>--}}

                        {{--<div class="panel-footer">--}}

                        {{--</div>--}}
                    {{--</div>--}}

                    <replies @added="repliesCount++" @removed="repliesCount--"></replies>
                    {{--@foreach($replies as $reply)--}}
                        {{--@include("threads.reply")--}}
                    {{--@endforeach--}}

                    {{--{{$replies->links()}}--}}
                </div>
                <div class="col-md-3 hidden-xs hidden-sm col-md-offset-1">

                    <div class="panel panel-default" style="box-shadow: rgba(46, 61, 73, 0.08) 2px 2px 8px 0px;">
                        <div class="panel-heading">
                            <div class="panel-title">
                                Choose a Filter
                            </div>
                        </div>
                        <div class="panel-body">
                            <ul style="list-style: none">
                                @if(auth()->check())
                                    <li><a class="btn btn-primary" href=" {{url('/')}}/thread?by={{auth()->user()->name}}"style="color: #636b6f; background-color: #f5f5f5; border-color: #d3e0e9; box-shadow: rgba(46, 61, 73, 0.08) 2px 2px 8px 0px">   <i class="material-icons" style="font-size: 16px; margin-left: 4%; ">label</i> &nbsp My Threads</a></li><br>
                                @endif
                                <li style="    padding-bottom: 4%;"><a class="btn btn-primary"  href="{{url('/thread')}}" style="color: #636b6f; background-color: #f5f5f5; border-color: #d3e0e9; box-shadow: rgba(46, 61, 73, 0.08) 2px 2px 8px 0px">   <i class="material-icons" style="font-size: 16px; margin-left: 4%; ">label</i> &nbsp All Threads</a></li>
                                <li style="    padding-bottom: 4%;"><a class="btn btn-primary" href="{{url('/')}}/thread?popular=1" style="color: #636b6f; background-color: #f5f5f5; border-color: #d3e0e9; box-shadow: rgba(46, 61, 73, 0.08) 2px 2px 8px 0px">   <i class="material-icons" style="font-size: 16px; margin-left: 4%; ">label</i> &nbsp Popular Thread</a></li>
                                <li style="    padding-bottom: 4%;"><a class="btn btn-primary" href="{{url('/')}}/thread?unanswered=1" style="color: #636b6f; background-color: #f5f5f5; border-color: #d3e0e9; box-shadow: rgba(46, 61, 73, 0.08) 2px 2px 8px 0px">   <i class="material-icons" style="font-size: 16px; margin-left: 4%; ">label</i> &nbsp Solved</a></li>

                            </ul>
                        </div>

                    </div>

                    <div class="panel panel-default" style="box-shadow: rgba(46, 61, 73, 0.08) 2px 2px 8px 0px;">
                        <div class="panel-heading">
                            <div class="panel-title">
                                Channels
                            </div>
                        </div>
                        <div class="panel-body">

                            @foreach(App\Channel::all() as $channel)
                                <ul style="list-style: none">
                                    <li><a href="{{url('/')}}/thread/{{$channel->slug}}" class="btn btn-primary"  style="color: #636b6f; background-color: #f5f5f5; border-color: #d3e0e9; box-shadow: rgba(46, 61, 73, 0.08) 2px 2px 8px 0px"> <i class="material-icons" style="font-size: 16px; margin-left: 4%; ">label</i> &nbsp {{ucwords($channel->name)}} </a>  </li>                                                                                 </a></li>
                                </ul>
                            @endforeach

                        </div>

                    </div>

                </div>

                <!-- for the other column for counting comments -->
                {{--<div class="col-md-4">--}}
                    {{--<div class="panel panel-default">--}}
                        {{--<div class="panel-body">--}}
                            {{--<p>This Thread was published {{$thread->created_at->diffForHumans()}} by <a href="#">{{$thread->creator->name}}</a> and  currently has <span v-text="repliesCount"></span> {{str_plural('comment', $thread->replies_count)}} </p>--}}
                            {{--<p>{{session('flash')}}</p>--}}
                            {{--<p>--}}
                                {{--<subscribe-button :active="{{json_encode($thread->isSubscribedTo)}}"></subscribe-button>--}}
                            {{--</p>--}}

                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                <flash message="{{session('flash')}}"></flash>
            </div>

        </div>
            {{--<flash message="temporary"></flash>--}}


    </thread-view>
    {{--<script src="{{ asset('js/app.js') }}"></script>--}}
@endsection

