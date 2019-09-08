<table class="table table-hover">
    <thead>
    <tr>
        <th class="text-center">STT</th>
        <th  class="text-left">Tên</th>
        <th class="text-left" style="width: 20%">Số lượng</th>
        <th class="text-center">Giá</th>
        <th class="text-center">Thành tiền</th>
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
                        <i class="fa fa-close text-danger mr-3 table-item" onclick="removeItem('{{$item[0]->rowId}}')"></i> {{$item[0]->name}}
                    </td>
                    <td>
                        <input type="number" value="{{$item[0]->qty}}" class="form-control" min="1" onchange="updateCartItem('{{$item[0]->rowId}}')" id="item-{{$item[0]->rowId}}">
                    </td>
                    <td class="text-center">{{number_format($item[0]->price)}}</td>
                    <td class="text-center"> {{number_format($item[0]->subtotal) }}</td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>
<table>
    <tbody>
    <tr>
        <td>Khuyến Mại</td>
        <td class="subtotal"><span id="priceDiscount">{{isset($cartInfo['disCount']) ? number_format($cartInfo['disCount']) : 0}}</span> VNĐ</td>
    </tr>
    <tr>
        <td>Tổng Tiền</td>
        <td class="price-total"><span id="money">@if(isset($cartInfo['totalMoney'])) {{number_format($cartInfo['totalMoney'])}} @endif</span> VNĐ</td>
    </tr>
    <tr>
        <td>Giá Cuối</td>
        <td class="price-total"><span id="money">{{isset($cartInfo['priceFinal']) ? number_format($cartInfo['priceFinal']) : 0}} </span> VNĐ</td>
    </tr>
    </tbody>
</table>