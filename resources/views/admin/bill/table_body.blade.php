@if(count($data) > 0)
    @foreach($data as $key => $item)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$item->customer_name}}</td>
            <td>{{$item->getStaff != null ? $item->getStaff->name : ''}}</td>
            <td>{{$item->table_number}}</td>
            <td>{{$item->total}}</td>
            <td>{{number_format($item->total_money)}}</td>
            <td>{{number_format($item->discount)}} %</td>
            <td>{{number_format($item->price_final)}}</td>
            <td>{{$item->note}}</td>
            <td>{{$item->created_at != null ? date('H:i d/m/Y',strtotime($item->created_at)) : '-'}}</td>
            <td>{{$item->deleted_at != null ? date('H:i d/m/Y',strtotime($item->deleted_at)) : '-'}}</td>
            <td>{{$item->getDeletedUser != null ? $item->getDeletedUser->name : ''}}</td>

            <td>
                {{--<button class="btn btn-primary"  ><i class="fa fa-print"></i></button>--}}
                <button class="btn btn-danger" onclick="btnDelete({{$item->id}})"><i class="fa fa-trash-o"></i></button>
            </td>
        </tr>
    @endforeach
@endif