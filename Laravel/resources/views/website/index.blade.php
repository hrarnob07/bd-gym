@extends('website.layouts.master')
@section('main-content')
    <div class="row">
        <div class="col-md-6">
            {{--<img src="{{asset('asset/website/img/image-with-logo.png')}}" height="350">--}}
        <div class="ex-image-zoom">
        <div class="ex-image-zoom-img" data-scale="2"
        data-image="{{ asset('asset/website/img/image-with-logo.png') }}"></div>
        </div>
        </div>
        <div class="col-md-6">
            <div class="text">
                <div class="item">
                    <h3 style="border-left: solid 5px #4c87ca; padding-left: 5px;">STOCK SIMULATION とは</h3>
                    <p>株式投資を勉強する上で、実際にトレードを始める前に、<br>
                        擬似トレードすることで、マーケット感覚を鍛える為に開発されました。<br>
                        銘柄を選んで、売り買いのポジションを取り、1日ずつ進めていくことで、<br>
                        自分がその時選択したポジションでの損益と、確定した損益が自動計算されるので、<br>
                        擬似トレードでどのぐらい損益が出ているかが一目瞭然です。<br>
                        <b><span style="border-bottom: solid 2px orange; font-size: 120%;">株式投資を実際に始める前に、<br>
                     どのぐらい損益を出せるか知りたい人に、必要なすべてが詰まったサービスです！</span></b>
                    </p>
                </div>
                <div class="item">
                    <h3 style="border-left: solid 5px #4c87ca; padding-left: 5px;">オススメ機能</h3>
                    <p>・<b>企業数500件近くを過去最大10年分の株価チャートの表示</b><br>
                        ・<b>売り買いのポジションをとって<span
                                    style="border-bottom: solid 2px orange;">擬似トレードが可能!</span></b><br>
                        ・<b>トレード中及び確定した損益の<span
                                    style="border-bottom: solid 2px orange;">自動計算で損益をチェック！</span></b>
                    </p>
                </div>
                <div class="item">
                    <h3 style="border-left: solid 5px #4c87ca; padding-left: 5px;">追加の機能アップデート予定</h3>
                    <p>・<b>擬似トレードの成績記録機能</b><br>
                        ・<b>ユーザー間で擬似トレード成績を競うゲーム</b><br>
                        ・<b>銘柄ごとの売買模範解答販売</b>　など<br>
                        <span style="font-size: 80%;">上記内容は現在開発中、もしくは開発検討中です。内容が変わる可能性がありますこと、予めご了承下さい。</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="item">
                <h3 style="border-left: solid 5px #4c87ca; padding-left: 5px;">ご登録方法</h3>
                <p style="margin: 0 0 10px 0;">①<span style="border-bottom: solid 2px orange;"><b>
                       <a href="http://kei-kun.com/register" target="_blank" rel="noopener">こちらのURL</a></b>
                        </span>、もしくは<b><span style="color: #e88f12;">「今すぐはじめる！」ボタン</span></b>
                    を押して頂くと、お申し込みページにお進み頂けます。<br>
                    ②メールアドレスとパスワードをご入力後、ご利用規約をお読み頂き、「サインアップ」から次へお進み下さい。<br>
                    ③クレジットカードを登録して頂き、ご利用可能なクレジットカードか即時確認後、すぐにご利用頂けます。(個人情報・クレジットカード情報入力画面は、暗号通信接続により保護されています。)
                </p>
                <p>※PC専用サービスですので、PCからご利用下さい。<br>
                    推奨ブラウザ：Google Chrome、safari<span style="color: red;">(Windows Internet Exploreは非対応です)</span>
                </p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="text">
                <h3 style="border-left: solid 5px #4c87ca; padding-left: 5px;">ご利用料金</h3>
                <p><span style="font-size: 110%;">月額 1,080円(税込)</span><br>
                    ご登録頂いたクレジットカードに、30日ごとに1,080円決済させて頂きます。
                </p>
                <h3 style="border-left: solid 5px #4c87ca; padding-left: 5px; margin-top: 10px;">お支払い方法</h3>
                <p>クレジットカード決済のみとさせて頂いております。<br>
                    対応クレジットカードは、VISA、Master、AMERICAN EXPRESSです。<br>
                    <img src="{{ asset('asset/website/img/card.jpg') }}">
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <p class="text-center">
                <a class="btn btn-warning btn-stocks" href="{{ route('register') }}" target="_blank">今すぐはじめる！</a>
            </p>
            <p style="text-align: center;">( 新規登録の方 )</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <p class="text-center">
                <a class="btn btn-primary btn-stocks" href="{{ route('login') }}" target="_blank">ログインはこちら</a>
            </p>
            <p style="text-align: center;">( 既にご利用の方 )</p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <div class="text">
                <div class="item">
                    <h3 style="border-left: solid 5px #4c87ca; padding-left: 5px;">基本説明</h3>
                    <p>通常時は閲覧モードになっています。<br>
                        シミュレーションを始める時は、<br>
                        銘柄を選択した後、開始日を入力して、売買単位を選択して、<br>
                        シミュレーション開始ボタンを押して下さい。</p>
                </div>
                <div class="item">
                    <h3 style="border-left: solid 5px #4c87ca; padding-left: 5px; margin-top: 10px;">銘柄変更方法</h3>
                    <p>画面上部のプルダウンからか、証券コードを入力して開始して下さい。<br>
                        ※証券コード入力では、Stock Simulationに登録していない銘柄は表示されません<br>
                        ※シミュレーション途中でも銘柄の変更は出来ますが、シミュレーションはリセットされます。</p>
                </div>
                <div class="item">
                    <h3 style="border-left: solid 5px #4c87ca; padding-left: 5px; margin-top: 10px;">
                        チャートの表示期間変更</h3>
                    <p>チャート上部で、チャートの表示期間変更を出来ます。<br>
                        期間は「2週間」から「ALL」(10年間)があります。</p>
                </div>
                <div class="item">
                    <h3 style="border-left: solid 5px #4c87ca; padding-left: 5px; margin-top: 10px;">表示オプション</h3>
                    <p>ロウソク足の変更：日足、週足、月足の変更が可能です。(閲覧モードのみ)<br>
                        移動平均線：8種類の移動平均線の表示・非表示が行えます。<br>
                        グラフのカラー暗転：グラフの背景を黒色に変更します。</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="ex-image-zoom">
                <div class="ex-image-zoom-img" data-scale="2"
                     data-image="{{ asset('asset/website/img/simulation_view.png') }}"></div>
            </div>
        </div>
    </div>
    <hr>
    <!--    View details-->
    <div class="row">
        <div class="col-md-6">
            <div class="promo-content">
                <h3 style="border-left: solid 5px #4c87ca; padding-left: 5px; margin: 10px 0 10px 0;">閲覧モード</h3>
                <div class="ex-image-zoom">
                    <div class="ex-image-zoom-img" data-scale="2"
                         data-image="{{ asset('asset/website/img/chart-view.png') }}"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <h3 style="border-left: solid 5px #4c87ca; padding-left: 5px; margin: 10px 0 10px 0;">
                        シミュレーションモード</h3>
                    <div class="ex-image-zoom">
                        <div class="ex-image-zoom-img" data-scale="2"
                             data-image="{{ asset('asset/website/img/simulation_view.png') }}"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    Login and Singnup button-->
    <div class="row mt25">
        <div class="col-md-4 offset-md-4">
            <p class="text-center">
                <a class="btn btn-warning btn-stocks" href="http://kei-kun.com/register" target="_blank">今すぐはじめる！</a>
            </p>
            <p style="text-align: center;">( 新規登録の方 )</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <p class="text-center">
                <a class="btn btn-primary btn-stocks" href="http://kei-kun.com/login" target="_blank">ログインはこちら</a>
            </p>
            <p style="text-align: center;">( 既にご利用の方 )</p>
        </div>
    </div>
    <!--    Question and answer-->
    <div class="row">
        <div class="col-md-6">
            <h3 style="border-left: solid 5px #4c87ca; padding-left: 5px; margin: 10px 0 10px 0;">よくある質問</h3>
            <div class="item">
                <p><b>Q：チャートが表示されません。</b><br>
                    A：閲覧しているブラウザーは<i class="fa fa-internet-explorer"
                                     aria-hidden="true"></i>インターネットエクスプローラーではないでしょうか。<br>
                    本サービスは、<span style="color: red;">インターネットエクスプローラーには非対応となっております。</span><br>
                    推奨ブラウザは、<i class="fa fa-chrome" aria-hidden="true"></i>Google Chromeです。<br>
                    ダウンロードは <span style="border-bottom: solid 2px black;"><a
                                href="https://www.google.co.jp/chrome/browser/desktop/index.html" target="_blank"
                                rel="noopener"><i class="fa fa-external-link" aria-hidden="true"></i> Googleのウェブサイト</a></span>から行えます。
                </p>
            </div>
            <div class="item">
                <p><b>Q：解約の方法を教えて下さい。</b><br>
                    A：「アカウント設定」 ＞ 「アカウントの解約」からすぐに行う事が出来ます。うまく解約が行えない場合は、問い合わせよりご連絡ください。<span style="color: red;">原則的に弊社での解約処理は行わないので、お客様ご自身で行って下さい。</span>
                </p>
            </div>
            <div class="item">
                <p><b>Q：パスワードを忘れてしまいました。</b><br>
                    A：<span style="border-bottom: solid 2px black;">
               <a href="http://kei-kun.com/register" target="_blank" rel="noopener">
                   <i class="fa fa-external-link" aria-hidden="true"></i>ログイン画面</a>
                        </span>の「パスワードをお忘れですか？」からパスワードの再設定が可能です。<br>
                    登録した際のメールアドレスを入力して頂き、受信したメール内の「パスワードを変更」のリンクからパスワードを再設定頂けます。
                </p>
            </div>
            <div class="item">
                <p><b>Q：解約しようと思っていたのに忘れていて課金されてしまいました。返金していただけますか？</b><br>
                    A：課金は30日周期でシステムが自動で行います。弊社側に過失がある場合を除き、原則的に返金は行っておりません。何卒ご了承くださいますようお願い申し上げます。
                </p>
            </div>
            <div class="item">
                <p><b><span style="border-bottom: solid 2px black;">
                            <a href="{{ route('website.law') }}">
                            <i class="fa fa-external-link" aria-hidden="true"></i>特定商取引法に基づく表記</a>
                        </span></b><br></p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="info">
                <h3 style="border-left: solid 5px #4c87ca; padding-left: 5px; margin: 10px 0 10px 0;">お問い合わせ</h3>
                <p><span style="color: red;">＊携帯電話のメールアドレスやプロバイダーのメールなどでご連絡頂いた場合、「@kei-kun.com」を受信リストに登録して頂かないと、弊社からの返信メールを受信できない場合があります。予めご了承下さい。</span><br>
                    <b>アカウントや契約状況、課金状況などを問い合わせ頂く際は、アカウント登録に利用したメールアドレスを添えて下さい。</b><br></p>
            </div>
            <div class="inquiry-form">
                <form class="form-group" method="post" action="{{route('website.sendMail')}}" id="Inquiry-form">
                    {{ csrf_field() }}
                    <table class="table table-bordered ">
                        <tr>
                            <th>
                                <span class="btn btn-sm btn-warning not-btn"> 必須 </span> お名前
                            </th>
                            <td><input type="text" name="name"></td>
                            @if ($errors->has('name'))
                                <span class="alert-danger"> *Name is required </span>
                            @endif
                        </tr>
                        <tr>
                            <th>
                                <span class="btn btn-sm btn-warning not-btn"> 必須</span> メールアドレス
                            </th>
                            <td><input type="email" name="email" placeholder="例：taro@abc.com"></td>
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
        </div>
    </div>
    <div id="backToTop">
        <i class="fa fa-arrow-up"></i>
    </div>
@endsection
