    <header class="main-header navbar-light header-sticky header-sticky-smart">
      <div class="sticky-area bg-white">
        <div class="container container-xxl">
          <nav class="navbar navbar-expand-xl px-0 py-2 py-xl-0 d-block">
            <div class="d-none d-xl-block">
              <div class="row align-items-center">
                <div class="col-xl-10 mx-auto position-static">
                  <div class="d-flex mt-3 mt-xl-0 align-items-center w-100 ">
                    <a class="navbar-brand mx-8 mx-xxl-10 d-inline-block py-0" href="{{ url('/') }}">
                      <img src="{{ asset('images/logo.png') }}" alt="Craftant">
                    </a>
                    <ul class="navbar-nav hover-menu main-menu px-0 mx-xl-n4">
                      <li aria-haspopup="true" aria-expanded="false"
                        class="nav-item dropdown-item-home dropdown py-2 py-xl-5 px-0 px-xl-4">
                        <a class="nav-link  p-0" href="{{ url('/') }}">
                          Home
                        </a>
                      </li>
                      <li aria-haspopup="true" aria-expanded="false"
                        class="nav-item dropdown-item-home dropdown py-2 py-xl-5 px-0 px-xl-4">
                        <a class="nav-link  p-0" href="{{ url('/shop') }}">
                          Products
                        </a>
                      </li>
                      <li aria-haspopup="true" aria-expanded="false"
                        class="nav-item dropdown-item-home dropdown py-2 py-xl-5 px-0 px-xl-4">
                        <a class="nav-link  p-0" href="{{ url('/about-us') }}">
                          About Us
                        </a>
                      </li>
                      <li aria-haspopup="true" aria-expanded="false"
                        class="nav-item dropdown-item-home dropdown py-2 py-xl-5 px-0 px-xl-4">
                        <a class="nav-link  p-0" href="{{ url('/contact-us') }}">
                          Contact Us
                        </a>
                      </li>

                    </ul>
                  </div>
                </div>
                <div class="col-2">
                  <ul class="navbar-nav flex-row justify-content-xl-end d-flex flex-wrap text-body py-0 navbar-right">
                    @if(!Auth::user())
                    <li class="nav-item">
                      <a class="nav-link pr-3 py-0" href="{{ url('/auth/login') }}">
                        LogIn
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link position-relative px-3 py-0" href="{{ url('/auth/register') }}">Sign up</a>
                    </li>
                    @endif
                    @if(Auth::user())
                    <li aria-haspopup="true" aria-expanded="false" class="nav-item dropdown py-2 py-xl-5 px-0 px-xl-4">
                      <a class="nav-link dropdown-toggle p-0" href="#" data-toggle="dropdown">
                        {{Auth::user()->name}}
                        <span class="caret"></span>
                      </a>
                      <div class="dropdown-menu px-0 pt-3 dropdown-menu-docs x-animated x-fadeInUp"
                        style="right:0;left:auto">
                        <div class="dropdown-body">
                          <a class="dropdown-item py-1" href="#">
                            <div class="media">
                              <div class="fs-20 mr-3">
                                <i class="fal fa-file-alt"></i>
                              </div>
                              <div class="media-body">
                                <span class="d-block lh-15">My Page</span>
                              </div>
                            </div>
                          </a>
                          <div class="dropdown-divider m-0"></div>
                          <a class="dropdown-item py-1" href="{{ url('/user/auth/logout') }}">
                            <div class="media">
                              <div class="fs-20 mr-3">
                                <i class="fal fa-layer-group"></i>
                              </div>
                              <div class="media-body">
                                <span class="d-block lh-15">Logout</span>
                              </div>
                            </div>
                          </a>

                        </div>
                      </div>
                    </li>
                    @endif
                  </ul>
                </div>
              </div>
            </div>
            <div class="d-block d-xl-none">
              <div class="d-flex align-items-center">
                <button class="navbar-toggler border-0 px-0 canvas-toggle" type="button" data-canvas="true"
                  data-canvas-options='{"width":"250px","container":".sidenav"}'>
                  <span class="fs-24 toggle-icon"></span>
                </button>
                <div class="mx-auto"><a class="navbar-brand d-inline-block mr-0" href="{{ url('/') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="Furnitor">
                  </a></div>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </header>