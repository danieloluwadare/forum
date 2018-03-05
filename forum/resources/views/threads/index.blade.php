@extends('layouts.old_layout')


@section('content')
    <div class="container " style="width: 100%;background-size: cover;
    background-position: 50% 50%;
    min-height: 41.5rem; background-image: url('{{ asset('assets/img/forum.jpg') }}'); margin-top: -2%;     opacity: 1;">
        <div class="row">
            <div class="col-md-6 col-md-offset-2" style="padding-top: 7%">

                <h3 style="line-height: 5.625rem;
    display: block;
    font-family: 'Helvetica Neue LT', 'Hiragino Kaku Gothic Pro', 'Helvetica Neue', 'Tahoma', 'Arial', sans-serif;
                color: white;
                font-size: 43px;">
                   Happy World <br> Meal Gate   Forum
                </h3>

                    <a href="{{url('/')}}/thread/create" class="btn btn-primary" style="border-color:#ff5722; background-color: #ff5722 ">Start A Thread</a>&nbsp
                    <button class="btn btn-primary" style="background-color: transparent; border-color: white;">Find A Thread</button>

            </div>



        </div>


    </div>
    <div class="container hidden-sm hidden-xs">
        <div class="row">
            <form >
                <div class="form-group" style="    margin-left:15%;">

                    <div class="input-group" style="  width: 80%;  margin-top: 3%;">
                        <div class="input-group-addon" style="background-color: #ffffff;"  ><i class="material-icons">search</i></div>
                        <input type="text" style="height: 50px; border-right-color: white; border-left-color: white;" class="form-control" id="exampleInputAmount" placeholder="SEARCH THE FORUM">
                        <div class="input-group-addon" style="background-color: #ffffff; " >  <button style="border-color:#ff5722; background-color: #ff5722" class="btn btn-primary">SEARCH</button></div>
                    </div>
                </div>

            </form>
        </div>
    </div>
    <div class="container" style="padding-top: 5%">
        <div class="row">
            <div class="col-md-8">

                @forelse($threads as $thread)
                    <div class="panel panel-default"  style= "box-shadow: rgba(46, 61, 73, 0.08) 2px 2px 8px 0px; ">

                        <div class="panel-heading">
                            <div class="level">
                                <h4 class="flex">
                                    <a style="text-decoration: none; color:#000;"  href="{{url('/')}}{{$thread->path()}}" >
                                        @if( auth()->check() && $thread->hasUpdatesFor(auth()->user()))
                                            <strong> {{ucwords($thread->title)}}</strong>
                                        @else
                                           {{ucwords($thread->title)}}
                                        @endif

                                    </a>


                                </h4>




                            </div>
                        </div>

                        <div class="panel-body">
                         <p style="text-align: justify">   {{$thread->body}}</p>

                        </div>
                        <div class="panel-footer">

                           <i class="material-icons" style="font-size: 16px; margin-left: 4%; color: #4caf50" >access_time</i>{{$thread->created_at->diffForHumans()}} &nbsp
                          <i class="material-icons"     style="font-size: 16px; margin-left: 4%; color: #4caf50">reply</i>{{$thread->replies_count}} {{str_plural('reply', $thread->replies_count)}} &nbsp
                            <i class="material-icons" style="font-size: 16px; margin-left: 4%; color: #4caf50">label_outline</i> <a style="text-decoration: none" href="{{url('/')}}/thread/{{$thread->channel->slug}}"> {{ucwords($thread->channel->name)}}</a>
                            <i class="material-icons" style="font-size: 16px; margin-left: 4%; color: #4caf50;">account_circle</i> <a  style="text-decoration: none" href="{{url('/')}}/profiles/{{$thread->creator->name}}">{{$thread->creator->name}}</a>
                        </div>


                    </div>
                @empty
                    <p>There are no relevant record at this time</p>
    @endforelse
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

                </div>
            </div>

@endsection