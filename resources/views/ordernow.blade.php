@extends('master')
@section('content')
<div class="custom-product d-flex flex-row justify-content-center align-items-center">
  <div class="col-sm-10" style="max-width: 50%;">
    <table class="table caption-top">
      <tbody>
        <tr>
          <td>Amount</td>
          <td>${{ $total }}</td>
        </tr>
        <tr>
          <td>Tax</td>
          <td>$ 0</td>
        </tr>
        <tr>
          <td>Delivery</td>
          <td>$ 10</td>
        </tr>
        <tr class="table-dark">
          <td>Total Amount</td>
          <td>{{ $total+10 }}</td>
        </tr>
      </tbody>
    </table>
    <script>
      function checkAddress() {
        let address = document.forms["myForm"]["address"].value;
        if (address == "") {
          alert("Address must be filled out");
          return false;
        }
      }
    </script>

    <div>
      <form name="myForm" action="/orderplace" method="POST" onsubmit="return checkAddress()">
        @csrf
        <div class="form-group" style="margin-top: 5%; margin-bottom: 5%">
          <textarea name="address" placeholder="Enter your address" class="form-control"></textarea>
        </div>

        <div class="form-group">
          <label for="pwd">Payment Method</label><br><br>
          <div class="form-check">
            <input class="form-check-input" type="radio" value="cash" name="payment" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
              Online payment
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" value="cash" name="payment" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
              EMI payment
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" value="cash" name="payment" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
              Payment on Delivery
            </label>
          </div>
        </div>

        <div class="d-flex flex-row justify-content-center align-items-center">
          <button type="submit" class="btn btn-dark" style="margin-top: 4%;">Order Now</button>
        </div>
      </form>
    </div>

  </div>
</div>
@endsection