@extends('layouts.admin')
@section('breadcrumb')
    Sửa sản phẩm
@endsection
@section('css')
    <!-- Material Design Lite CSS -->
    {{--<link rel="stylesheet" href="{{asset('admin/assets/material/material.min.css')}}">--}}
    {{--<link rel="stylesheet" href="{{asset('admin/css/material_style.css')}}">--}}
    <link href="{{asset('css/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/css/formlayout.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('js')
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script src="{{asset('vendor/laravel-filemanager/js/stand-alone-button.js')}}"></script>
    <script src="{{asset('vendor/laravel-filemanager/js/lfm.js')}}"></script>
    <script src="{{asset('admin/js/product.js')}}"></script>

    <script>
        var categories = '<?php echo json_encode($categories) ?>';
            categories = JSON.parse(categories);
        var domain = "{{ url(config('lfm.url_prefix')) }}";
        genSelect2('select2',categories);
        standAloneButton(domain);
    </script>
@endsection
@section('content')
    <!-- chart start -->
    <div class="row">
        <div class="container-fluid">
            <div class="card card-box">
                <div class="card-head">
                    <header>Sửa Sản Phẩm</header>
                    <div class="tools">
                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                    </div>
                </div>
                <div class="card-body no-padding height-9">
                    @include('layouts.notification')
                    <form method="post" action="{{route('admin.product.update')}}" class="row">
                        @csrf
                        <input type="hidden" name="id" value="{{$data['id']}}">
                        <div class="col-md-4">
                            <div class="input-group">
                                   <span class="input-group-btn">
                                     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                       <i class="fa fa-picture-o"></i> Chọn ảnh
                                     </a>
                                   </span>
                                <input id="thumbnail" class="form-control hidden" type="text" name="avatar" value="{{$data['avatar']}}" >
                            </div>

                            <img id="holder" class="image-preview" src="{{$data['avatar'] != null ? asset('/').$data['avatar'] : asset('img/no_image.png')}}">

                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Tên sản phẩm" required value="{{$data['name']}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Loại sản phẩm</label>
                                        <select class="form-control select2" name="type_id" id="type_id">

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="number" min="0" class="form-control" name="amount" placeholder="Số lượng" value="{{$data['amount']}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="unit" placeholder="Đơn vị" value="{{$data['unit']}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">$</span>
                                        <input type="number" min="0" class="form-control" placeholder="Giá nhập" name="current_price" value="{{$data['current_price']}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">$</span>
                                        <input type="number" min="0" class="form-control" placeholder="Giá bán" name="price" required value="{{$data['price']}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="radio">
                                            <input type="radio" name="status" id="status_show" value="1"  class="form-control" @if($data['status'] == 1) checked @endif>
                                            <label for="status_show">
                                                Hiển thị
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="radio">
                                            <input type="radio" name="status" id="status_hidden" value="0"  class="form-control" @if($data['status'] == 0) checked @endif>
                                            <label for="status_hidden">
                                                Ẩn
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="radio">
                                            <input type="radio" name="type" id="type_show" value="1" class="form-control" @if($data['type'] == 1) checked @endif>
                                            <label for="type_show">
                                                Đồ bán trực tiếp
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="radio">
                                            <input type="radio" name="type" id="type_hidden" value="0"  class="form-control" @if($data['type'] == 0) checked @endif>
                                            <label for="type_hidden">
                                                Topping
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="note" placeholder="Ghi chú">{{$data['note']}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <div class="form-group">
                                        <button class="btn btn-info mr-3" type="submit">Sửa</button>
                                        <button class="btn btn-danger mr-3" type="reset">Nhập lại</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Chart end -->
@endsection