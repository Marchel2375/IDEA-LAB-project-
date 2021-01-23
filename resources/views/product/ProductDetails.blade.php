@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-warning row flex-row flex-nowrap">{{ __('PRODUCT DETAILS') }}</div>

            <div class="card-body bg-info row flex-row flex-nowrap"> 
                <div class="col-7"> 
                    <h2>{{$product->name}}</h2>
                    <br>
                    <h3>Details:</h3>
                    <p>{{$product->description}}</p>
                    <br>
                    <p>Stock of this product left : {{$product->stock}}</p>

                    @if(Auth::check() && !Auth::user()->isadmin())

                        <form method="POST" action="/product/AddToCart/{{$product->id}}">
                            @csrf
                            <p>Input Quantity of Product you wish to purchase below</p>
                                <label for="quantity" class="text-md-right">Quantity: </label>
                                <input id="quantity" type="number"  class=" @error('quantity') is-invalid @enderror" name="quantity" required autocomplete="QTY" autofocus >

                                @error('quantity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <hr>
                            <button type="submit" class="btn btn-primary">
                                Add/Update Cart
                            </button>
                        </form>
                    @endif
                </div>

                <div class="col-3"> 
                    <div style="width: 30vh; height: 30vh;">
                        <img src="{{ asset($product->image) }}" alt="{{$product->image}}" class="img-fluid" style="width: 30vh; height: 30vh; object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    
        
        
    
@endsection