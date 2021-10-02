    <footer class="pt-13 pb-4 footer bg-color-2">
      <div class="container container-xxl">
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-6 mb-lg-0">
            <h3 class="fs-14 mb-3 text-uppercase letter-spacing-05">menu</h3>
            <ul class="list-unstyled mb-0">
              <li class="py-0"><a href="#" class="text-gray hover-primary lh-2 font-weight-500">Seatting</a> </li>
              <li class="py-0"><a href="#" class="text-gray hover-primary lh-2 font-weight-500">Tables</a> </li>
              <li class="py-0"><a href="#" class="text-gray hover-primary lh-2 font-weight-500">Decoration</a> </li>
              <li class="py-0"><a href="#" class="text-gray hover-primary lh-2 font-weight-500">Gift Ideas</a> </li>
            </ul>
          </div>
          <div class="col-md-6 col-lg-3 mb-6 mb-lg-0">
            <h3 class="fs-14 mb-3 text-uppercase letter-spacing-05">about</h3>
            <ul class="list-unstyled mb-0">
              <li class="py-0"><a href="#" class="text-gray hover-primary lh-2 font-weight-500">Contact Us</a> </li>
              <li class="py-0"><a href="#" class="text-gray hover-primary lh-2 font-weight-500">Contributiors</a> </li>
              <li class="py-0"><a href="#" class="text-gray hover-primary lh-2 font-weight-500">Privacy</a> </li>
              <li class="py-0"><a href="#" class="text-gray hover-primary lh-2 font-weight-500">Sponsors</a> </li>
            </ul>
          </div>
          <div class="col-md-6 col-lg-3 mb-6 mb-lg-0">
            <h3 class="fs-14 mb-3 text-uppercase letter-spacing-05">follow us</h3>
            <ul class="list-unstyled mb-0">
              <li class="py-0"><a href="#" class="text-gray hover-primary lh-2 font-weight-500">Facebook</a> </li>
              <li class="py-0"><a href="#" class="text-gray hover-primary lh-2 font-weight-500">Instagram</a> </li>
              <li class="py-0"><a href="#" class="text-gray hover-primary lh-2 font-weight-500">Twitter</a> </li>
            </ul>
          </div>
          <div class="col-md-6 col-lg-3 mb-6 mb-lg-0">
            <h3 class="fs-14 mb-3 text-uppercase letter-spacing-05">follow us</h3>
            <ul class="list-unstyled mb-0">
              <li class="py-0"><a href="#" class="text-gray hover-primary lh-2 font-weight-500">Facebook</a> </li>
              <li class="py-0"><a href="#" class="text-gray hover-primary lh-2 font-weight-500">Instagram</a> </li>
              <li class="py-0"><a href="#" class="text-gray hover-primary lh-2 font-weight-500">Twitter</a> </li>
            </ul>
          </div>
        </div>
        <div class="mt-2 mt-md-7 row align-items-center">
          <p class="col-md-auto mb-4 mb-md-0 text-gray lh-1 fs-14 font-weight-500">
            © 2021 Craftant. All rights reserved.
          </p>
        </div>
      </div>
    </footer>
    <div class="position-fixed pos-fixed-bottom-right p-6 z-index-10">
      <a href="#"
        class="gtf-back-to-top bg-white text-primary hover-white bg-hover-primary shadow p-0 w-52px h-52 rounded-circle fs-20 d-flex align-items-center justify-content-center"
        title="Back To Top"><i class="fal fa-arrow-up"></i></a>
    </div>

    <div class="sidenav canvas-sidebar bg-white">
      <div class="canvas-overlay">
      </div>
      <div class="pt-5 pb-7 card border-0 h-100">
        <div class="d-flex align-items-center card-header border-0 py-0 pl-8 pr-7 mb-9 bg-transparent">
          <a href="{{ url('/') }}" class="d-block w-52px">
            <img src="{{ asset('images/logo.png') }}" alt="Crafty">
          </a>
          <span class="canvas-close d-inline-block text-right fs-24 ml-auto lh-1 text-primary"><i
              class="fal fa-times"></i></span>
        </div>
        <div class="overflow-y-auto pb-6 pl-8 pr-7 card-body pt-0">
          <ul class="navbar-nav main-menu px-0 ">
            <li aria-haspopup="true" aria-expanded="false" class="nav-item dropdown py-1 px-0">
              <a class="nav-link dropdown-toggle p-0" href="{{ url('/') }}">
                Home
              </a>
            </li>
            <li aria-haspopup="true" aria-expanded="false" class="nav-item dropdown py-1 px-0">
              <a class="nav-link dropdown-toggle p-0" href="{{ url('/shop') }}">
                Products
              </a>
            </li>
            <li aria-haspopup="true" aria-expanded="false" class="nav-item dropdown py-1 px-0">
              <a class="nav-link dropdown-toggle p-0" href="{{ url('/about-us') }}">
                About Us
              </a>
            </li>
            <li aria-haspopup="true" aria-expanded="false" class="nav-item dropdown py-1 px-0">
              <a class="nav-link dropdown-toggle p-0" href="{{ url('/contact-us') }}">
                Contact Us
              </a>
            </li>
          </ul>
        </div>
        <div class="card-footer bg-transparent border-0 mt-auto pl-8 pr-7 pb-0 pt-4">
          <ul class="list-inline d-flex align-items-center mb-3">
            <li class="list-inline-item mr-4"><a href="#" class="fs-20 lh-1"><i class="fab fa-facebook-f"></i></a></li>
            <li class="list-inline-item mr-4"><a href="#" class="fs-20 lh-1"><i class="fab fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#" class="fs-20 lh-1"><i class="fab fa-twitter"></i></a></li>
          </ul>
          <p class="mb-0 text-gray">
            © 2020 Craftant.<br>
            All rights reserved.
          </p>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
      aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Send Inquery</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              @csrf
              <div class="form-group">
                <label for="nameinput">Name</label>
                <input type="email" class="form-control" id="nameinput" placeholder="Name"
                  value="<?php if(Auth::user()) { echo Auth::user()->name; }?>">
              </div>
              <div class="form-group">
                <label for="emailinput">Email</label>
                <input type="email" class="form-control" id="emailinput" placeholder="name@example.com"
                  value="<?php if(Auth::user()) { echo Auth::user()->email; }?>">
              </div>
              <div class="form-group">
                <label for="phoneinput">Phone</label>
                <input type="email" class="form-control" id="phoneinput" placeholder="01010-123456"
                  value="<?php if(Auth::user()) { echo Auth::user()->phone; }?>">
              </div>
              <div class="form-group">
                <label for="textinput">Inquery</label>
                <textarea class="form-control" id="textinput" rows="3"></textarea>
              </div>
              <div class="form-group">
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>