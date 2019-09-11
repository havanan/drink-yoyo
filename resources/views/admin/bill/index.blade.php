@extends('layouts.admin')
@section('title') Hóa Đơn @endsection
@section('breadcrumb')
    Danh sách hóa đơn
@endsection
@section('css')
    <link href="{{asset('admin/assets/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css"/>
@endsection
@section('js')
    <script src="{{asset('admin/assets/datatables/jquery.dataTables.min.js')}}" ></script>
    <script src="{{asset('admin/assets/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js')}}" ></script>
    <script src="{{asset('admin/js/datatable-init.js')}}" ></script>
    <script src="{{asset('admin/js/product.js')}}"></script>
    <script>
        dataTableDefautl('dataTable');
        var urlDelete = '{{route('admin.bill.delete')}}';
        var urlList = '{{route('admin.bill.getList')}}';

    </script>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="{{route('admin.product.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Tạo mới</a>
            @include('layouts.notification')
            <div class="card card-box">
                <div class="card-body ">
                    <table id="dataTable" style="width: 100%">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Khách hàng</th>
                            <th>Người bán</th>
                            <th>Bàn</th>
                            <th>Số lượng</th>
                            <th>Tổng tiền</th>
                            <th>Khuyến mãi</th>
                            <th>Giá cuối</th>
                            <th>Mô tả</th>
                            <th>Tạo lúc</th>
                            <th>Xóa lúc</th>
                            <th>Người xóa</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody id="tableBody">
                            @include('admin.bill.table_body')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
