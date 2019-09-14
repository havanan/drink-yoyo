<script type="text/javascript" src="{{asset('yoyo')}}/javascript/tether.min.js"></script>
<script type="text/javascript" src="{{asset('yoyo')}}/javascript/bootstrap.min.js"></script>
<script src="{{asset('js/payment.js')}}"></script>

<div class="" id="billPrint">
     @if(isset($cartInfo['list']))
        @if(count($cartInfo) > 1)
                            @foreach($cartInfo['list'] as $key => $item)
                                    <?php 
                                        $num = count(explode(' ', $item[0]['name']))
                                    ?>
                                 @if($item[0]['qty'] > 1)
                                        @for($i= 1;$i <= $item[0]['qty'];$i++)
                                            <div >
                                                <h5><strong>#{{$billInfo['id']}}</strong></h5>
                                                <h5><strong>{{$item[0]['name']}}</strong></h5>
                                                <h5><strong>{{number_format($item[0]['price'])}} VNĐ</strong></h5>
                                            </div>
                                        @endfor
                                    @else

                                        <div>
                                                <h5><strong>#{{$billInfo['id']}}</strong></h5>
                                                <h5><strong>{{$item[0]['name']}}</strong></h5>
                                                <h5><strong>{{number_format($item[0]['price'])}} VNĐ</strong></h5>
                                        </div>
                                    @endif   
                            @endforeach                 
         @endif                                                
    @endif
</div>
