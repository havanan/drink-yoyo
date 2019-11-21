@extends('layouts.admin')
@section('title')Loại Sản phẩm @endsection
@section('breadcrumb')
    Danh sách loại sản phẩm
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
        var urlDelete = '{{route('admin.product_type.delete')}}';
        var urlList = '{{route('admin.product_type.getList')}}'
    </script>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tạo mới</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">Tạo loại sản phẩm</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="post" action="{{route('admin.product_type.create')}}">
                            {{csrf_field()}}

                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Thư mục cha</label>
                                    <select class="form-control" name="category_id">
                                        <option value="">Root</option>
                                        @if(count($categories) > 0)
                                            @foreach($categories as $key=>$item)
                                                <option value="{{$key}}" class="name">{{$item}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Tên loại sản phẩm</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                <button type="submit" class="btn btn-primary">Lưu</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @include('layouts.notification')
            <div class="card card-box">
                <div class="card-body ">
                    <table id="dataTable" style="width: 100%">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên</th>
                            <th>Thư mục cha</th>
                            <th>Trạng thái</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody id="tableBody">
                            @include('admin.productCat.table_body')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
