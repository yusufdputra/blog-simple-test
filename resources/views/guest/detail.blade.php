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
            <a href="{{route('login')}}" class="nav-link" data-toggle="tooltip" data-title="Login" data-placement="bottom" data-boundary="window"><i class="material-icons">lock_open</i></a>
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
    <div class="page-section bg-alt border-bottom-2">
      <div class="container page__container">

        <div class="d-flex flex-column flex-lg-row align-items-center">
          <div class="d-flex flex-column flex-md-row align-items-center align-items-md-start flex mb-16pt mb-lg-0 text-center text-md-left">
            <div class="avatar overlay  mb-16pt mb-md-0 mr-md-16pt">
              <img src="{{asset('storage/'.$data['article']['url_file'])}}" class="avatar-img rounded" alt="lesson">
              <div class="overlay__content"></div>
            </div>
            <div class="flex">
              <h1 class="h2 measure-lead-max mb-16pt">Merge Duplicates in Sketch - Inconsistent Symbols &amp; Styles</h1>
         

            </div>
          </div>
          <div class="ml-lg-16pt">
            <a href="#" class="btn btn-light">Blog</a>
          </div>
        </div>

      </div>
    </div>

    <div class="page-section border-bottom-2">
      <div class="container page__container">

        <div class="row">
          <div class="col-lg-8">


            <div class="d-flex flex-column flex-md-row align-items-md-center mb-16pt">
              <div class="mb-16pt mb-md-0 mr-md-16pt">
                <div class="rounded p-relative o-hidden overlay  avatar avatar-xxl">
                  <img class="img-fluid rounded" src="{{asset('storage/'.$data['article']['url_file'])}}" alt="image">
                  <div class="overlay__content"></div>
                </div>
              </div>
              <div class="flex">
                <p class="lead measure-paragraph-max">{{$data['article']['detail']}}</p>
              </div>
            </div>


            <p class="text-50 measure-paragraph-max mb-24pt">{{$data['article']['detail']}}</p>

          </div>
          <div class="col-lg-4">

            <div class="page-separator">
              <div class="page-separator__text">Author</div>
            </div>

            <div class="media align-items-center mb-16pt">
              <span class="media-left mr-16pt">
                <img src="{{asset('luma/images/logo/black-100@2x.png')}}" width="40" alt="avatar" class="rounded-circle">
              </span>
              <div class="media-body">
                <a class="card-title m-0" href="fixed-teacher-profile.html">{{$data['article']['user']['name']}}</a>
                <p class="text-50 lh-1 mb-0">{{$data['article']['user']['email']}}</p>
              </div>
            </div>
           

            <div class="page-separator">
              <div class="page-separator__text">Recommended</div>
            </div>

            
          @foreach($data['articles'] AS $key => $value)


            <div class="mb-8pt d-flex align-items-center">
              <a href="{{route('article.detail', Crypt::encrypt($value->id))}}" class="avatar avatar-lg overlay  mr-12pt">
                <img src="{{asset('storage/'.$value->url_file)}}" alt="image" class="avatar-img rounded">
                <span class="overlay__content"></span>
              </a>
              <div class="flex">
                <a class="card-title mb-4pt" href="{{route('article.detail', Crypt::encrypt($value->id))}}">{{$value->title}}</a>
                <div class="d-flex align-items-center">
                  <small class="text-muted">{{ Carbon\Carbon::parse($value->created_at)->format('d-m-Y') }}</small>
                </div>
              </div>
            </div>

            @endforeach




          </div>
        </div>

      </div>
    </div>

  </div>
  <!-- // END Header Layout Content -->

</div>
@endsection