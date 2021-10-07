@extends('layouts.inner')
@section('page-title', 'All Product')
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
      <h1 class="fs-40 mb-1 text-capitalize text-center">Shop All</h1>
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

  </section>
  <section>
    <div class="container container-xxl">
      <div class="d-flex mb-7">
        <div class="d-flex align-items-center text-primary font-weight-500" data-canvas="true"
          data-canvas-options='{"container":".filter-canvas"}'>
          <button type="button" class="border-0 pl-0 pr-2 fs-12 bg-transparent">
            <i class="far fa-align-left"></i>
          </button>
          Filter
        </div>
      </div>
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
                  @if(Auth::user())
                  <form action="{{route('add.fav')}}" id="shopfavform{{$p->id}}" method="post">
                    @csrf
                    <input name="user_id" type="hidden" value="{{Auth::user()->id}}" />
                    <input name="product_id" type="hidden" value="{{$p->id}}" />
                  </form>
                  <a data-pid="{{$p->id}}" href="#" data-toggle="tooltip" data-placement="left" title="Add to favourite"
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
        @endforeach
        @endif
      </div>
      <div class="bootstrap-custome-pagination pb-11 pb-lg-14 overflow-hidden">
        {{ $products->links() }}
      </div>
    </div>
  </section>
</main>

