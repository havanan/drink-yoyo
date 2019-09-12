<script type="text/javascript" src="{{asset('yoyo')}}/javascript/tether.min.js"></script>
<script type="text/javascript" src="{{asset('yoyo')}}/javascript/bootstrap.min.js"></script>
<script src="{{asset('js/payment.js')}}"></script>

<div class="" id="billPrint">
     @if(isset($cartInfo['list']))
        @if(count($cartInfo) > 1)
                            @foreach($cartInfo['list'] as $key => $item)

                                 @if($item[0]['qty'] > 1)
                                        @for($i= 1;$i <= $item[0]['qty'];$i++)
                                            <div style="height:23px">
                                                 <span style="font-size: 7px"><strong>#{{$billInfo['id']}}-{{$item[0]['name']}}</strong></span>
                                                 <br>
                                                 <span style="font-size: 5px"><strong>{{number_format($item[0]['price'])}} VNĐ</strong></span>
                                            </div>
                                        @endfor
                                    @else
                                        <div style="height: 23px">
                                                 <span style="font-size: 7px"><strong>#{{$billInfo['id']}}-{{$item[0]['name']}}</strong></span>
                                                 <br>
                                                 <span style="font-size: 5px"><strong>{{number_format($item[0]['price'])}} VNĐ</strong></span>
                                        </div>
                                    @endif   
                            @endforeach                 
         @endif                                                
    @endif
</div>
