@extends('layouts.app')


@section('content')
    <h1>Transaction History</h1>
    <hr>
    @foreach($transactions as $transaction)
    <div>
        <h3>{{$transaction->date}}</h3>
        <table class="table table-striped table-dark" id="{{$transaction->id}}">
        <thead>
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>QTY</th>
            <th>Price</th>
            <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            <!-- DISPLAY DATA FROM CONTROLLER -->
        
            @foreach($transaction->products as $product) 
            <tr>
            <td><img src="{{ asset($product->image) }}" alt="{{$product->image}}" class="img-fluid" style="width: 10vh; height: 10vh; object-fit: cover;"></td>
            <td>{{$product->name}}</td>
            <td>{{$product->pivot->count}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->pivot->count * $product->price}}</td>
            </tr>
            @endforeach
            <tfoot>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>Total: {{$grandtotals[$transaction->id]}}</td>
            </tr>
            </tfoot>
        </tbody>
        </table>
    </div>
    @endforeach




@endsection

