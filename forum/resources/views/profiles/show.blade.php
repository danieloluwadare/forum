@extends('layouts.old_layout')

@section('content')
 {{--{{$profileUser->name}}--}}
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <avatar-form :user="{{ $profileUser }}"></avatar-form>
                        {{--<img src="/{{$profileUser->avatar_path}}" width="40" height="40">--}}
                            <br>
                     <strong>  Date Joined: </strong><small>{{$profileUser->created_at->diffForHumans()}}</small>
                    </div>
                    </div>



                    @forelse($activities as $date => $activity)
                        <div class="panel panel-default">
                            <div class="panel-heading">

                           <strong> {{$date}}</strong>

                            </div>
                            <div class="panel-body">
                        @foreach($activity as $record)
                            @if(view()->exists("profiles.activities.{$record->type}"))
                                @include("profiles.activities.{$record->type}", ['activity'=>$record])
                            @endif
                        @endforeach
                            </div>
                        @empty()
                        <p>There is no activity for this user yet</p>

                    @endforelse
                        </div>
                    {{--{{$threads->links()}}--}}
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
                <flash message="{{session('flash')}}"></flash>
            </div>

        </div>
            </div>

        </div>

@endsection