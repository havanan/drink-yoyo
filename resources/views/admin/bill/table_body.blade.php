<table id="dataTable" style="width: 100%">
    <thead>
    <tr>
        <th>STT</th>
        <th>Người bán</th>
        <th>Bàn</th>
        <th>Số lượng</th>
        <th>Tổng tiền</th>
        <th>Khuyến mãi</th>
        <th>Giá cuối</th>
        <th>Mô tả</th>
        <th>Tạo lúc</th>
        <th>Action</th>

    </tr>
    </thead>
    <tbody>
    @if(count($data) > 0)
        @foreach($data as $key => $item)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$item->staff_name != null ? $item->staff_name : ''}}</td>
                <td>{{$item->table_number}}</td>
                <td>{{$item->total}}</td>
                <td>{{number_format($item->total_money)}}</td>
                <td>{{number_format($item->discount)}} %</td>
                <td>{{number_format($item->price_final)}}</td>
                <td>{{$item->note}}</td>
                <td>{{$item->created_at != null ? date('H:i d/m/Y',strtotime($item->created_at)) : '-'}}</td>
                <td>
                    {{--<button class="btn btn-primary"  ><i class="fa fa-print"></i></button>--}}
                    <button class="btn btn-primary" onclick="btnView({{$item->id}})"><i class="fa fa-sticky-note-o"></i></button>
                    <button class="btn btn-danger" onclick="btnDelete({{$item->id}})"><i class="fa fa-trash-o"></i></button>
                </td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>
<script>
    dataTableDefautl('dataTable');
</script>
