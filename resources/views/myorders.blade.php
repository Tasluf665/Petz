@extends('master')
@section('content')
<div class="custom-product">
  <div class="col-lg-30 justify-content-center d-flex">
    <div class="trending-wrapper">
      <h4 class=" justify-content-center d-flex my-4">My orders</h4>

      @foreach ($orders as $item)
      <div class="card mb-3" style="max-width: 740px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{ $item->gallery }}" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body ms-4">
              <h5 class="card-title">{{ $item->name}}</h5>
              <p class="card-text mt-3">Your order is {{ $item->status}}</p>
              <p class="card-text">Product will be deliver in {{ $item->address}}</p>
              <p class="card-text d-flex" style="background-color: tomato;">
              <div class="d-flex flex-row justify-content-between align-items-center">
                <small class="text-muted">Status: {{ $item->payment_status}}</small>
                <small class="text-muted">{{ $item->payment_method}}</small>
              </div>

              </p>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>

</div>
@endsection