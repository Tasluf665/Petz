@extends('master')
@section('content')
<div class="container">
   <div class="row">
       <div class="col-sm-6">
           <img class="detail-img" src="{{ $product['gallery']}}">

       </div>
       <div class="col-sm-6">
           <a href="/">Go back</a>
           <h2>{{ $product['name'] }}</h2>
           <h3>price : {{ $product['price'] }}$</h3>
           <h4>Details : {{ $product['description'] }}</h4>
           <h5>category : {{ $product['category'] }}</h5>
           <br><br>
           <button class="btn btn-primary">Add to Cart</button>
           <br><br>
           <button class="btn btn-success">Buy Now</button>
           <br><br>
       </div>
   </div>

</div>
@endsection
