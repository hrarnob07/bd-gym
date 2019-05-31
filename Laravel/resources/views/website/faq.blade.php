@extends('website.layouts.master')

@section('main-content')
    <?php

    // grab recaptcha library
//    require_once "recaptchalib.php";

    ?>

    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h3 id="contact" style="border-left: solid 5px #4c87ca; padding-left: 5px; margin: 10px 0 10px 0;">
                質問を探す</h3>
            <div class="success">
                @if(Session::has('message'))
                   <p id="message">
                       {{ Session('message') }}
                   </p>
                 <script>
                     setTimeout(function() {
                         document.getElementById('message').style.display='none'
                     }, 3000);
                 </script>
                @endif
            </div>
            <form class="form-group" method="post" action="{{route('website.save-question')}}" id="faq-form">
                {{ csrf_field() }}
                <div class="col-md-10 search">
                    <div class="col-md-8">
                        <input type="text" name="question" onkeyup="liveSearch()" id="search">
                        <h1></h1>
                        <input type="email"  @if(Auth::check()) value="{{ Auth::user()->email }}" @else required @endif name="user_email"  style="display: none"  id="email" placeholder="Please write your email address here">
                        <div id="re-captcha" style="display: none" class="g-recaptcha col-md-8" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
                        @if($errors->has('g-recaptcha-response'))
                            <span style="color: red">{{ $errors->first('g-recaptcha-response') }}</span>
                        @endif
                    </div>

                    <div class="col-md-2 submit">

                        <input type="submit" @if(!Auth::check()) onclick="displayEmail()" @endif class="btn btn-primary" value="Submit question">
                    </div>
                </div>
            </form>

            <h1></h1>
            <div class="col-md-10">

                    <div class="que_ans" id="que_ans">

                        <div class="nav nav-list" id="accordion">
                            <style>
                                .nav-header:hover{cursor: pointer;}
                            </style>
                            @if(isset($faqs))
                                @foreach($faqs as $k=>$faq)
                                    @if($faq->answer!=null)
                                        <li  class="nav-header" data-toggle="collapse"  data-target="#test{{$k}}">
                                            <p class="first">{{ $faq->question }}?</p>
                                        </li>
                                        <div class="nav nav-list collapse" id="test{{$k}}">
                                            <p>{{ $faq->answer }}</p>
                                        </div >
                                    @endif
                                @endforeach
                            @endif

                        </div>
                    </div>
            </div>


        </div>

    </div>

    <style>
        /*.submit{*/
            /*margin-top: 55px;*/
        /*}*/
        #faq-form input[type='text'],input[type='email'], textarea {
            width: 100%;
            padding: .375rem .75rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            border: 1px solid #4c87ca;
            /* transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out; */
        }
        .search .col-md-8{
            float: left;
            width: 75%;
            padding-left: 0px;
        }
        .search .col-md-2{
            float: left;
            width: 25%;
        }
        .nav{
            display: inline-block;
        }
        .que_ans{
            margin-top: 130px;
            min-height: 500px;
        }
        .first{
            font-size: 18px;
            font-weight: 600;
        }

        .que_ans li:hover{
            text-decoration: underline;
        }
        .nav .nav-list p{
            color:#000;
            font-family: Arial;
        }
    </style>

    <script>
        function displayEmail() {
            document.getElementById('email').style.display='block';
            document.getElementById('re-captcha').style.display='block';
            document.getElementById('que_ans').style.marginTop ="170px";
        }
        function liveSearch() {

            var input, filter, ul, li, a, i;

            input = document.getElementById("search");
            filter = input.value.toUpperCase();
            ul = document.getElementById("accordion");
            li = ul.getElementsByTagName("li");
            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("p")[0];
                if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";

                }
            }
        }
    </script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
@endsection
