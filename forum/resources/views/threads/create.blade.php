@extends('layouts.old_layout')


@section('content')
    <div class="container" style="background-image: url('{{asset('assets/img/room.jpg')}}'); margin-top:-3%; width:100%; min-height:60px; background-size: cover; padding: 9%;">

            <div class="col-md-8">
                <div class="panel panel-default" style="box-shadow: rgba(46, 61, 73, 0.08) 2px 2px 8px 0px;">
                    <div class="panel-heading"><strong>Create A New Thread</strong></div>

                    <div class="panel-body">
                        <form action={{url('/thread')}} method="post">
                            {{csrf_field()}}

                            <div class="form-group">
                                <label for="channel_id">Choose a channel</label>
                                <select name="channel_id" class="form-control" required>
                                    <option value="">choose one below</option>
                                    @foreach($channels as $channel)
                                        <option value="{{$channel->id}}" {{old('channel_id')==$channel->id ? 'selected' : ""}}>{{$channel->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="title">Title:</label>
                                <input type="text" class="form-control" id="title" placeholder="title" name="title" value="{{old('title')}}" required>
                            </div>

                            <div class="form-group">
                                <label for="body">Body:</label>
                                <textarea name="body" id="body" class="form-control" required>{{old('body')}}</textarea>
                            </div>

                            <button type="submit" class="btn btn-default">Publish</button>

                        </form>

                        @if(count($errors))
                            <ul class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        @endif


                    </div>
                </div>
            </div>


            <div class="col-md-3 hidden-xs hidden-sm col-md-offset-1">

                <div class="panel panel-default" style="box-shadow: rgba(46, 61, 73, 0.08) 2px 2px 8px 0px;">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <strong>Choose A Filter</strong>
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



            </div>

        </div>
    </div>



@endsection