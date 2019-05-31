@extends('website.layouts.master')
@section('main-content')
    <div class="row">
        <div class="col-md-6">
            <h3 id="contact" style="border-left: solid 5px #4c87ca; padding-left: 5px; margin: 10px 0 10px 0;">
                お問い合わせフォーム</h3>
            <form class="form-group" method="post" action="{{route('website.sendMail')}}" id="Inquiry-form">
                {{ csrf_field() }}
                <table class="table table-bordered ">
                    <tr>
                        <th>
                            <span class="btn btn-sm btn-warning not-btn"> 必須 </span> お名前
                        </th>
                        <td><input type="text" name="name">
                            @if ($errors->has('name'))
                                <span style="color: red;"> 必須項目に入力してください。 </span>
                            @endif
                        </td>

                    </tr>
                    <tr>
                        <th>
                            <span class="btn btn-sm btn-warning not-btn"> 必須</span> メールアドレス
                        </th>
                        <td><input type="email" name="email" placeholder="例：taro@abc.com">
                            @if ($errors->has('email'))
                                <span style="color: red;"> 必須項目に入力してください。 </span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            お電話番号
                        </th>
                        <td><input type="text" name="phone" placeholder="例：090-1234-5678"></td>
                    </tr>
                    <tr>
                        <th>
                            <span class="btn btn-sm btn-warning not-btn"> 必須</span> お問い合わせ内容
                        </th>
                        <td><textarea type="text" name="inquiry_content" placeholder="内容をご記入ください" rows="5"></textarea>
                            @if ($errors->has('inquiry_content'))
                                <span style="color: red;"> 必須項目に入力してください。 </span>
                            @endif
                        </td>
                    </tr>

                </table>
                @if(Session::has('message'))
                    <div class="alert alert-success">
                        {{Session('message')}}
                    </div>
                @endif
                <button class="btn btn-lg btn-primary ">送信する</button>
            </form>

        </div>
        <div class="col-md-6">
            <div class="info">
                <h3 id="contact" style="border-left: solid 5px #4c87ca; padding-left: 5px; margin: 10px 0 10px 0;">
                    お電話によるお問い合わせ</h3>
                <p><b>合同会社SUNNYではお電話でのお問い合わせは受け付けておりません。<br>
                        何卒ご理解とご了承のほどお願い申し上げます。</b></p>
            </div>
        </div>
    </div>
    </div>

@endsection
