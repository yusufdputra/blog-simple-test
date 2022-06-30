@include('guest.layouts.header')

<!-- Header Layout -->
<div class="mdk-drawer-layout__content ">
    <div class="mdk-header-layout js-mdk-header-layout">

        <!-- Header -->

        <div id="header" class="mdk-header js-mdk-header mb-0" data-fixed data-effects="">
            <div class="mdk-header__content">



                <div class="navbar navbar-expand navbar-dark-dodger-blue navbar-shadow" id="default-navbar" data-primary>
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
                        <li class="nav-item active">
                            <a href="{{route('login')}}" class="nav-link" data-toggle="tooltip" data-title="Login" data-placement="bottom" data-boundary="window"><i class="material-icons">lock_open</i></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- // END Header -->

        <!-- Header Layout Content -->
        <div class="mdk-header-layout__content  ">


            <div class="pt-32pt pt-sm-64pt pb-32pt">
                <div class="container page__container">

                    <form method="POST" action="{{ route('login') }}" class="col-md-5 p-0 mx-auto" style="margin-bottom: 20px;">
                        @csrf
                        @if($errors->any())
                        <div class="alert alert-soft-accent alert-dismissible fade show" role="alert">
                            @foreach($errors->all() AS $error)
                            <div class="d-flex flex-wrap align-items-start">
                                <div class="mr-8pt">
                                    <i class="material-icons">access_time</i>
                                </div>
                                <div class="flex" style="min-width: 180px">
                                    <small class="text-black-100">
                                        <strong>Alert - </strong> {{$error}}!
                                    </small>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @endif
                        <div class="form-group">
                            <label class="form-label" for="email">Email:</label>
                            <input id="email" required type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Your email address ...">

                        </div>
                        <div class="form-group">
                            <label class="form-label" for="password">Password:</label>
                            <div class="search-form ">
                                <input type="password" required class="form-control" name="password" placeholder="Your password ..." id="password">

                                <div class="mg-r-10" style="vertical-align: middle;">
                                    <span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password"></span>
                                </div>
                            </div>
                            <br>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>




        </div>
        <!-- // END Header Layout Content -->


    </div>


</div>
<!-- // END Header Layout -->

<script>
    $('.toggle-password').click(function(e) {
        e.preventDefault();
        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $("#password");
        input.attr('type') === 'password' ? input.attr('type', 'text') : input.attr('type', 'password')
    });
</script>
@include('guest.layouts.footer')