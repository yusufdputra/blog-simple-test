<!DOCTYPE html>
<html  class="no-js" lang="en" translate="no" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- favicon
		============================================ -->
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/logo-sm.png')}}">
  <meta name="robots" content="noindex">

  <title>Selamat Datang</title>
  

  
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7CRoboto:400,500%7CExo+2:600&display=swap" rel="stylesheet">

  <!-- Perfect Scrollbar -->
  <link type="text/css" href="{{asset('luma/vendor/perfect-scrollbar.css')}}" rel="stylesheet">

  <!-- Fix Footer CSS -->
  <link type="text/css" href="{{asset('luma/vendor/fix-footer.css')}}" rel="stylesheet">

  <!-- Material Design Icons -->
  <link type="text/css" href="{{asset('luma/css/material-icons.css')}}" rel="stylesheet">


  <!-- Font Awesome Icons -->
  <link type="text/css" href="{{asset('luma/css/fontawesome.css')}}" rel="stylesheet">


  <!-- Preloader -->
  <link type="text/css" href="{{asset('luma/css/preloader.css')}}" rel="stylesheet">


  <!-- App CSS -->
  <link type="text/css" href="{{asset('luma/css/app.css')}}" rel="stylesheet">

  <!-- player -->
  <link type="text/css" href="{{asset('css/player.css')}}" rel="stylesheet">
  <script src="{{asset('js/player.js')}}"></script>
  


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">

  <!-- Quill Theme -->
  <link type="text/css" href="{{asset('luma/css/quill.css')}}" rel="stylesheet">

  <!-- Toastr -->
  <link type="text/css" href="{{asset('luma/vendor/toastr.min.css')}}" rel="stylesheet">
  <link type="text/css" href="{{asset('luma/css/toastr.css')}}" rel="stylesheet">
  <!-- Data Table JS
		============================================ -->
  <link rel="stylesheet" href="{{asset('css/jquery.dataTables.min.css')}}">


  <!-- Touchspin -->
  <link type="text/css" href="{{asset('luma/css/bootstrap-touchspin.css')}}" rel="stylesheet">

  <style>
    .mg-l-10 {
      margin-left: 10px;
    }

    .mg-r-10 {
      margin-right: 10px;
    }

    .pd-30 {
      padding: 30px;
    }
  </style>
</head>

<body class="layout-boxed ">
  <div class="preloader">
    <div class="sk-double-bounce">
      <div class="sk-child sk-double-bounce1"></div>
      <div class="sk-child sk-double-bounce2"></div>
    </div>
  </div>

  <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">