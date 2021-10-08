@extends('layouts.basic')
@section('page-title', 'Home')
@section('content')
<main id="content">
  <section class="overflow-hidden">
    <div class="slick-slider"
      data-slick-options='{"slidesToShow": 1,"infinite":true,"autoplay":false,"dots":false,"arrows":false}'>

      <div class="box">
        <div
          class="d-flex flex-column justify-content-center justify-content-lg-start bg-img-cover-center vh-100 pt-lg-17 custom-height-sm"
          style="background-image: url('images/bg-home-07.jpg')">
          <div class="d-flex flex-column justify-content-center justify-content-lg-start h-100">
            <div class="container container-xxl">
              <p class="text-primary font-weight-bold fs-20 mb-4" data-animate="fadeInUp">New - In</p>
              <h1 class="mb-7 fs-40 fs-xxl-90 lh-1" data-animate="fadeInUp">Carabottino</h1>
            </div>
          </div>
        </div>
      </div>


    </div>
  </section>
  <div class="container">
    <div class="h-100 row align-items-center">
      @if(Session::has('success'))
      <div class="alert alert-success col">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{Session::get('success')}}
      </div>
      @endif
      @if(Session::has('fail'))
      <div class="alert alert-danger col">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{Session::get('fail')}}
      </div>
      @endif
    </div>
  </div>
  <section class="py-lg-12 py-11">
    <div class="container container-xxl">
      <div class="row mb-7 align-items-end">
        <div class="col-md-6">
          <h2 class="mb-0 fs-30 fs-md-40 mb-2">Latest Products</h2>
        </div>
        <div class="col-md-6 text-md-right ml-md-auto">
          <a href="{{ url('/shop') }}"
            class="fs-14 font-weight-bold border-bottom border-light-dark text-uppercase letter-spacing-05 d-inline-block border-hover-primary">
            all product</a>
        </div>
      </div>
      <div class="slick-slider custom-arrow-1"
        data-slick-options='{"slidesToShow": 3,"infinite":true,"autoplay":false,"dots":false,"arrows":true,"responsive":[{"breakpoint": 1200,"settings": {"slidesToShow":2,"arrows":false,"dots":true}},{"breakpoint": 576,"settings": {"slidesToShow": 1,"arrows":false,"dots":true}}]}'>
        <?php if(!empty($latestProducts)):           
         foreach($latestProducts as $lp):         
         ?>
        <div class="box" data-animate="fadeInUp">
          <div class="card border-0 hover-change-content product">
            <div style="background-image: url('{{ asset('/uploads/' . $lp->image) }}')"
              class="card-img ratio bg-img-cover-center ratio-1-1">
            </div>
            <div class="card-img-overlay d-flex py-4 py-sm-5 pl-6 pr-4">
              <div class="d-flex flex-column">
                <a href="{{ url('/product/details').'/'.Crypt::encrypt($lp->id) }}"
                  class="font-weight-bold mb-1 d-block lh-12">{{ $lp->name }}</a>
              </div>
              <div class="ml-auto d-flex flex-column">
                <div class="my-auto content-change-vertical">
                  <a data-toggle="modal" data-target="#exampleModalCenter" href="#" data-toggle="tooltip"
                    data-placement="left" title="Send Inquery"
                    class="add-to-cart d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                    <i class="far fa-shopping-basket"></i>
                  </a>
                  @if(Auth::user())
                  <form action="{{route('add.fav')}}" id="shopfavform{{$lp->id}}" method="post">
                    @csrf
                    <input name="user_id" type="hidden" value="{{Auth::user()->id}}" />
                    <input name="product_id" type="hidden" value="{{$lp->id}}" />
                  </form>
                  <a data-pid="{{$lp->id}}" href="#" data-toggle="tooltip" data-placement="left"
                    title="Add to favourite"
                    class="add-to-wishlist shopfav  d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                    <i class="far fa-heart"></i>
                  </a>
                  @endif
                  @if(!Auth::user())
                  <a href="{{ url('/auth/login') }}" data-toggle="tooltip" data-placement="left"
                    title="Add to favourite"
                    class="add-to-wishlist d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                    <i class="far fa-heart"></i>
                  </a>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; endif; ?>
      </div>
    </div>
  </section>
  <section class="pb-lg-12 pb-11">
    <div class="container container-xxl">
      <div class="row mb-7 align-items-end">
        <div class="col-md-6">
          <h2 class="mb-0 fs-30 fs-md-40 mb-2">Featured Products</h2>
        </div>
        <div class="col-md-6 text-md-right ml-md-auto">
          <a href="{{ url('/shop') }}"
            class="fs-14 font-weight-bold border-bottom border-light-dark text-uppercase letter-spacing-05 d-inline-block border-hover-primary">all
            product</a>
        </div>
      </div>
      <div class="slick-slider custom-arrow-1"
        data-slick-options='{"slidesToShow": 3,"infinite":true,"autoplay":false,"dots":false,"arrows":true,"responsive":[{"breakpoint": 1200,"settings": {"slidesToShow":2,"arrows":false,"dots":true}},{"breakpoint": 576,"settings": {"slidesToShow": 1,"arrows":false,"dots":true}}]}'>
        <?php if(!empty($preturedProducts)):           
         foreach($preturedProducts as $fp):         
         ?>
        <div class="box" data-animate="fadeInUp">
          <div class="card border-0 hover-change-content product">
            <div style="background-image: url('{{ asset('/uploads/' . $fp->image) }}')"
              class="card-img ratio bg-img-cover-center ratio-1-1">
            </div>
            <div class="card-img-overlay d-flex py-4 py-sm-5 pl-6 pr-4">
              <div class="d-flex flex-column">
                <a href="{{ url('/product/details').'/'.Crypt::encrypt($fp->id) }}"
                  class="font-weight-bold mb-1 d-block lh-12">{{ $fp->name }}</a>
              </div>
              <div class="ml-auto d-flex flex-column">
                <div class="my-auto content-change-vertical">
                  <a href="#" data-toggle="modal" data-target="#exampleModalCenter" data-toggle="tooltip"
                    data-placement="left" title="Add to card"
                    class="add-to-cart d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                    <i class="far fa-shopping-basket"></i>
                  </a>
                  @if(Auth::user())
                  <form action="{{route('add.fav')}}" id="shopfavform{{$fp->id}}" method="post">
                    @csrf
                    <input name="user_id" type="hidden" value="{{Auth::user()->id}}" />
                    <input name="product_id" type="hidden" value="{{$fp->id}}" />
                  </form>
                  <a data-pid="{{$fp->id}}" href="#" data-toggle="tooltip" data-placement="left"
                    title="Add to favourite"
                    class="add-to-wishlist shopfav  d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                    <i class="far fa-heart"></i>
                  </a>
                  @endif
                  @if(!Auth::user())
                  <a href="{{ url('/auth/login') }}" data-toggle="tooltip" data-placement="left"
                    title="Add to favourite"
                    class="add-to-wishlist d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                    <i class="far fa-heart"></i>
                  </a>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; endif; ?>
      </div>
    </div>
  </section>
  <section class="pb-11 pb-lg-15 border-bottom">
    <div class="container">
      <h2 class="mb-10 text-center fs-30 fs-md-40">Happy Clients</h2>
      <div class="slick-slider custom-arrow-1"
        data-slick-options='{"slidesToShow": 3,"infinite":true,"autoplay":false,"dots":false,"arrows":true,"responsive":[{"breakpoint": 1200,"settings": {"slidesToShow":2,"arrows":false,"dots":true}},{"breakpoint": 576,"settings": {"slidesToShow": 1,"arrows":false,"dots":true}}]}'>
        <?php if(!empty($clientSays)):           
         foreach($clientSays as $cs):         
         ?>
        <div class="box" data-animate="fadeInUp">
          <div class="card border-0">
            <div class="card-body px-3 py-0 text-center">
              <div class="mxw-84px mb-6 mx-auto">
                <img src="{{ asset('/uploads/' . $cs->image) }}" alt="{{ $cs->image }}">

              </div>
              <ul class="list-inline mb-4">
                <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
              </ul>
              <p class="card-text mb-4 font-weight-500">
                {{ $cs->description }}
              </p>
              <p class="card-text text-primary font-weight-bold mb-1 fs-15">{{ $cs->name }}</p>
              <p class="card-text text-muted fs-13 text-uppercase letter-spacing-05 font-weight-500">
                {{ $cs->designation }}
              </p>
            </div>
          </div>
        </div>
        <?php endforeach; endif; ?>
      </div>
    </div>
  </section>
</main>
@endsection