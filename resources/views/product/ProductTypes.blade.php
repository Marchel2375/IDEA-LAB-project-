@extends('layouts.app')

@section('content')
    <h1 style="float: left;">Products list</h1>
    <form class="form-inline" style="float: right;">
        <!-- SEARCH BAR -->
        <input class="form-control mr-sm-2" placeholder="Search" name="search" value="">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>

        <table class="table table-striped table-warning" >
        <thead>
            <tr>
            <th class="font-weight-bold">Product Types</th>
            <th class="font-weight-bold">Image</th>
            </tr>
        </thead>
        <tbody>
            <!-- DISPLAY DATA FROM CONTROLLER -->
        
            @foreach($types as $type) 
            <tr>
                <td>{{$type->name}}</td>
                <td><img src="{{ asset($type->image) }}" alt="{{$type->image}}" class="img-fluid" style="width: 10vh; height: 10vh; object-fit: cover;"></td>
                <td>
                    <a href="{{url('/type/'.$type->id)}}" type="button" class="btn btn-primary btn-lg btn-block">View Products</a>
                    @if(Auth::check())
                        @if(Auth::user()->isadmin())
                        <a href="form/type/update/{{$type->id}}" type="button" class="btn btn-primary btn-lg btn-block">Update</a>
                        <br>
                        <form method="POST" action="/form/type/delete/store">
                            @csrf
                            <input type="hidden" name="id" value="{{$type->id}}"> 
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