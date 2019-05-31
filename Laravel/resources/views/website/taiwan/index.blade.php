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
    {{--<link href="{{ asset('asset/website/css/font-awesome.min.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('asset/website/taiwan/css/style.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="banner-img">
            <div class="col-md-10 offset-md-1">
                <div class="img-responsive">
                    <img class="thumbnail" src="{{ asset('asset/website/taiwan/img/banner-img.png') }}">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="email-registry">
                {{--<h3 class="text-danger text-getting">给你最好的礼物</h3>--}}
                <h1 class="text-white text-coming text-center">COMING SOON</h1>
               <div class="row">
                   <div class="col-md-10 offset-md-1">
                       <p class="info">
                           我們為了閱讀「輕鬆入門！掌握6種線型學會看股祕訣」<br>本書的台灣讀者們準備了非常棒的特典內容。想要得到<br>的朋友們請在以下註冊登錄喔！
                       </p>
                       <div>
                           <h5 class="text-danger text-normal">
                               特典內容：<br>
                               1.山下老師的免費講座影片(日語發音・中文字幕) <br>
                           </h5>
                           <h5 class="text-danger text-normal">
                               2.股票買賣模擬工具一個月免費試用 <br>(價值NT$99/月)
                           </h5>
                       </div>
                   </div>
               </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="footer">
                <a class="btn btn-info" href="{{ route('website.taiwan.create') }}">按這裡註冊</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
