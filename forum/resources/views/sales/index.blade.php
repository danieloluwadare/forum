@extends('layouts.app')

@section('title', 'Sales')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-sale"> Sales</i> &nbsp;
                    <a href="{{url('/sell')}}" class="btn btn-warning ">Sell a pin</a>
                </div>

                <div class="panel-body">
                    @if ($sales->isEmpty())
                        <p>No sales for today yet.</p>
                    @else
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Customer</th>
                                    <th>Quantity</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($sales as $sale)
                                <tr>                                    
                                    <td>
                                        <a href="{{ url('sales/'. $sale->Order_Id) }}">
                                            #{{ $sale->id }}
                                        </a>
                                    </td>

                                    <td>                                        
                                        {{ $sale->Customer_Name }}
                                    </td>

                                    <td>                                        
                                        {{ $sale->Quantity }}
                                    </td>

                                    <td>                                        
                                        NGN{{ $sale->Amount }}
                                    </td>

                                    <td>
                                        @if ($sale->status === 'Open')
                                            <span class="label label-success">{{ $sale->Status }}</span>
                                        @else
                                            <span class="label label-danger">{{ $sale->Status }}</span>
                                        @endif
                                    </td>

                                    <td>
                                        {{ $sale->created_at }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        {{ $sales->render() }}
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection