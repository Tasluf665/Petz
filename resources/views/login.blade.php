@extends('master')
@section('content')
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_nobbjtyh.json" background="transparent" speed="1" style="width: auto; height: auto;" loop autoplay></lottie-player>
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form action="login" method="POST">
          @csrf
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" name="email" id="exampleInputEmail1" class="form-control form-control-lg" />
            <label class="form-label mt-2 ms-1" for="form1Example13">Email address</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" name="password" id="exampleInputPassword1" class="form-control form-control-lg" />
            <label class="form-label mt-2 ms-1" for="form1Example23">Password</label>
          </div>

          <!-- Submit button -->
          <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-dark">Sign in</button>
          </div>

        </form>
      </div>
    </div>
  </div>
</section>

@endsection