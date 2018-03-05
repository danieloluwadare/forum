@extends('layouts.app')

@section('title', 'All Tickets')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-ticket"> Tickets</i>
                    <div class="pull-right" style="max-width: 300px;">
                        <form method="post" id="searchForm" action="{{ url('admin/search_tickets') }}">
                        {!! csrf_field() !!}
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search Tickets" name="TicketId">
                                    <div class="btn input-group-addon" onclick="document.getElementById('searchForm').submit()">
                                        search
                                    </div>
                                </div>                                
                            </div>
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="panel-body">
                    @if ($tickets->isEmpty())
                        <p>There are currently no tickets.</p>
                    @else
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Last Updated</th>
                                    <th style="text-align:center" colspan="2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($tickets as $ticket)
                                <tr>
                                    <td>
                                        @foreach ($categories as $category)
                                            @if ($category->id === $ticket->category_id)
                                                {{ $category->name }}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        <a href="{{ url('tickets/'. $ticket->ticket_id) }}">
                                            #{{ $ticket->ticket_id }} - {{ $ticket->title }}
                                        </a>
                                    </td>
                                    <td>
                                        @if ($ticket->status === 'Open')
                                            <span class="label label-success">{{ $ticket->status }}</span>
                                        @else
                                            <span class="label label-danger">{{ $ticket->status }}</span>
                                        @endif
                                    </td>
                                    <td>{{ $ticket->updated_at }}</td>
                                    <td>
                                        <a href="{{ url('tickets/' . $ticket->ticket_id) }}" class="btn btn-primary">Comment</a>
                                    </td>
                                    <td>
                                        @if ($ticket->status === 'Open')
                                            <form action="{{ url('admin/close_ticket/' . $ticket->ticket_id) }}" method="POST">
                                                {!! csrf_field() !!}
                                                
                                                <button type="submit" class="btn btn-danger">Close</button>
                                            </form>
                                        @else
                                            <form action="{{ url('admin/re_open_ticket/' . $ticket->ticket_id) }}" method="POST">
                                                {!! csrf_field() !!}
                                                
                                                <button type="submit" class="btn btn-success">Re-open</button>
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        {{ $tickets->render() }}
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection