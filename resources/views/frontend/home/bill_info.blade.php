<link rel="stylesheet" type="text/css" href="{{asset('yoyo')}}/stylesheets/bootstrap.min.css"><script type="text/javascript" src="{{asset('yoyo')}}/javascript/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('yoyo')}}/javascript/tether.min.js"></script>
<script type="text/javascript" src="{{asset('yoyo')}}/javascript/bootstrap.min.js"></script>
<script src="{{asset('js/payment.js')}}"></script>
<style>
    .invoice-title h2, .invoice-title h3 {
        display: inline-block;
    }

    .table > tbody > tr > .no-line {
        border-top: none;
    }

    .table > thead > tr > .no-line {
        border-bottom: none;
    }

    .table > tbody > tr > .thick-line {
        border-top: 2px solid;
    }

</style>
<div class="container" id="billPrint">
    <div class="row">
        <div class="col-md-12">
            <div class="invoice-title ">
                <h2>Trà Chanh YoYo</h2>
                <p>72 Núi Vàng - Phường Trung Sơn</p>
                <p>035 337 3135</p>
            </div>
            <div class="text-center">
                <h3>HÓA ĐƠN THANH TOÁN</h3>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <address>
                        <h3 class="pull-right">HĐ # {{$billInfo['id']}}</h3>
                        <p><strong>Bàn số: {{$billInfo['table_number']}}</strong></p>
                        <p><strong>Khách hàng: {{$billInfo['customer_name']}}</strong></p>
                        <p>Nhân viên: {{$billInfo->getStaff->name}}</p>
                        <p>{{date('H:i - d/m/Y',strtotime($billInfo['created_at']))}}</p>
                    </address>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-responsive">
                        <div style="border-top: 2px dotted;border-bottom: 2px dotted;">
                            <table class="table table-condensed" style="width: 100%">
                                <thead>
                                <tr>
                                    <td><strong>STT</strong></td>
                                    <td class="text-center"><strong>Tên</strong></td>
                                    <td class="text-center"><strong>SL</strong></td>
                                    <td class="text-center"><strong>Giá</strong></td>
                                    <td class="text-center"><strong>Thành tiền</strong></td>
                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($cartInfo['list']) && count($cartInfo) > 0)
                                    <?php
                                    $i = 1;
                                    ?>
                                    @foreach($cartInfo['list'] as $key => $item)
                                        <tr>
                                            <td class="text-center">{{$i++}}</td>
                                            <td class="text-left">
                                                {{$item[0]['name']}}
                                            </td>
                                            <td class="text-center">
                                                {{$item[0]['qty']}}
                                            </td>
                                            <td class="text-center">{{number_format($item[0]['price'])}}</td>
                                            <td class="text-center"> {{number_format($item[0]['subtotal']) }}</td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>

                        <div>
                            <div style="float: left">
                                <h4><strong>Khuyến mại: </strong></h4>
                                <h4><strong>Tổng tiền: </strong></h4>
                                <h4><strong>Giá thanh toán: </strong></h4>
                            </div>
                            <div style="float: right;text-align: right">
                                <h4><strong> {{number_format($billInfo['discount'])}} VNĐ</strong></h4>
                                <h4><strong> {{number_format($billInfo['total_money'])}} VNĐ</strong></h4>
                                <h4><strong> {{number_format($billInfo['price_final'])}} VNĐ</strong></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>