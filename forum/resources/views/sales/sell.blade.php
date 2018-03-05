@extends('layouts.app')

@section('title', 'Open Ticket')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Sales</div>
                <a href="{{url('/sales')}}" class="btn btn-warning ">Sales</a>

                <div class="panel-body">
                    @include('includes.flash')

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/sell') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Customer Name</label>

                            <div class="col-md-6">
                                <input id="customer" type="text" class="form-control" name="customer" value="{{ old('customer') }}">

                                @if ($errors->has('customer'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('customer') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('priority') ? ' has-error' : '' }}">
                            <label for="priority" class="col-md-4 control-label">Category</label>

                            <div class="col-md-6">
                                <select id="category" type="" class="form-control" name="category">
                                    <!-- <option value="">Category of Sale </option> -->
                                    <option value="1">Pins</option>
                                    <option value="2">Flyer</option>
                                    <option value="3">Tickets</option>
                                </select>

                                @if ($errors->has('category'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('category') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="serial_from" class="col-md-4 control-label">Serial Number</label>
                            <input type="text" name="serial_from" id="serial_from" placeholder="from"> - <input type="text" id="serial_from" name="serial_to" placeholder="To">
                        </div>

                        <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                            <label for="message" class="col-md-4 control-label">Quantity</label>

                            <div class="col-md-6">
                                <input id="quantity" type="text" class="form-control" name="quantity" onchange="calAmount();" onkeyup="this.onchange();" onpaste="this.onchange();" oninput="this.onchange();" value="{{ old('quantity') }}">

                                @if ($errors->has('quantity'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('quantity') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                    <div class="form-group">
                        <p id="amount"  class="col-md-6 col-md-offset-4"></p>
                    </div>
                        <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" style="border: 1px solid #f25f43;" class="btn btn-primary">
                                <i class="fa fa-btn fa-money"></i> Sell
                            </button>
                        </div>
                        </div>
                    </form>
                   
                </div>
                </div>
                
            </div>
        </div>
    </div>

    
@endsection