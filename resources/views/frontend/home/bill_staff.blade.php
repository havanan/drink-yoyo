<script type="text/javascript" src="{{asset('yoyo')}}/javascript/tether.min.js"></script>
<script type="text/javascript" src="{{asset('yoyo')}}/javascript/bootstrap.min.js"></script>
<script src="{{asset('js/payment.js')}}"></script>
<style>
    address{
        margin-bottom: 0;
    }
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
    .text-center{text-align: center}


</style>
<div class="container" id="billPrint" style="  width: 500px; margin: 0 auto;">
    <div class="row">
        <div class="col-md-12">
            <div style="text-align: center;margin-top: 10px">
                <h4>Phiếu Order Bàn: {{$billInfo['table_number']}}</h4>
            </div>
            <hr>
            <div class="row">
                <address style="padding-left: 10px">
                    <h4>HĐ # {{$billInfo['id']}}</h4>
                    <span>Nhân viên: {{$billInfo->getStaff->name}}</span>
                    <br>
                    <span>{{date('H:i - d/m/Y',strtotime($billInfo['created_at']))}}</span>
                </address>
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
                                    <td ><strong>Tên</strong></td>
                                    <td class="text-center"><strong>SL</strong></td>
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
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>

                        <div style="margin-top: 5px">
                            <span><strong>Ghi chú:</strong></span>
                            {{$billInfo['note']}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>