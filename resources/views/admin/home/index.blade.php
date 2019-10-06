@extends('layouts.admin')
@section('title')
    Bảng Tổng Hợp
@endsection
@section('breadcrumb')
    Bảng Tổng Hợp
@endsection
@section('css')
    <link href="{{asset('admin/assets/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css"/>
@endsection
@section('js')
    <!-- chart js -->
    <script src="{{asset('admin/assets/chart-js/Chart.bundle.js')}}" ></script>
    <script src="{{asset('admin/assets/chart-js/utils.js')}}" ></script>
    <script>
        var urlList = '{{route('admin.dashboard.findData')}}';
        var data_db =<?php echo $chartBillMonth ?>;
        makeLineChart('',data_db);
    </script>
@endsection
@section('js-top')
    <!-- data table -->
    <script src="{{asset('admin/assets/datatables/jquery.dataTables.min.js')}}" ></script>
    <script src="{{asset('admin/assets/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js')}}" ></script>
    <script src="{{asset('admin/js/datatable-init.js')}}" ></script>
@endsection
@section('content')
    <!-- start widget -->
    <div class="row">
        <div class="col-md-12">
            <div class="card card-topline-red">
                <div class="card-body no-padding height-9">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <select class="form-control input-height" onchange="getByTime('sltTime')" id="sltTime">
                                    <option value="today">Hôm nay</option>
                                    <option value="yesterday">Hôm qua</option>
                                    <option value="weekly">Tuần này</option>
                                    <option value="monthly">Tháng này</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div id="p2" class="mdl-progress mdl-js-progress mdl-progress__indeterminate hidden"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="dashboard-data">
        @include('admin.home.dashboard_data')
    </div>
    <!-- chart start -->
    <div class="row">
        <div class="col-md-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Biểu Đồ Tăng Trưởng</header>
                    <div class="tools">
                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                    </div>
                </div>
                <div class="card-body no-padding height-9">
                    <div class="row">
                        <canvas id="chartjs_line"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection