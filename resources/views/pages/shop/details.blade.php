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
          <div class="slick-slider dots-inner-center"
            data-slick-options='{"slidesToShow": 1,"infinite":true,"autoplay":false,"dots":true,"arrows":false}'>
            <div class="box">
              <div class="d-flex flex-column justify-content-center bg-img-cover-center vh-100 custom-height-sm"
                style="background-image: url('images/product-page-10.jpg')">
              </div>
            </div>
            <div class="box">
              <div class="d-flex flex-column justify-content-center bg-img-cover-center vh-100 custom-height-sm"
                style="background-image: url('images/product-page-11.jpg')">
              </div>
            </div>
            <div class="box">
              <div class="d-flex flex-column justify-content-center bg-img-cover-center vh-100 custom-height-sm"
                style="background-image: url('images/product-page-12.jpg')">
              </div>
            </div>
          </div>
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
                      <!-- <a href="#" class="down position-absolute pos-fixed-left-center pl-2 z-index-2"><i
                          class="far fa-minus"></i></a>
                      <input name="number" type="number" id="number"
                        class="form-control w-100 px-6 text-center input-quality bg-transparent text-primary" value="1"
                        required>
                      <a href="#" class="up position-absolute pos-fixed-right-center pr-2 z-index-2"><i
                          class="far fa-plus"></i>
                      </a> -->
                      <p class="font-weight-bold">{{$product->min_order}}</p>
                    </div>
                  </div>
                  <div class="col-sm-8 mb-6 w-100 px-2">
                    <button type="submit" class="btn btn-primary btn-block ">Send Inquery
                    </button>
                  </div>
                </div>
              </form>
              <div class="d-flex align-items-center flex-wrap">
                <!-- <a href="#" class="text-uppercase font-weight-bold letter-spacing-05 fs-14 mr-6">
                  <i class="fas fa-random fs-16"></i>
                  <span class="ml-1">Compare</span>
                </a> -->
                <a href="#" class="text-uppercase font-weight-bold letter-spacing-05 fs-14">
                  <i class="far fa-heart fs-16"></i>
                  <span class="ml-1">Add to favourite</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php  endif; ?>
  <!-- <section class="py-11 py-lg-13">
    <div class="container">
      <div class="collapse-tabs">
        <ul class="nav nav-pills mb-3 justify-content-center d-md-flex d-none" id="pills-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active show fs-lg-32 fs-24 font-weight-600 p-0 mr-md-10 mr-4" id="pills-description-tab"
              data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description"
              aria-selected="false">Description</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-lg-32 fs-24 font-weight-600 p-0 mr-md-10 mr-4" id="pills-infomation-tab"
              data-toggle="pill" href="#pills-infomation" role="tab" aria-controls="pills-infomation"
              aria-selected="false">Infomation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-lg-32 fs-24 font-weight-600 p-0" id="pills-reviews-tab" data-toggle="pill"
              href="#pills-reviews" role="tab" aria-controls="pills-reviews" aria-selected="true">Reviews (3)</a>
          </li>
        </ul>
        <div class="tab-content bg-white-md shadow-none py-md-5 p-0">
          <div id="collapse-tabs-accordion-01">
            <div class="tab-pane tab-pane-parent fade show active" id="pills-description" role="tabpanel">
              <div class="card border-0 bg-transparent">
                <div class="card-header border-0 d-block d-md-none bg-transparent px-0 py-1" id="headingDetails-01">
                  <h5 class="mb-0">
                    <button class="btn lh-2 fs-18 py-1 px-6 shadow-none w-100 collapse-parent border text-primary"
                      data-toggle="false" data-target="#description-collapse-01" aria-expanded="true"
                      aria-controls="description-collapse-01">
                      Description
                    </button>
                  </h5>
                </div>
                <div id="description-collapse-01" class="collapsible collapse show" aria-labelledby="headingDetails-01"
                  data-parent="#collapse-tabs-accordion-01" style="">
                  <div id="accordion-style-01" class="accordion accordion-01 border-md-0 border p-md-0 p-6">
                    <div class="text-center pt-md-7">
                      <img src="images/description-product.jpg" alt="Description Product">
                    </div>
                    <p class="mt-6 mt-md-10 mxw-830 mx-auto mb-0">Perfect for Equestrian homes or every horse
                      lover.
                      Designer premium signature aluminum alloy all Arthur Court is
                      compliance with FDA regulations.
                      Aluminum Serveware can be chilled in the freezer or refrigerator and
                      warmed in the oven to 350. Wash by hand with mild dish soap and dry
                      immediately – do not put in the dishwasher.
                      Comes in Gift Box perfect for Equestrian home or Horse lover in your
                      life.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane tab-pane-parent fade" id="pills-infomation" role="tabpanel">
              <div class="card border-0 bg-transparent">
                <div class="card-header border-0 d-block d-md-none bg-transparent px-0 py-1" id="headinginfomation-01">
                  <h5 class="mb-0">
                    <button
                      class="btn lh-2 fs-18 py-1 px-6 shadow-none w-100 collapse-parent border collapsed text-primary"
                      data-toggle="collapse" data-target="#infomation-collapse-01" aria-expanded="false"
                      aria-controls="infomation-collapse-01">
                      Infomation
                    </button>
                  </h5>
                </div>
                <div id="infomation-collapse-01" class="collapsible collapse" aria-labelledby="headinginfomation-01"
                  data-parent="#collapse-tabs-accordion-01" style="">
                  <div id="accordion-style-01-2" class="accordion accordion-01 border-md-0 border p-md-0 p-6 ">
                    <div class="mxw-830 mx-auto pt-md-4">
                      <div class="table-responsive mb-md-7">
                        <table class="table table-border-top-0 mb-0">
                          <tbody>
                            <tr>
                              <td class="pl-0">Material</td>
                              <td class="text-right pr-0">Steel, Wood, Marble</td>
                            </tr>
                            <tr>
                              <td class="pl-0">Dimensions</td>
                              <td class="text-right pr-0">55.1"W X 14.6"D X 23.6"H</td>
                            </tr>
                            <tr>
                              <td class="pl-0">Weight</td>
                              <td class="text-right pr-0">Weight 23 lbs</td>
                            </tr>
                            <tr>
                              <td class="pl-0">Origin</td>
                              <td class="text-right pr-0">Denmark</td>
                            </tr>
                            <tr>
                              <td class="pl-0">Brand</td>
                              <td class="text-right pr-0">FLOYD</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="row">
                        <div class="col-sm-3 col-md-2 mb-6 mb-sm-0">
                          <img class="border" src="images/product-page-09.jpg" alt="Image Product">
                        </div>
                        <div class="col-sm-9 col-md-10">
                          Perfect for Equestrian homes or every horse lover. Designer premium
                          signature aluminum alloy all Arthur Court is compliance with FDA
                          regulations. Aluminum Serveware can be chilled in the freezer or
                          refrigerator and warmed in the oven to 350. Wash by hand with mild dish
                          soap and dry immediately – do not put in the dishwasher. Comes in Gift
                          Box perfect for Equestrian home or Horse lover in your life.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane tab-pane-parent fade" id="pills-reviews" role="tabpanel">
              <div class="card border-0 bg-transparent">
                <div class="card-header border-0 d-block d-md-none bg-transparent px-0 py-1" id="headingreviews-01">
                  <h5 class="mb-0">
                    <button
                      class="btn lh-2 fs-18 py-1 px-6 shadow-none w-100 collapse-parent border collapsed text-primary"
                      data-toggle="collapse" data-target="#reviews-collapse-01" aria-expanded="false"
                      aria-controls="reviews-collapse-01">
                      Reviews (3)
                    </button>
                  </h5>
                </div>
                <div id="reviews-collapse-01" class="collapsible collapse" aria-labelledby="headingreviews-01"
                  data-parent="#collapse-tabs-accordion-01" style="">
                  <div id="accordion-style-01-3" class="accordion accordion-01 border-md-0 border p-md-0 p-6">
                    <div class="comment-product mxw-830 mx-auto pt-md-4">
                      <ul class="list-inline mb-3 d-flex justify-content-center rating-result">
                        <li class="list-inline-item fs-18 text-primary"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item fs-18 text-primary"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item fs-18 text-primary"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item fs-18 text-primary"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item fs-18 text-primary"><i class="fas fa-star"></i></li>
                      </ul>
                      <p class="text-center mb-9 fs-15 text-primary lh-1"><span
                          class="d-inline-block border-right pr-1 mr-1">5.0</span>Base on 3
                        Reviews</p>
                      <div class="media border-bottom pb-6 mb-6 ">
                        <div class="w-70px d-block mr-6">
                          <img src="images/tes_01.png" alt="Dean. D">
                        </div>
                        <div class="media-body">
                          <div class="row no-gutters mb-2 align-items-center rating-result">
                            <ul class="list-inline mb-0 mr-auto d-flex col-sm-6">
                              <li class="list-inline-item fs-12 text-primary"><i class="fas fa-star"></i></li>
                              <li class="list-inline-item fs-12 text-primary"><i class="fas fa-star"></i></li>
                              <li class="list-inline-item fs-12 text-primary"><i class="fas fa-star"></i></li>
                              <li class="list-inline-item fs-12 text-primary"><i class="fas fa-star"></i></li>
                              <li class="list-inline-item fs-12 text-primary"><i class="fas fa-star"></i></li>
                            </ul>
                            <div class="col-sm-6 text-sm-right"><span class="fs-12 text-primary">Nov 20, 2020</span>
                            </div>
                          </div>
                          <p class="text-gray-01 lh-175 mb-2">It has a really nice fit however it loses many fluffs and
                            is kind of see-through because the fabric is quite wid-meshed. Nevertheless it's a really
                            good and comfy staple that goes with every kind.</p>
                          <span class="font-weight-600 text-primary d-block">Dean. D</span>
                        </div>
                      </div>
                      <div class="media border-bottom pb-6 mb-6 ">
                        <div class="w-70px d-block mr-6">
                          <img src="images/tes_02.png" alt="Dean. D">
                        </div>
                        <div class="media-body">
                          <div class="row no-gutters mb-2 align-items-center rating-result">
                            <ul class="list-inline mb-0 mr-auto d-flex col-sm-6">
                              <li class="list-inline-item fs-12 text-primary"><i class="fas fa-star"></i></li>
                              <li class="list-inline-item fs-12 text-primary"><i class="fas fa-star"></i></li>
                              <li class="list-inline-item fs-12 text-primary"><i class="fas fa-star"></i></li>
                              <li class="list-inline-item fs-12 text-primary"><i class="fas fa-star"></i></li>
                              <li class="list-inline-item fs-12 text-primary"><i class="fas fa-star"></i></li>
                            </ul>
                            <div class="col-sm-6 text-sm-right"><span class="fs-12 text-primary">Nov 20, 2020</span>
                            </div>
                          </div>
                          <p class="text-gray-01 lh-175 mb-2">It has a really nice fit however it loses many fluffs and
                            is kind of see-through because the fabric is quite wid-meshed. Nevertheless it's a really
                            good and comfy staple that goes with every kind.</p>
                          <span class="font-weight-600 text-primary d-block">Dean. D</span>
                        </div>
                      </div>
                      <div class="media ">
                        <div class="w-70px d-block mr-6">
                          <img src="images/tes_03.png" alt="Dean. D">
                        </div>
                        <div class="media-body">
                          <div class="row no-gutters mb-2 align-items-center rating-result">
                            <ul class="list-inline mb-0 mr-auto d-flex col-sm-6">
                              <li class="list-inline-item fs-12 text-primary"><i class="fas fa-star"></i></li>
                              <li class="list-inline-item fs-12 text-primary"><i class="fas fa-star"></i></li>
                              <li class="list-inline-item fs-12 text-primary"><i class="fas fa-star"></i></li>
                              <li class="list-inline-item fs-12 text-primary"><i class="fas fa-star"></i></li>
                              <li class="list-inline-item fs-12 text-primary"><i class="fas fa-star"></i></li>
                            </ul>
                            <div class="col-sm-6 text-sm-right"><span class="fs-12 text-primary">Nov 20, 2020</span>
                            </div>
                          </div>
                          <p class="text-gray-01 lh-175 mb-2">It has a really nice fit however it loses many fluffs and
                            is kind of see-through because the fabric is quite wid-meshed. Nevertheless it's a really
                            good and comfy staple that goes with every kind.</p>
                          <span class="font-weight-600 text-primary d-block">Dean. D</span>
                        </div>
                      </div>
                      <div class="text-center mt-6 mt-md-9">
                        <a href="#" class="btn btn-outline-primary write-review">write a review</a>
                      </div>
                      <div class="card border-0 mt-9 form-review hide ">
                        <div class="card-body p-0">
                          <h3 class="fs-40 text-center mb-9">Write A Review</h3>
                          <form>
                            <div class="d-flex flex-wrap">
                              <p class="text-primary font-weight-bold mb-0 mr-2 mb-2">Your
                                Rating</p>
                              <div class="form-group mb-6 d-flex justify-content-start">
                                <div class="rate-input">
                                  <input type="radio" id="star5" name="rate" value="5">
                                  <label for="star5" title="text" class="mb-0 mr-1 lh-1">
                                    <i class="fal fa-star"></i>
                                  </label>
                                  <input type="radio" id="star4" name="rate" value="4">
                                  <label for="star4" title="text" class="mb-0 mr-1 lh-1">
                                    <i class="fal fa-star"></i>
                                  </label>
                                  <input type="radio" id="star3" name="rate" value="3">
                                  <label for="star3" title="text" class="mb-0 mr-1 lh-1">
                                    <i class="fal fa-star"></i>
                                  </label>
                                  <input type="radio" id="star2" name="rate" value="2">
                                  <label for="star2" title="text" class="mb-0 mr-1 lh-1">
                                    <i class="fal fa-star"></i>
                                  </label>
                                  <input type="radio" id="star1" name="rate" value="1">
                                  <label for="star1" title="text" class="mb-0 mr-1 lh-1">
                                    <i class="fal fa-star"></i>
                                  </label>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-6">
                                <div class="form-group mb-6">
                                  <input placeholder="Your Name*" class="form-control" type="text" name="name">
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group mb-6">
                                  <input type="email" placeholder="Your Email*" name="email" class="form-control">
                                </div>
                              </div>
                            </div>
                            <div class="form-group mb-8">
                              <textarea class="form-control" placeholder="Your Review" name="message"
                                rows="5"></textarea>
                            </div>
                            <div class="text-center">
                              <button type="submit" class="btn btn-primary">submit now
                              </button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <section class="pb-11 pb-lg-15">
    <div class="container container-xxl">
      <h2 class="fs-md-40 fs-30 mb-9 text-center">May You Like This</h2>
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
                <p class="mt-auto text-primary mb-0 font-weight-500">
                  {{ $rp->price_range }}
                </p>
              </div>
              <div class="ml-auto d-flex flex-column">
                <div class="my-auto content-change-vertical">
                  <a href="#" data-toggle="tooltip" data-placement="left" title="Add to card"
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
        <?php endforeach; endif; ?>
      </div>
    </div>
  </section>
</main>
@endsection