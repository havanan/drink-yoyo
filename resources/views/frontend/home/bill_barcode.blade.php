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
</style>
<div class="container body-bill" id="billPrint">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-responsive">
                        @if(isset($cartInfo['list']) && count($cartInfo) > 0)
                            @foreach($cartInfo['list'] as $key => $item)
                                @if($item[0]['qty'] > 1)
                                    @for($i= 1;$i <= $item[0]['qty'];$i++)
                                        <div style="margin-top: 5px;padding: 5px;">
                                            <div style="border-bottom: 1px dotted">
                                                <span><strong>{{$item[0]['name']}}</strong></span>
                                                <span style="float: right"><strong>HĐ #{{$billInfo['id']}}</strong></span>
                                            </div>
                                            <span><strong>{{number_format($item[0]['price'])}} VNĐ</strong></span>
                                        </div>
                                    @endfor
                                @else
                                    <div style=" border: 1px solid;border-radius:5px;margin-top: 5px;padding: 5px;">
                                        <div style="border-bottom: 1px dotted">
                                            <span><strong>{{$item[0]['name']}}</strong></span>
                                            <span style="float: right"><strong>HĐ #{{$billInfo['id']}}</strong></span>

                                        </div>
                                        <span><strong>{{number_format($item[0]['price'])}} VNĐ</strong></span>
                                    </div>
                                @endif
                            @endforeach
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>