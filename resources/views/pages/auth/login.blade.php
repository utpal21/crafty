@extends('layouts.inner')
@section('page-title', 'Contact Us')
@section('content')
<main id="content">
  <section class="pb-11 pb-lg-15 pt-10">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-lg-7 mx-auto">
          <div class="card border-0">
            <div class="card-body p-0">
              <h2 class="card-title fs-40 mb-2">LOGIN</h2>
              <p class="mb-6">Don’t have an account yet? <a href="{{ url('/auth/register') }}"
                  class="d-inline-block fs-15 border-bottom border-2x lh-12 border-light-dark">Sign
                  up for free</a></p>
              <form method="POST" action="{{ route('user.login') }}">
                @csrf
                <div class="form-group mb-4">
                  <label for="exampleInputEmail1" class="sr-only">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                    placeholder="Email Address">
                  @if ($errors->has('email'))
                  <span class="text-danger">{{ $errors->first('email') }}</span>
                  @endif
                </div>
                <div class="form-group mb-3">
                  <label for="exampleInputPassword1" class="sr-only">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
                    name="password">
                  @if ($errors->has('password'))
                  <span class="text-danger">{{ $errors->first('password') }}</span>
                  @endif
                </div>
                <button type="submit" class="btn btn-primary btn-block mb-3">Submit</button>
                <div class="custom-control custom-checkbox mb-7">
                  <input type="checkbox" class="custom-control-input" id="customCheck1" name="remember">
                  <label class="custom-control-label fs-15" for="customCheck1">Keep me signed in.</label>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
</main>
@endsection