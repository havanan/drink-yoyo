Chào: <strong>{{ $name }}</strong>,
<p>Báo Cáo Doanh Thu Từng Ngày</p>
<table style="width:100%">
    <tr>
        <th style="text-align: left">Ngày</th>
        <th style="text-align: left">Tổng đơn</th>
        <th style="text-align: left">Tổng tiền</th>
    </tr>
    @if(count($body) > 0)
        @foreach($body as $key=>$item)
            <tr>
                <td>{{date('d/m/Y',strtotime($item['date']))}}</td>
                <td>{{$item['amount']}}</td>
                <td>{{$item['money'] != null ? number_format($item['money']): 0}} vnđ</td>
            </tr>
        @endforeach
    @endif
</table>
<p>Cám ơn bạn đã tin tưởng và sử dụng dịch vụ !</p>