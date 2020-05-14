@extends('layouts.admin')
@section('title')
    Bảng Tổng Hợp Đồ Uống Ưa Thích
@endsection
@section('breadcrumb')
    Bảng Tổng Hợp Đồ Uống Ưa Thích
@endsection
@section('css')
    <link href="{{asset('admin/assets/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css"/>
@endsection
@section('js')
    <script>
        var urlList = '{{route('admin.report.findDrinkByDateType')}}';
        var urlDateType = '{{route('admin.report.getDateType')}}';
    </script>
@endsection
@section('js-top')
    <!-- data table -->
    <script src="{{asset('admin/assets/datatables/jquery.dataTables.min.js')}}" ></script>
    <script src="{{asset('admin/assets/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js')}}" ></script>
    <script src="{{asset('admin/js/datatable-init.js')}}" ></script>
    <!-- chart js -->
    <script src="{{asset('admin/assets/chart-js/Chart.bundle.js')}}" ></script>
    <script src="{{asset('admin/assets/chart-js/utils.js')}}" ></script>
@endsection
@section('content')
    <!-- start widget -->
    <div class="row">
        <div class="col-md-12">
            <div class="card card-topline-red">
                <div class="card-body no-padding height-9">
                    <form class="row" method="get">
                        <div class="col-md-3">
                            <label>Loại sản phẩm</label>
                            <select class="form-control" name="type_id" id="type_id">
                                <option value="">Tất cả</option>
                                @if(isset($types) && count($types) > 0)
                                    @foreach($types as $key => $item)
                                        <option value="{{$key}}">{{$item}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label>Xem theo</label>
                            <div class="form-group">
                                <select  class="form-control" id="slt-date-type" onchange="getDateType()">
                                    <option value="date">Khoảng ngày</option>
                                    <option value="week">Tuần</option>
                                    <option value="month">Tháng</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="ipt-date-type">
                                @include('admin.report.date_type')
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div id="p2" class="mdl-progress mdl-js-progress mdl-progress__indeterminate hidden"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="dashboard-data">

    </div>


@endsection