@if(\Session::has('alert'))
<div class="alert alert-soft-accent alert-dismissible fade show" role="alert">
  <div class="d-flex flex-wrap align-items-start">
    <div class="mr-8pt">
      <i class="material-icons">access_time</i>
    </div>
    <div class="flex" style="min-width: 180px">
      <small class="text-black-100">
        <strong>Success - </strong> {{Session::get('alert')}}
      </small>
    </div>
  </div>
</div>
@endif

@if(\Session::has('success'))
<div class="alert alert-soft-success alert-dismissible fade show" role="alert">
  <div class="d-flex flex-wrap align-items-start">
    <div class="mr-8pt">
      <i class="material-icons">access_time</i>
    </div>
    <div class="flex" style="min-width: 180px">
      <small class="text-black-100">
        <strong>Alert - </strong> {{Session::get('success')}}
      </small>
    </div>
  </div>
</div>
@endif