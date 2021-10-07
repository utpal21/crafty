@extends('layouts.inner')
@section('page-title', 'About Us')
@section('content')
<main id="content">
  @if(!empty($about))
  <section class="d-flex flex-column bg-img-cover-center vh-100 custom-height-sm pt-xxl-13"
    style="background-image: url('{{ asset('/uploads/' . $about->image) }}')">
    <div class="d-flex flex-column h-100 align-items-center justify-content-center justify-content-xxl-start pt-xxl-13">
      <div class="container">
        <p class="text-center text-white fs-20 font-weight-bold mb-4">CraftAnt</p>
        <h1 class="fs-60 fs-lg-90 lh-1 text-center text-white">{{$about->title}}</h1>
      </div>
    </div>
  </section>
  <section class="pt-13">
    <div class="container">
      <div class="mxw-830 mx-auto">
        <h2 class="fs-30 fs-md-40 lh-15 mb-7 text-center">Our Mission</h2>
        <p class="mb-10">{{$about->mission}}</p>
      </div>
    </div>
  </section>

  <section class="py-10 bg-accent">
    <div class="container">
      <h2 class="fs-30 fs-md-40 mb-5 text-center">Our Vision</h2>
      <div class="row">
        <div class="col-md-12 mb-12 mb-md-0">
          <div class="card bg-transparent border-0 align-items-center">
            <div class="card-body px-0 pt-6 text-center">
              <p class="cart-text mb-0">{{$about->vision}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endif
  <section class="py-11 py-lg-15">
    <div class="container">
      <h2 class="text-center fs-30 fs-md-40 mb-8">Our Members</h2>
      <div class="slick-slider custom-arrow-1"
        data-slick-options='{"slidesToShow": 5,"infinite":true,"autoplay":true,"dots":false,"arrows":true,"responsive":[{"breakpoint": 992,"settings": {"slidesToShow":4,"dots":true,"arrows":false}},{"breakpoint": 768,"settings": {"slidesToShow": 3,"dots":true,"arrows":false}},{"breakpoint": 576,"settings": {"slidesToShow": 2,"dots":true,"arrows":false}}]}'>
        @if(!empty($members))
        @foreach($members as $member)
        <div class="box">
          <a href="#" class="card border-0 align-items-center">
            <div class="w-130 rounded-circle overflow-hidden card-img">
              <img src="{{ asset('/uploads/' . $member->image) }}" alt="{{ $member->name }}">
            </div>
            <div class="card-body px-0 pt-3 pb-0">
              <p class="card-title text-primary fs-15 font-weight-bold mb-0">{{ $member->name }}</p>
            </div>
          </a>
        </div>
        @endforeach
        @endif

      </div>
    </div>
  </section>

</main>
@endsection