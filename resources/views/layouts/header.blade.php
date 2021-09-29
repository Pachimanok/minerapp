<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>MinerApp</title>

  <meta name="author" content="Creative Tim">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  
  <!-- Favicon -->
  <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
  
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
  
  <!-- Icons -->
  <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <script src="https://kit.fontawesome.com/d3b4aaf86f.js" crossorigin="anonymous"></script>
  
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
  <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script> 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/picnic">

  <link href="{{asset('swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  {{-- para mobile --}}


  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">


  <link rel="apple-touch-icon" sizes="57x57" href="../assets/img/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="../assets/img/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="../assets/img/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="../assets/img/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="../assets/img/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="../assets/img/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="../assets/img/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="../assets/img/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="../assets/img/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicon-16x16.png">
  <link rel="manifest" href="../assets/img/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="../assets/img/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  {{-- fin para mobile --}}
 
  @if($mineros->celular == null)
  
  <script>
    $(document).ready(function() {
        $("#myModal").modal('show');
    });
  </script>
  
 @endif 


</head>

<body> 

@include('formularios.createMinero')