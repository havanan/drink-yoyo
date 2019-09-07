
<div class="borderBox light">
    <div class="borderBox-title tabbable-line">
        <ul class="nav nav-tabs fl-left">
            @if(count($product_categories) > 0)
                @foreach($product_categories as $key => $item)
                    <li class="nav-item">
                        <a  href="#tab{{$key}}" class="cat-item @if($key==0) active @endif "  data-toggle="tab" >
                            <strong class="uppercase">{{$item->name}}</strong>
                        </a>
                    </li>
                @endforeach
            @endif
        </ul>
    </div>
    <div class="borderBox-body">
        <div class="tab-content">
            @if(count($product_categories) > 0)
                @foreach($product_categories as $key => $item)
                    <div class="tab-pane @if($key==0) active @endif" id="tab{{$key}}">
                        <ul class="activity-list">
                            @if(isset($item->getAllType) && count($item->getAllType) > 0)
                                @foreach($item->getAllType as $type)
                                    <li>
                                        <strong class="uppercase"> {{$type->name}}</strong>
                                        <div class="row">
                                            @if($type->getAllProduct != null)
                                                @foreach($type->getAllProduct as $product)
                                                    <div class="col-md-3 table-item card card-box">
                                                        <img src="{{asset('img/'.$product->avatar)}}" alt="{{$product->name}}" class="menu-product">
                                                        <h4>{{$product->name}}</h4>
                                                        <p class="text-danger">{{number_format($product->price)}} VNĐ</p>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>