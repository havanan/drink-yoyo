@extends('layouts.admin')
@section('breadcrumb')
    Danh Sách Bàn
@endsection
@section('js')

@endsection
@section('content')
    <!-- chart start -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-head">
                    <header>
                        <div class="row">
                            <div>
                                <i class="material-icons">note</i>
                            </div>
                            <div class="ml-5 mt-1">
                                <span class="text-success">Trống</span>
                            </div>
                            <div class="ml-5 mt-1">
                                <span class="text-danger">Đang sử dụng</span>
                            </div>
                            <div class="ml-5 mt-1">
                                <span class="text-violet">Đang chờ đồ</span>
                            </div>
                        </div>
                    </header>
                    <div class="tools">
                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                    </div>
                </div>
                <div class="card-body no-padding height-9">
                    <div class="row">
                        @if(!empty($table))
                            @foreach($table as $item)
                                <div class="col-md-3 card card-box table-item">
                                    @if($item->status == 0)
                                        <img src="{{asset('admin/img/table_green.png')}}" class="table-img">
                                    @elseif($item->status == 2)
                                        <img src="{{asset('admin/img/table_violet.png')}}" class="table-img">
                                        @else
                                            <img src="{{asset('admin/img/table_red.png')}}" class="table-img">
                                    @endif
                                    <div class="text-center">
                                        <h3><strong>{{$item->name}}</strong></h3>
                                    </div>

                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Chart end -->

@endsection