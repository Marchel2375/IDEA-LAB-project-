@extends('layouts.app')


@section('content')
<script>
        $(document).ready(function() {
            $('table thead th').each(function(i) {
                calculateColumn(4);
            });
        });

        function calculateColumn(index) {
            var total = 0;
            $('table tr').each(function() {
                var value = parseInt($('td', this).eq(index).text());
                if (!isNaN(value)) {
                    total += value;
                }
            });
            $('table tfoot td').eq(index).text('Total: ' + total);
        }
</script>
<h1>Cart</h1>
<hr>
<table class="table table-striped table-warning">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Quantity</th>
      <th>Price</th>
      <th>Subtotal</th>
    </tr>
  </thead>
  <tbody>
    <!-- DISPLAY DATA FROM CONTROLLER -->
    
    @foreach($user->products as $product) 
    <tr>
      <td><img src="{{ asset($product->image) }}" alt="{{$product->image}}" class="img-fluid" style="width: 10vh; height: 10vh; object-fit: cover;"></td>
      <td>{{$product->name}}</td>
      <td>{{$product->pivot->count}}</td>
      <td>{{$product->price}}</td>
      <td>{{$product->pivot->count * $product->price}}</td>
      <td>
        <a class="btn btn-primary" style = "float: left; margin-right: 1vh;" href="{{ url("/product/".$product->id) }}" >Edit</a>
        <form method="POST" action="/product/RemoveFromCart">
          @csrf
          <input type="hidden" name="Product_id" value="{{$product->id}}"> 
          <button type="submit" class="btn btn-danger" style = "float: left;">
            Remove
          </button>
        </form>
      </td>
    </tr>
    @endforeach
    <tfoot>
      <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
      </tr>
    </tfoot>
  </tbody>
</table>

<form method="POST" action="/transaction/checkout">
  @csrf
  <div class="col text-center">
     <button type="submit" class="btn btn-primary">
    Checkout
    </button>
  </div>
</form>
@endsection