@include('guest.layouts.header')
<div class="mdk-drawer-layout__content page-content">
    @yield('content')

    <div class="js-fix-footer2 bg-white border-top-2">
        <div class="container page__container page-section d-flex flex-column">
            <p class="text-70 brand mb-24pt">
                <img class="brand-icon" src="{{asset('images/logo-sm.png')}}" width="70" alt="Luma"> Yusuf Dwi Putra
            </p>
            

            <p class="text-50 small mt-n1 mb-0">Copyright {{\Carbon\Carbon::now()->year}} &copy; All rights reserved.</p>
        </div>
    </div>
</div>

@include('guest.layouts.footer')