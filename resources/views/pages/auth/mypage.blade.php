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
  <section>
    <div class="container container-xxl">
      <div class="row mb-7 overflow-hidden">
        @if (!empty($wishlists))
        @foreach($wishlists as $p)
        <div class="col-sm-6 col-lg-3 mb-6" data-animate="fadeInUp">
          <div class="card border-0 hover-change-content product">
            <div style="background-image: url('{{ asset('/uploads/' . $p->image) }}')"
              class="card-img ratio bg-img-cover-center ratio-1-1">
            </div>
            <div class="card-img-overlay d-flex py-4 py-sm-5 pl-6 pr-4">
              <div class="d-flex flex-column">
                <!-- <a href="#" class="font-weight-bold mb-1 d-block lh-12">Bow Chair</a> -->
                <a href="{{ url('/product/details').'/'.Crypt::encrypt($p->id) }}"
                  class="text-uppercase text-muted letter-spacing-05 fs-12 font-weight-500">{{ $p->name }}</a>
                <p class="mt-auto text-primary mb-0 font-weight-500">
                  {{ $p->price_range }}
                </p>
              </div>
              <div class="ml-auto d-flex flex-column">
                <div class="my-auto content-change-vertical">
                  <a href="#" data-toggle="modal" data-target="#exampleModalCenter" data-toggle="tooltip"
                    data-placement="left" title="Add to card"
                    class="add-to-cart d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                    <i class="far fa-shopping-basket"></i>
                  </a>
                  <a href="#" data-toggle="tooltip" data-placement="left" title="Add to favourite"
                    class="add-to-wishlist d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                    <i class="far fa-heart"></i>
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
        {{ $wishlists->links() }}
      </div>
    </div>
  </section>
</main>
@endsection