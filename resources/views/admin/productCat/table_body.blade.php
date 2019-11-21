@if(count($data) > 0)
    @foreach($data as $key => $item)
        <tr>
            <td>{{$key+1}}</td>
            <td>
                <p class="name">{{$item->name}}</p>
            </td>
            <td>
                <p class="name">{{$item->category != null ? $item->category->name : ''}}</p>
            </td>
            <td>
                @if($item->status == 1)
                    <span class="text-success">Hiển thị</span>
                @else
                    <span class="text-danger">Ẩn</span>
                @endif
            </td>
            <td>
{{--                <a href="{{route('admin.product_type.edit',$item->id)}}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>--}}
                <button class="btn btn-danger" onclick="btnDelete({{$item->id}})"><i class="fa fa-trash-o"></i></button>
            </td>
        </tr>
    @endforeach
@endif