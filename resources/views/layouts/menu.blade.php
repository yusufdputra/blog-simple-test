<!-- drawer -->
<div class="mdk-drawer js-mdk-drawer" id="default-drawer">
  <div class="mdk-drawer__content">
    <div class="sidebar sidebar-light sidebar-light-dodger-blue sidebar-left" data-perfect-scrollbar>




      <a href="{{route('/')}}" class="sidebar-brand sidebar-brand-dark bg-primary-pickled-bluewood ">

        <span class="avatar avatar-xl sidebar-brand-icon h-auto ">

          <span class="avatar-title rounded ml-2 "><img src="{{asset('images/logo-sm.png')}}" style="height: 50px; width:auto !important;" class="img-fluid " alt="logo" /></span>

        </span>

        <span class="ml-4">Welcome</span>
      </a>

      @role('admin')


      <div class="sidebar-heading">manage articles</div>
      <ul class="sidebar-menu">


        <li class="sidebar-menu-item {{ (request()->is('article*')) ? 'active' : '' }}">
          <a class="sidebar-menu-button" href="{{route('article')}}">
            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">account_box</span>
            <span class="sidebar-menu-text">Artikel</span>
          </a>
        </li>


      </ul>

     
      @endrole

    </div>
  </div>
</div>
<!-- // END drawer -->