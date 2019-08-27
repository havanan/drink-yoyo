@extends('layouts.admin')
@section('breadcrumb')
    Role List
@endsection
@section('css')
    <link href="{{asset('admin/assets/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css"/>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="btn-group">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#createModal">
                    Thêm mới <i class="fa fa-plus"></i>
                </button>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Role List</header>
                    <div class="tools">
                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                    </div>
                </div>
                <div class="card-body ">
                    <table id="dataTable" style="width: 100%">
                        <thead>
                            <tr>
                                <th>Tên</th>
                                <th>Tên hiển thị</th>
                                <th>Mô tả</th>
                                <th>Tạo lúc</th>
                                <th>Người sửa cuối</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Role Create</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="{{route('admin.role.create')}}">
                    <div class="modal-body">
                            @csrf
                            <div class="form-group">
                                <label for="simpleFormEmail">Tên</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group">
                                <label for="simpleFormPassword">Tên hiển thị</label>
                                <input type="text" class="form-control" name="display_name">
                            </div>
                            <div class="form-group">
                                <label for="simpleFormPassword">Mô tả</label>
                                <input type="text" class="form-control" name="description">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{asset('admin/assets/datatables/jquery.dataTables.min.js')}}" ></script>
    <script src="{{asset('admin/assets/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js')}}" ></script>
    <script src="{{asset('admin/js/datatable-init.js')}}" ></script>
    <script>
        var url ='{{route('admin.role.getRoleList')}}';
        var button = [];
        button.delete = true;
        button.edit = true;
        button.view = true;
        var columns = [
                { data: 'name' },
                { data: 'display_name'},
                { data: 'description'},
                { data: 'created_at'},
                { data: 'author_name'},
                { data: 'id',render:function (data, type, row, meta) {
                        return genButton(row,button)
                    }},
            ];
        getDataTable(url);
    </script>
@endsection