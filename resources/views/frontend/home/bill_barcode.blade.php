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
<div class="container body-bill" id="billPrint" style="  width: 200px; margin: 0 auto;height: 600px;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-responsive">
                        @if(isset($cartInfo['list']) && count($cartInfo) > 0)
                            @foreach($cartInfo['list'] as $key => $item)
                                <div style=" border: 1px solid;border-radius:5px;margin-top: 5px;padding: 5px;">
                                    <div style="border-bottom: 1px dotted">
                                        <p><strong>{{$item[0]['name']}}</strong></p>
                                    </div>
                                    <h5 style="margin-top: 10px"><strong>HĐ #{{$billInfo['id']}}</strong></h5>
                                    <p><strong>{{number_format($item[0]['price'])}} VNĐ</strong></p>
                                </div>
                            @endforeach
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>