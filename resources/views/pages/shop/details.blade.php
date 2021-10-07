@extends('layouts.inner')
@section('page-title', 'Product Details')
@section('content')
<main id="content">
  <?php if(!empty($product)):    
  ?>
  <section class="vh-100 bg-color-5 position-relative gallery-product-page-02 overflow-hidden">
    <div class="container container-xxl">
      <div class="row align-items-center">
        <div class="col-lg-8">
          @if(!empty($product->images))
          <div class="slick-slider dots-inner-center"
            data-slick-options='{"slidesToShow": 1,"infinite":true,"autoplay":false,"dots":true,"arrows":false}'>
            @foreach($product->images as $k => $v)
            <div class="box">
              <div class="d-flex flex-column justify-content-center bg-img-cover-center vh-100 custom-height-sm"
                style="background-image: url('{{ asset('/uploads/' . $v) }}')">
              </div>
            </div>
            @endforeach
          </div>
          @else
          <div class="slick-slider dots-inner-center"
            data-slick-options='{"slidesToShow": 1,"infinite":true,"autoplay":false,"dots":false,"arrows":false}'>
            <div class="box">
              <div class="d-flex flex-column justify-content-center bg-img-cover-center vh-100 custom-height-sm"
                style="background-image: url('{{ asset('/uploads/' . $product->image) }}')">
              </div>
            </div>
          </div>
          @endif
        </div>
        <div class="col-lg-4 product-details">
          <div class="card border-0 mxw-435px mx-auto">
            <div class="card-body px-5 pt-5 pb-8">
              <p class="text-muted fs-12 font-weight-500 letter-spacing-05 text-uppercase">
                {{$category->name}}
              </p>
              <h2 class="fs-30 fs-lg-40 mb-5">{{$product->name}}</h2>
              <p class="fs-20 text-primary mb-5">{{$product->price_range}}</p>
              <p class="mb-6 d-none d-sm-block">{{$product->description}}</p>
              <form>
                <div class="row align-items-end no-gutters mx-n2">
                  <div class="col-sm-4 form-group px-2 mb-6">
                    <label class="text-primary fs-16 font-weight-bold mb-3" for="number">Min Order: </label>
                    <div class="input-group position-relative w-100">
                      <p class="font-weight-bold">{{$product->min_order}}</p>
                    </div>
                  </div>
                  <div class="col-sm-8 mb-6 w-100 px-2">
                    <button type="button" data-toggle="modal" data-target="#exampleModalCenter"
                      class="btn btn-primary btn-block ">Send
                      Inquery
                    </button>
                  </div>
                </div>
              </form>
              <div class="d-flex align-items-center flex-wrap">
                @if(Auth::user())
                <form action="{{route('add.fav')}}" id="shopfavform{{$product->id}}" method="post">
                  @csrf
                  <input name="user_id" type="hidden" value="{{Auth::user()->id}}" />
                  <input name="product_id" type="hidden" value="{{$product->id}}" />
                </form>
                <a data-pid="{{$product->id}}" href="#"
                  class="shopfav text-uppercase font-weight-bold letter-spacing-05 fs-14">
                  <i class="far fa-heart fs-16"></i>
                  <span class="ml-1">Add to favourite</span>
                </a>
                @endif
                @if(!Auth::user())
                <a href="{{ url('/auth/login') }}" class="text-uppercase font-weight-bold letter-spacing-05 fs-14">
                  <i class="far fa-heart fs-16"></i>
                  <span class="ml-1">Add to favourite</span>
                </a>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php  endif; ?>
  <section class="pb-11 pb-lg-15">
    <div class="container container-xxl">
      <h2 class="fs-md-40 fs-50 mb-9 mt-9 text-center">May You Like This</h2>
      <div class="slick-slider"
        data-slick-options='{"slidesToShow": 4, "autoplay":false,"dots":false,"arrows":false,"responsive":[{"breakpoint": 992,"settings": {"slidesToShow":3}},{"breakpoint": 768,"settings": {"slidesToShow": 2}},{"breakpoint": 576,"settings": {"slidesToShow": 1}}]}'>
        <?php if(!empty($relatedData)): 
           foreach($relatedData as $rp):      
          ?>
        <div class="box">
          <div class="card border-0 hover-change-content product">
            <div style="background-image: url('{{ asset('/uploads/' . $rp->image) }}')"
              class="card-img ratio bg-img-cover-center ratio-1-1">
            </div>
            <div class="card-img-overlay d-flex py-4 py-sm-5 pl-6 pr-4">
              <div class="d-flex flex-column">
                <a href="#" class="font-weight-bold mb-1 d-block lh-12"></a>
                <a href="{{ url('/product/details').'/'.Crypt::encrypt($rp->id) }}#"
                  class="text-uppercase text-muted letter-spacing-05 fs-12 font-weight-500">{{ $rp->name }}</a>

              </div>
              <div class="ml-auto d-flex flex-column">
                <div class="my-auto content-change-vertical">
                  <a href="#" data-toggle="modal" data-target="#exampleModalCenter" data-toggle="tooltip"
                    data-placement="left" title="Add to card"
                    class="add-to-cart d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                    <i class="far fa-shopping-basket"></i>
                  </a>
                  @if(Auth::user())
                  <form action="{{route('add.fav')}}" id="shopfavform{{$rp->id}}" method="post">
                    @csrf
                    <input name="user_id" type="hidden" value="{{Auth::user()->id}}" />
                    <input name="product_id" type="hidden" value="{{$rp->id}}" />
                  </form>
                  <a data-pid="{{$rp->id}}" href="#" data-toggle="tooltip" data-placement="left"
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
</main>
@endsection