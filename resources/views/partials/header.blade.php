    <header class="main-header navbar-light header-sticky header-sticky-smart position-absolute fixed-top">
      <div class="sticky-area">
        <div class="container container-xxl">
          <nav class="navbar navbar-expand-xl px-0 py-2 py-xl-0 d-block">
            <div class="d-none d-xl-block">
              <div class="row align-items-center">
                <div class="col-xl-10 mx-auto position-static">
                  <div class="d-flex mt-3 mt-xl-0 align-items-center w-100 ">
                    <a class="navbar-brand mx-8 mr-0 d-inline-block py-0" href="#">
                      <img src="{{ asset('images/logo.png') }}" alt="Craftant">
                    </a>
                    <ul class="navbar-nav hover-menu main-menu px-0 mx-xl-n4">
                      <li aria-haspopup="true" aria-expanded="false"
                        class="nav-item dropdown-item-home dropdown py-2 py-xl-5 px-0 px-xl-4">
                        <a class="nav-link  p-0" href="/">
                          Home
                        </a>
                      </li>
                      <li aria-haspopup="true" aria-expanded="false"
                        class="nav-item dropdown-item-home dropdown py-2 py-xl-5 px-0 px-xl-4">
                        <a class="nav-link  p-0" href="/shop">
                          Products
                        </a>
                      </li>
                      <li aria-haspopup="true" aria-expanded="false"
                        class="nav-item dropdown-item-home dropdown py-2 py-xl-5 px-0 px-xl-4">
                        <a class="nav-link  p-0" href="/about-us">
                          About Us
                        </a>
                      </li>
                      <li aria-haspopup="true" aria-expanded="false"
                        class="nav-item dropdown-item-home dropdown py-2 py-xl-5 px-0 px-xl-4">
                        <a class="nav-link  p-0" href="contact-us">
                          Contact Us
                        </a>
                      </li>

                    </ul>
                  </div>
                </div>
                <div class="col-2">
                  <ul class="navbar-nav flex-row justify-content-xl-end d-flex flex-wrap text-body py-0 navbar-right">
                    <li class="nav-item">
                      <a class="nav-link pr-3 py-0" href="{{ url('/auth/login') }}">
                        LogIn
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link position-relative px-3 py-0" href="{{ url('/auth/register') }}">Sign up</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="d-flex align-items-center d-xl-none">
              <button class="navbar-toggler border-0 px-0 canvas-toggle" type="button" data-canvas="true"
                data-canvas-options='{"width":"250px","container":".sidenav"}'>
                <span class="fs-24 toggle-icon"></span>
              </button>
              <div class="mx-auto"><a class="navbar-brand d-inline-block mr-0" href="index-2.html">
                  <img src="images/logo.png" alt="Furnitor">
                </a></div>
              <a href="#search-popup" data-gtf-mfp="true"
                data-mfp-options='{"type":"inline","focus": "#keyword","mainClass": "mfp-search-form mfp-move-from-top mfp-align-top"}'
                class="nav-search d-flex align-items-center"><i class="far fa-search"></i></a>
            </div>
          </nav>
        </div>
      </div>
    </header>