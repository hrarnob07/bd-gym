<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Stock Simulation|Taiwan</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('asset/website/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href='//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900,300italic,400italic|Poppins:100,200,300,400,500,600,700,800,900,300italic,400italic&subset=latin,latin-ext'
          rel='stylesheet' type='text/css'>
    <link rel='stylesheet' id='ls-google-fonts-css'
          href='http://fonts.googleapis.com/css?family=Lato:100,300,regular,700,900%7COpen+Sans:300%7CIndie+Flower:regular%7COswald:300,regular,700&#038;subset=latin%2Clatin-ext'
          type='text/css' media='all'/>
    <!-- Custom styles for this template -->
    {{--<link href="{{ asset('asset/website/css/font-awesome.min.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('asset/website/taiwan/css/style.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="banner-img">
            {{--<div class="col-md-10 offset-md-1">--}}
                {{--<h1 class="text-danger">给你最好的礼物</h1>--}}
            {{--</div>--}}
            <div class="col-md-8 offset-md-2">
                <div class="img-responsive">
                    <img class="thumbnail" src="{{ asset('asset/website/taiwan/img/banner-img.png') }}">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="email-form">
                @if(Session::has('message'))
                    <div class="alert alert-success"> {{Session('message')}} </div>
                @endif
                    @if(Session::has('error'))
                    <div class="alert alert-danger"> {{Session('error')}} </div>
                @endif
                <form action="{{ route('website.taiwan.emailRegistry') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">姓名</label>
                        <input type="text" class="form-control" name="name" placeholder="姓名">
                        @if ($errors->has('name'))
                            <span class="alert-danger"> {{ $errors->first() }} </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="email">Email <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" name="email" placeholder="Email">
                        @if ($errors->has('email'))
                            <span class="alert-danger"> {{ $errors->first() }} </span>
                        @endif
                        @if(Session::has('unique_email'))
                            <span class="alert-danger"> {{Session('unique_email')}} </span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">登錄</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
