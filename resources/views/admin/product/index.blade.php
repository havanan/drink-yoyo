@extends('layouts.admin')
@section('breadcrumb')
    Danh sách sản phẩm
@endsection
@section('css')
    <link href="{{asset('admin/assets/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css"/>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('layouts.notification')
            <div class="card card-box">
                <div class="card-body ">
                    <table id="dataTable" style="width: 100%">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên</th>
                            <th>Giá nhập</th>
                            <th>Giá bán</th>
                            <th>Đơn vị</th>
                            <th>Số lượng</th>
                            <th>Loại sản phẩm</th>
                            <th>Mô tả</th>
                            <th>Trạng thái</th>
                            <th>Tạo lúc</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($data) > 0)
                            @foreach($data as $key => $item)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td> <img src="{{$item->avatar != null ? asset('img/'.$item->avatar) : ''}}" width="50px">
                                    {{$item->name}}</td>
                                <td>{{number_format($item->current_price)}}</td>
                                <td>{{number_format($item->price)}}</td>
                                <td>{{$item->unit}}</td>
                                <td>{{$item->amount}}</td>
                                <td>{{$item->getType != null ?  $item->getType->name : '-'}}</td>
                                <td>{{$item->note}}</td>
                                <td>
                                    @if($item->status == 1)
                                        <span class="text-success">Hiển thị</span>
                                    @else
                                        <span class="text-danger">Ẩn</span>
                                    @endif
                                </td>
                                <td>{{$item->created_at != null ? date('H:i d/m/Y',strtotime($item->created_at)) : '-'}}</td>
                                <td>
                                    <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger" onclick="btnDelete({{$item->id}})"><i class="fa fa-trash-o"></i></button>
                                </td>
                            </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{asset('admin/assets/datatables/jquery.dataTables.min.js')}}" ></script>
    <script src="{{asset('admin/assets/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js')}}" ></script>
    <script src="{{asset('admin/js/datatable-init.js')}}" ></script>
    <script>
        dataTableDefautl('dataTable');
        var urlDelete = '{{route('admin.product.delete')}}'
        function btnDelete(id) {
            event.preventDefault();
            swal({
                    title: "Bạn chắc chắn xóa ?",
                    text: "Sản phẩm sẽ không thể khôi phục lại",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Xóa",
                    cancelButtonText: "Hủy",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function(isConfirm){
                    if (isConfirm) {
                        swal("Xóa thành công !", id, "success");

                    } else {
                        swal("Cancelled", "Sản phẩm vẫn an toàn :))", "error");
                    }
                });
        }
    </script>
@endsection