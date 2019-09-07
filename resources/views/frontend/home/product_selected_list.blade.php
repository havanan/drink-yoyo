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
        @if(isset($selected_product) && count($selected_product) > 0)
            @foreach($selected_product as $key => $item)
                <tr>
                    <td class="text-center">{{$key+1}}</td>
                    <td class="text-left">
                        <i class="fa fa-close text-danger mr-3 table-item"></i> {{$item->name}}
                    </td>
                    <td>
                        <input type="number" value="{{$item->amount}}" class="form-control" min="1">
                    </td>
                    <td class="text-center">{{number_format($item->price)}}</td>
                    <td class="text-center"> {{number_format($item->price * $item->amount) }}</td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>