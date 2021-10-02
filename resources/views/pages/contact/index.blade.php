@extends('layouts.inner')
@section('page-title', 'Contact Us')
@section('content')
<main id="content">
  <section class="pt-10 pb-8 pb-md-10">
    <div class="container">
      <h2 class="fs-sm-40 mb-10 text-center">Contact Us</h2>
      <div class="row">
        <div class="col-sm-6 col-md-3 mb-6 mb-md-0">
          <div class="text-center px-5">
            <p class="font-weight-bold text-primary mb-2">Address</p>
            <p class="mb-2">Send us a text & an ambassador will respond when available.</p>
            <p class="font-weight-500 text-primary mb-0">1-814-251-9966</p>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 mb-6 mb-md-0">
          <div class="text-center px-5">
            <p class="font-weight-bold text-primary mb-2">Address</p>
            <p class="mb-2">461 Valencia Street San Francisco, CA 94103</p>
            <a href="#" class="text-decoration-underline lh-12">Get Direction</a>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 mb-6 mb-md-0">
          <div class="text-center px-5">
            <p class="font-weight-bold text-primary mb-2">We're Open</p>
            <p class="mb-0">Our store has re-opened for shopping, exchanges
              Every day 11am to 7pm</p>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 mb-6 mb-md-0">
          <div class="text-center px-5">
            <p class="font-weight-bold text-primary mb-5">Social Media</p>
            <ul class="list-inline d-flex align-items-center justify-content-center mb-0">
              <li class="list-inline-item mr-4"><a href="#" class="fs-20 lh-1"><i class="fab fa-pinterest-p"></i></a>
              </li>
              <li class="list-inline-item mr-4"><a href="#" class="fs-20 lh-1"><i class="fab fa-facebook-f"></i></a>
              </li>
              <li class="list-inline-item mr-4"><a href="#" class="fs-20 lh-1"><i class="fab fa-instagram"></i></a>
              </li>
              <li class="list-inline-item"><a href="#" class="fs-20 lh-1"><i class="fab fa-twitter"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="pb-11 pb-lg-15">
    <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto">
          <h2 class="fs-24 mb-2">
            We would love to hear from you.
          </h2>
          <p class="mb-7">If you’ve got great products your making or looking to work with us then drop us a
            line.</p>
          <form>
            <div class="row mb-6">
              <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="Your Name*" required>
              </div>
              <div class="col-sm-6">
                <input type="email" class="form-control" placeholder="Your Email*" required>
              </div>
            </div>
            <div class="form-group mb-4">
              <textarea class="form-control" rows="6">Comment</textarea>
            </div>
            <div class="custom-control custom-checkbox mb-6">
              <input type="checkbox" class="custom-control-input" id="customCheck1">
              <label class="custom-control-label fs-15" for="customCheck1"> Save my name, email, and website
                in this
                browser for the next time I comment.</label>
            </div>
            <button type="submit" class="btn btn-primary text-uppercase letter-spacing-05">submit now</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <section class="pb-10">
    <div class="container container-xxl">
      <div id="map" class="mapbox-gl map-point-animate" style="height: 535px"
        data-mapbox-access-token="pk.eyJ1IjoiZHVvbmdsaCIsImEiOiJjanJnNHQ4czExMzhyNDVwdWo5bW13ZmtnIn0.f1bmXQsS6o4bzFFJc8RCcQ"
        data-mapbox-options='{"center":[-106.53671888774004, 35.12362056187368],"setLngLat":[-106.53671888774004, 35.12362056187368],"zoom":5}'
        data-mapbox-marker='[{"position":[-106.53671888774004, 35.12362056187368],"className":"marker","backgroundImage":"images/marker-01.png","backgroundRepeat":"no-repeat","width":"70px","height":"70px"}]'>
      </div>
    </div>
  </section>
</main>
@endsection