<div class="canvas-sidebar filter-canvas">
  <div class="canvas-overlay">
  </div>
  <form class="h-100">
    <div class="card border-0 pt-5 pb-8 pb-sm-13 h-100">
      <div class="px-6 pl-sm-8 text-right">
        <span class="canvas-close d-inline-block text-right fs-24 mb-1 ml-auto lh-1 text-primary"><i
            class="fal fa-times"></i></span>
      </div>
      <div class="card-header bg-transparent py-0 px-6 px-sm-8 border-bottom">
        <h3 class="fs-30 mb-5">
          Filter by
        </h3>
        <p class="fs-15 text-primary mb-3">12 Products in “ Shop All ”</p>
      </div>
      <div class="card-body px-6 px-sm-8 pt-7 overflow-y-auto">
        <div class="card border-0 mb-7">
          <div class="card-header bg-transparent border-0 p-0">
            <h3 class="card-title fs-20 mb-0">
              Categories
            </h3>
          </div>
          <div class="card-body px-0 pt-4 pb-0">
            <ul class="list-unstyled mb-0">
              <li class="mb-1">
                <a href="#"
                  class="text-secondary hover-primary border-bottom border-white border-hover-primary d-inline-block lh-12">Sweaters</a>
              </li>
              <li class="mb-1">
                <a href="#"
                  class="text-secondary hover-primary border-bottom border-white border-hover-primary d-inline-block lh-12">Beauty</a>
              </li>
              <li class="mb-1">
                <a href="#"
                  class="text-secondary hover-primary border-bottom border-white border-hover-primary d-inline-block lh-12">Fashion</a>
              </li>
              <li class="mb-1">
                <a href="#"
                  class="text-secondary hover-primary border-bottom border-white border-hover-primary d-inline-block lh-12">Shopping</a>
              </li>
              <li class="mb-1">
                <a href="#"
                  class="text-secondary hover-primary border-bottom border-white border-hover-primary d-inline-block lh-12">Trends</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="card border-0 mb-7">
          <div class="card-header bg-transparent border-0 p-0">
            <h3 class="card-title fs-20 mb-0">
              Price
            </h3>
          </div>
          <div class="card-body px-0 pt-4 pb-0">
            <ul class="list-unstyled mb-0">
              <li class="mb-1">
                <a href="#"
                  class="text-secondary hover-primary border-bottom border-white border-hover-primary d-inline-block lh-12">All
                </a>
              </li>
              <li class="mb-1">
                <a href="#"
                  class="text-secondary hover-primary border-bottom border-white border-hover-primary d-inline-block lh-12">$10
                  - $100</a>
              </li>
              <li class="mb-1">
                <a href="#"
                  class="text-secondary hover-primary border-bottom border-white border-hover-primary d-inline-block lh-12">$100
                  - $200</a>
              </li>
              <li class="mb-1">
                <a href="#"
                  class="text-secondary hover-primary border-bottom border-white border-hover-primary d-inline-block lh-12">$200
                  - $300</a>
              </li>
              <li class="mb-1">
                <a href="#"
                  class="text-secondary hover-primary border-bottom border-white border-hover-primary d-inline-block lh-12">$300
                  - $400</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="card border-0 mb-7">
          <div class="card-header bg-transparent border-0 p-0">
            <h3 class="card-title fs-20 mb-0">
              Material
            </h3>
          </div>
          <div class="card-body px-0 pt-4 pb-0">
            <ul class="list-unstyled mb-0">
              <li class="mb-1">
                <a href="#"
                  class="text-secondary hover-primary border-bottom border-white border-hover-primary d-inline-block lh-12">
                  Laminate
                </a>
              </li>
              <li class="mb-1">
                <a href="#"
                  class="text-secondary hover-primary border-bottom border-white border-hover-primary d-inline-block lh-12">Acrylic</a>
              </li>
              <li class="mb-1">
                <a href="#"
                  class="text-secondary hover-primary border-bottom border-white border-hover-primary d-inline-block lh-12">Aluminium</a>
              </li>
              <li class="mb-1">
                <a href="#"
                  class="text-secondary hover-primary border-bottom border-white border-hover-primary d-inline-block lh-12">Cotton</a>
              </li>
              <li class="mb-1">
                <a href="#"
                  class="text-secondary hover-primary border-bottom border-white border-hover-primary d-inline-block lh-12">Leather</a>
              </li>
              <li class="mb-1">
                <a href="#"
                  class="text-secondary hover-primary border-bottom border-white border-hover-primary d-inline-block lh-12">Metal</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="card border-0 mb-7 widget-color">
          <div class="card-header bg-transparent border-0 p-0">
            <h3 class="card-title fs-20 mb-0">
              Colors
            </h3>
          </div>
          <div class="card-body px-0 pt-4 pb-0">
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a href="#" class="d-block item" style="background-color: #d0a272;"></a>
              </li>
              <li class="list-inline-item"><a href="#" class="d-block item" style="background-color: #68412d;"></a>
              </li>
              <li class="list-inline-item"><a href="#" class="d-block item" style="background-color: #000000;"></a>
              </li>
              <li class="list-inline-item"><a href="#" class="d-block item" style="background-color: #aa5959;"></a>
              </li>
              <li class="list-inline-item"><a href="#" class="d-block item" style="background-color: #8db4d2;"></a>
              </li>
              <li class="list-inline-item"><a href="#" class="d-block item" style="background-color: #c2c3a0;"></a>
              </li>
              <li class="list-inline-item"><a href="#" class="d-block item" style="background-color: #c7857d;"></a>
              </li>
              <li class="list-inline-item"><a href="#" class="d-block item" style="background-color: #e3e1e7;"></a>
              </li>
              <li class="list-inline-item"><a href="#" class="d-block item" style="background-color: #b490b0;"></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="card border-0 mb-7">
          <div class="card-header bg-transparent border-0 p-0">
            <h3 class="card-title fs-20 mb-0">
              Tags
            </h3>
          </div>
          <div class="card-body px-0 pt-3 pb-0">
            <ul class="list-inline mb-0">
              <li class="list-inline-item mr-2 py-1">
                <a href="#"
                  class="text-secondary hover-primary border-bottom border-white border-hover-primary d-inline-block lh-12">Vintage</a>
              </li>
              <li class="list-inline-item mr-2 py-1">
                <a href="#"
                  class="text-secondary hover-primary border-bottom border-white border-hover-primary d-inline-block lh-12">Awesome</a>
              </li>
              <li class="list-inline-item mr-2 py-1">
                <a href="#"
                  class="text-secondary hover-primary border-bottom border-white border-hover-primary d-inline-block lh-12">Summer</a>
              </li>
              <li class="list-inline-item mr-2 py-1">
                <a href="#"
                  class="text-secondary hover-primary border-bottom border-white border-hover-primary d-inline-block lh-12">Beachwear</a>
              </li>
              <li class="list-inline-item mr-2 py-1">
                <a href="#"
                  class="text-secondary hover-primary border-bottom border-white border-hover-primary d-inline-block lh-12">Sunglasses</a>
              </li>
              <li class="list-inline-item mr-2 py-1">
                <a href="#"
                  class="text-secondary hover-primary border-bottom border-white border-hover-primary d-inline-block lh-12">Winter</a>
              </li>
              <li class="list-inline-item mr-2 py-1">
                <a href="#"
                  class="text-secondary hover-primary border-bottom border-white border-hover-primary d-inline-block lh-12">Shorts</a>
              </li>
              <li class="list-inline-item mr-2 py-1">
                <a href="#"
                  class="text-secondary hover-primary border-bottom border-white border-hover-primary d-inline-block lh-12">Cool</a>
              </li>
              <li class="list-inline-item mr-2 py-1">
                <a href="#"
                  class="text-secondary hover-primary border-bottom border-white border-hover-primary d-inline-block lh-12">Nice</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card-footer border-0 bg-transparent pt-5 px-8">
        <div class="row no-gutter mx-n2">
          <div class="col-sm-6 px-2 mb-2 mb-sm-0">
            <a href="#" class="btn btn-primary btn-block letter-spacing-05 text-uppercase">apply</a>
          </div>
          <div class="col-sm-6 px-2">
            <a href="#" class="btn btn-outline-primary btn-block letter-spacing-05 text-uppercase">clear</a>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
@endsection