@extends('website.layouts.master')
@section('main-content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h3 id="contact" style="border-left: solid 5px #4c87ca; padding-left: 5px; margin: 10px 0 10px 0;">
                特定商取引法に基づく表記</h3>
            <form class="form-group" method="post" action="{{route('website.sendMail')}}" id="Inquiry-form">
                {{ csrf_field() }}
                <table class="table table-bordered ">
                    <tr>
                        <th>販売業者名</th>
                        <td>合同会社SUNNY</td>
                    </tr>
                    <tr>
                        <th>責任者指名</th>
                        <td>浅井香澄</td>
                    </tr>

                    <tr>

                        <th><a href="{{ route('website.index') }}">所在地</a></th>
                        <td><a href="{{ route('website.index') }}">神奈川県横浜市磯子区田原町8-39</a></td>

                    </tr>


                    <tr>
                        <th>電話番号</th>
                        <td><span style="color:red;">合同会社SUNNYではお電話のサポートは行なっておりません。
                            何卒ご理解とご了承のほどお願い申し上げます。</span></td>
                    </tr>

                    <tr>
                        <th>販売価格	</th>
                        <td>月額1,080円(消費税込み)</td>
                    </tr>

                    <tr>
                        <th>注文方法</th>
                        <td>インターネット</td>
                    </tr>

                    <tr>
                        <th>支払い方法	</th>
                        <td>クレジットカード(各種取引に必要な手数料はお客様負担となります)</td>
                    </tr>

                    <tr>
                        <th>提供時期</th>
                        <td>	クレジットカードでの購入手続き終了後、即時利用開始頂けます。	</td>
                    </tr>

                    <tr>
                        <th>返品・交換</th>
                        <td>インターネットサービスの性質上、返品・交換はございません。</td>
                    </tr>
                    <tr>
                        <th>システム要件</th>
                        <td>	PC専用サービスですので、PCからご利用下さい。
                            推奨ブラウザ：Google Chrome、safari
                            <span style="color: red;">Windows Internet Exploreは非対応ですので、上記ブラウザでご利用下さい。</span></td>
                    </tr>
                </table>
            </form>

        </div>

    </div>
    </div>

@endsection
