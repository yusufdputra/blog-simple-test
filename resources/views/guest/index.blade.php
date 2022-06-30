@extends('guest.layouts.app')

@section('content')

<!-- Header -->
<div class="mdk-header-layout js-mdk-header-layout">
  <div id="header" class="mdk-header mdk-header--bg-dark bg-dark js-mdk-header mb-0" data-effects="parallax-background waterfall" data-fixed data-condenses>
    <div class="mdk-header__bg">
      <div class="mdk-header__bg-front" style="background-image: url(luma/images/photodune-4161018-group-of-students-m.jpg);"></div>
    </div>
    <div class="mdk-header__content justify-content-center">



      <div class="navbar navbar-expand navbar-dark-dodger-blue bg-transparent will-fade-background" id="default-navbar" data-primary>


        <!-- Navbar Brand -->
        <a href="{{route('/')}}" class="navbar-brand mr-16pt">
          <!-- <img class="navbar-brand-icon" src="assets/images/logo/white-100@2x.png" width="30" alt="Luma"> -->

          <span class="avatar avatar-sm navbar-brand-icon mr-0 mr-lg-8pt">

            <span class="avatar-title rounded ml-3"><img src="{{asset('images/logo-sm.png')}}" style="height: 50px; width:auto !important;" alt="logo" class="img-fluid" /></span>

          </span>
        </a>



        <ul class="nav navbar-nav d-none d-sm-flex flex justify-content-start ml-4">
          <li class="nav-item active">
            <a href="{{route('/')}}" class="nav-link">Home</a>
          </li>\
        </ul>


        <ul class="nav navbar-nav ml-auto mr-0">
          <li class="nav-item">
            <a href="{{route('doLogin')}}" class="nav-link" data-toggle="tooltip" data-title="Login" data-placement="bottom" data-boundary="window"><i class="material-icons">lock_open</i></a>
          </li>
          <!-- <li class="nav-item">
              <a href="https://wa.link/k4o0hk" class="btn btn-outline-white">Get Started</a>
            </li> -->
        </ul>
      </div>

      <div class="hero container page__container text-center text-md-left py-112pt">
        <h1 class="text-white text-shadow">Learn to Code</h1>
        <p class="lead measure-hero-lead mx-auto mx-md-0 text-white text-shadow mb-48pt">Business, Technology and Creative Skills taught by industry experts. Explore a wide range of skills with our professional tutorials.</p>


        <!-- <a href="https://wa.link/k4o0hk" class="btn btn-lg btn-white btn--raised mb-16pt">Get Started</a> -->

      </div>
    </div>
  </div>

  <!-- // END Header -->

  <!-- Header Layout Content -->
  <div class="mdk-header-layout__content page-content ">

    <div class="page-section border-bottom-2">
      <div class="container page__container">

        <div class="page-separator">
          <div class="page-separator__text">From the blog</div>
        </div>



        <div class="row card-group-row">

          @foreach($data['articles'] AS $key => $value)

          <div class="col-md-6 col-lg-4 card-group-row__col">

            <div class="card card--elevated posts-card-popular overlay card-group-row__card">
              <img src="{{asset('storage/'.$value->url_file)}}" alt="" class="card-img">
              <div class="fullbleed bg-primary" style="opacity: .5"></div>
              <div class="posts-card-popular__content">
                <div class="card-body d-flex align-items-center">
                  <div class="avatar-group flex">
                    <div class="avatar avatar-xs" data-toggle="tooltip" data-placement="top" title="Janell D.">
                      <a href=""><img src="{{asset('storage/'.$value->url_file)}}" alt="Avatar" class="avatar-img rounded-circle"></a>
                    </div>
                  </div>
                  <a style="text-decoration: none;" class="d-flex align-items-center" href=""><i class="material-icons mr-1" style="font-size: inherit;">remove_red_eye</i> <small>327</small></a>
                </div>
                <div class="posts-card-popular__title card-body">
                  <small class="text-muted text-uppercase">{{$value->title}}</small>
                  <a class="card-title two-lines" href="fixed-blog-post.html">{{$value->detail}}</a>
                </div>
              </div>
            </div>

          </div>

          @endforeach

        </div>


      </div>
    </div>






  </div>
  <!-- // END Header Layout Content -->

</div>
@endsection