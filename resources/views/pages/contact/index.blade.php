@extends('layouts.inner')
@section('page-title', 'Contact Us')
@section('content')
<main id="content">
  @if(!empty($contactData))
  <section class="pt-10 pb-8 pb-md-10">
    <div class="container">
      <h2 class="fs-sm-40 mb-10 text-center">{{ $contactData->title }}</h2>
      <div class="row">
        @if(!empty($contactData->address))
        <div class="col-sm-6 col-md-3 mb-6 mb-md-0">
          <div class="text-center px-5">
            <p class="font-weight-bold text-primary mb-2">Head Office</p>
            <p class="mb-2">{{ $contactData->address }}</p>
            <p class="font-weight-500 text-primary mb-0">{{ env('OFFICE_PHONE') }}</p>
          </div>
        </div>
        @endif
        @if(!empty($contactData->address_one))
        <div class="col-sm-6 col-md-3 mb-6 mb-md-0">
          <div class="text-center px-5">
            <p class="font-weight-bold text-primary mb-2">Local Office</p>
            <p class="mb-2">{{ $contactData->address_one }}</p>
          </div>
        </div>
        @endif
        @if(!empty($contactData->open_time))
        <div class="col-sm-6 col-md-3 mb-6 mb-md-0">
          <div class="text-center px-5">
            <p class="font-weight-bold text-primary mb-2">We're Open</p>
            <p class="mb-0">{{ $contactData->open_time }}</p>
          </div>
        </div>
        @endif
        <div class="col-sm-6 col-md-3 mb-6 mb-md-0">
          <div class="text-center px-5">
            <p class="font-weight-bold text-primary mb-5">Social Media</p>
            <ul class="list-inline d-flex align-items-center justify-content-center mb-0">
              @if(!empty($contactData->facebook_url))
              <li class="list-inline-item mr-4"><a href="{{ $contactData->facebook_url }}" class="fs-20 lh-1"><i
                    class="fab fa-facebook-f"></i></a>
              </li>
              @endif
              @if(!empty($contactData->twitter_url))
              <li class="list-inline-item"><a href="{{ $contactData->twitter_url }}" class="fs-20 lh-1"><i
                    class="fab fa-twitter"></i></a></li>
              @endif
              @if(!empty($contactData->inatagram_url))
              <li class="list-inline-item mr-4"><a href="{{ $contactData->inatagram_url }}" class="fs-20 lh-1"><i
                    class="fab fa-instagram"></i></a>
              </li>
              @endif
              @if(!empty($contactData->youtube_url))
              <li class="list-inline-item mr-4"><a href="{{ $contactData->youtube_url }}" class="fs-20 lh-1"><i
                    class="fab fa-youtube"></i></a>
              </li>
              @endif

            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="pb-11 pb-lg-15">
    <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto">
          <h2 class="fs-24 mb-2">
            We would love to hear from you.
          </h2>
          <p class="mb-7">If you’ve got great products your making or looking to work with us then drop us a
            line.</p>

          @if(Session::has('success'))
          <div class="alert alert-success col">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{Session::get('success')}}
          </div>
          @endif

          @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif
          <form method="POST" action="{{ url('/send-contact') }}">
            @csrf
            <div class="row mb-6">
              <div class="col-sm-6">
                <input type="text" name="name" class="form-control" placeholder="Your Name*" required>
              </div>
              <div class="col-sm-6">
                <input type="email" name="email" class="form-control" placeholder="Your Email*" required>
              </div>
            </div>
            <div class="form-group mb-4">
              <input type="text" name="phone" class="form-control" placeholder="Your Phone*" required>
            </div>
            <div class="form-group mb-4">
              <textarea name="message" class="form-control" rows="6" placeholder="Write you comment"></textarea>
            </div>
            <button type="submit" class="btn btn-primary text-uppercase letter-spacing-05">submit now</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  @endif
  <section class="pb-10">
    <div class="container container-xxl">
      <div class="" style="height: 350px">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233667.8223924372!2d90.27923775747219!3d23.780887456211758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1633589774696!5m2!1sen!2sbd"
          width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
  </section>
</main>
@endsection