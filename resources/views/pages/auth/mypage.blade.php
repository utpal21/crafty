@extends('layouts.inner')
@section('page-title', 'My Page')
@section('content')
<style>
.bootstrap-custome-pagination nav ul {
  -ms-flex-pack: center !important;
  justify-content: center !important;
}
</style>
<main id="content">
  <section class="py-8 page-title border-top mt-1">
    <div class="container">
      <h1 class="fs-40 mb-1 text-capitalize text-center">Favourite Products</h1>
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
  <section>
    <div class="container container-xxl">
      <div class="row mb-7 overflow-hidden">
        @if (!empty($products))
        @foreach($products as $p)
        <div class="col-sm-6 col-lg-3 mb-6" data-animate="fadeInUp">
          <div class="card border-0 hover-change-content product">
            <div style="background-image: url('{{ asset('/uploads/' . $p->image) }}')"
              class="card-img ratio bg-img-cover-center ratio-1-1">
            </div>
            <div class="card-img-overlay d-flex py-4 py-sm-5 pl-6 pr-4">
              <div class="d-flex flex-column">
                <a href="{{ url('/product/details').'/'.Crypt::encrypt($p->id) }}"
                  class="text-uppercase text-muted letter-spacing-05 fs-12 font-weight-500">{{ $p->name }}</a>

              </div>
              <div class="ml-auto d-flex flex-column">
                <div class="my-auto content-change-vertical">
                  <a href="#" data-toggle="modal" data-target="#exampleModalCenter" data-toggle="tooltip"
                    data-placement="left" title="Add to card"
                    class="add-to-cart d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                    <i class="far fa-shopping-basket"></i>
                  </a>
                  <a href="{{ url('user/unfavourite/'.$p->id) }}" data-toggle="tooltip" data-placement="left"
                    title="Make Unfavourite"
                    class="add-to-wishlist d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                    <i class="far fa-trash-alt"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        @endif
      </div>
      <div class="bootstrap-custome-pagination pb-11 pb-lg-14 overflow-hidden">

      </div>
    </div>
  </section>
</main>
@endsection