<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Stock Simulation</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('asset/website/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href='//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900,300italic,400italic|Poppins:100,200,300,400,500,600,700,800,900,300italic,400italic&subset=latin,latin-ext'
          rel='stylesheet' type='text/css'>
    <link rel='stylesheet' id='ls-google-fonts-css'
          href='http://fonts.googleapis.com/css?family=Lato:100,300,regular,700,900%7COpen+Sans:300%7CIndie+Flower:regular%7COswald:300,regular,700&#038;subset=latin%2Clatin-ext'
          type='text/css' media='all'/>
    <!-- Custom styles for this template -->
    <link href="{{ asset('asset/website/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/website/css/style.css') }}" rel="stylesheet">
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top is-fixed" id="mainNav">
    <div class="container">
        <a class="navbar-brand desk" href="{{ route('website.index') }}">
            <img src="{{ asset('asset/website/img/logo.png') }}">
        </a>
        <button class="navbar-toggler navbar-toggler-right float-le" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand mobile" href="{{ route('website.index') }}">
            <img src="{{ asset('asset/website/img/logo.png') }}">
        </a>
        <style>
            .navbar-light .navbar-nav .nav-link.active{
                color: #4C87CA;
            }
        </style>
        <div class="collapse navbar-collapse text-white" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link @if( Request::segment(2)=='') active @endif" href="{{ route('website.index') }}">Stock Simulation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if( Request::segment(2)=='faq') active @endif" href="{{ route('website.faq') }}">良くある質問</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if( Request::segment(2)=='contact') active @endif" href="{{ route('website.contact') }}">お問い合わせ</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Banner -->
<header id="banner" class="banner text-white text-center">
    <div class="overlay"></div>
    <div class="banner-caption">
        <h1 class="mb-5 text-uppercase">Stock Simulation</h1>
    </div>
</header>
<div class="content"><!-- Start content wrapper-->

    <div class="container">
