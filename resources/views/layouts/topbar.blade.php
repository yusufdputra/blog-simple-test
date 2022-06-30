<div class="navbar navbar-expand navbar-dark navbar-dark-dodger-blue navbar-shadow" id="default-navbar" data-primary>

  <!-- Navbar toggler -->
  <button class="navbar-toggler w-auto mr-16pt d-block d-lg-none rounded-0" type="button" data-toggle="sidebar">
    <span class="material-icons">short_text</span>
  </button>

  <!-- Navbar Brand -->
  <a href="{{route('/')}}" class="navbar-brand mr-16pt d-lg-none">
    <!-- <img class="navbar-brand-icon" src="assets/images/logo/white-100@2x.png" width="30" alt="Luma"> -->

    <span class="avatar avatar-sm navbar-brand-icon mr-0 mr-lg-8pt">

    <span class="avatar-title rounded ml-2 "><img src="{{asset('images/logo-sm.png')}}" style="height: 50px; width:auto !important;" class="img-fluid " alt="logo" /></span>

    </span>

    <span class="d-none d-lg-block ml-4">Welcome</span>
  </a>

  <ul class="nav navbar-nav d-none d-sm-flex flex justify-content-start ml-8pt">
    <li class="nav-item active">
      <a href="{{route('/')}}" class="nav-link">Home</a>
    </li>

  </ul>







  @auth


  <ul class="nav navbar-nav ml-auto mr-0">
    <li class="nav-item">

      <div class="nav-item dropdown">
        <a href="#" class="nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown" data-caret="false">

          <span class="avatar avatar-sm mr-8pt2">

            <span class="avatar-title rounded-circle bg-primary"><i class="material-icons">account_box</i></span>

          </span>

        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <div class="dropdown-header"><strong>Account</strong></div>
          <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link" data-toggle="tooltip" data-title="Logout" data-placement="bottom" data-boundary="window">Logout
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </a>
        </div>
      </div>

    </li>
  </ul>
  @endauth

  @guest
  <ul class="nav navbar-nav ml-auto mr-0">
    <li class="nav-item">
      <a href="#" class="nav-link" data-toggle="tooltip" data-title="Login" data-placement="bottom" data-boundary="window"><i class="material-icons">lock_open</i></a>
    </li>
    <li class="nav-item">
      <a href="#" class="btn btn-outline-white">Get Started</a>
    </li>
  </ul>
  @endguest

</div>