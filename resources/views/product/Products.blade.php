@extends('layouts.app')

@section('content')
    <h1 style="float: left;">{{$type}}</h1>
    <form class="form-inline" style="float: right;">
        <!-- SEARCH BAR -->
        <input class="form-control mr-sm-2" placeholder="Search" name="search" value="">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <table class="table table-striped table-info" >
        <thead>
            <tr>
            <th class="font-weight-bold">Name</th>
            <th class="font-weight-bold">Product Image</th>
            <th class="font-weight-bold">Product Stock</th>
            <th class="font-weight-bold">Product Price</th>
            <th class="font-weight-bold">Decription</th>
            </tr>
        </thead>
        <tbody>
            <!-- DISPLAY DATA FROM CONTROLLER -->
        
            @foreach($products as $product) 
            <tr>
            <td>{{$product->name}}</td>
            <td style="width: 12vh;"><img src="{{ asset($product->image) }}" alt="{{$product->image}}" class="img-fluid" style="width: 10vh; height: 10vh; object-fit: cover;"></td>
            <td>{{$product->stock}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->description}}</td>
                <td>
                    <a href="/product/{{$product->id}}" type="button" class="btn btn-primary btn-lg btn-block">View Product</button>
                    @if(Auth::check())
                        @if(Auth::user()->isadmin())
                        <a href="/form/product/update/{{$product->id}}" type="button" class="btn btn-primary btn-lg btn-block">Update</a>
                            <br>
                            <form method="POST" action="/form/product/delete/store">
                                @csrf
                                <input type="hidden" name="id" value="{{$product->id}}"> 
                                <button type="submit" class="btn btn-danger btn-lg btn-block" style = "float: left;">
                                    Remove
                                </button>
                            </form>
                        @endif
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection