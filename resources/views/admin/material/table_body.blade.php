@if(count($data) > 0)
    @foreach($data as $key => $item)
        <tr>
            <td>{{$key+1}}</td>
            <td> <img src="{{$item->avatar != null ? asset($item->avatar) : ''}}" width="50px">
                {{$item->name}}</td>
            <td>{{number_format($item->price)}}</td>
            <td>{{$item->weight}}</td>
            <td>{{$item->getUnit != null ?  $item->getUnit->name : '-'}}</td>
            <td>
                @if($item->status == 1)
                    <span class="text-success">Hiển thị</span>
                @else
                    <span class="text-danger">Ẩn</span>
                @endif
            </td>
            <td>{{$item->created_at != null ? date('H:i d/m/Y',strtotime($item->created_at)) : '-'}}</td>
            <td>{{$item->note}}</td>
            <td>
                <a href="{{route('admin.material.edit',$item->id)}}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                <button class="btn btn-danger" onclick="btnDelete({{$item->id}})"><i class="fa fa-trash-o"></i></button>
            </td>
        </tr>
    @endforeach
@endif