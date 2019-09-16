@extends('layouts.admin')
@section('title') Sản phẩm @endsection
@section('breadcrumb')
    Danh sách sản phẩm
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
        var urlDelete = '{{route('admin.material.delete')}}';
        var urlList = '{{route('admin.material.getList')}}';

    </script>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="{{route('admin.material.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Tạo mới</a>
            @include('layouts.notification')
            <div class="card card-box">
                <div class="card-body ">
                    <table id="dataTable" style="width: 100%">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên</th>
                            <th>Giá nhập</th>
                            <th>Đơn vị</th>
                            <th>Số lượng</th>
                            <th>Cân nặng</th>
                            <th>Mô tả</th>
                            <th>Trạng thái</th>
                            <th>Tạo lúc</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody id="tableBody">
                            @include('admin.material.table_body')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
