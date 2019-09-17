@extends('layouts.admin')
@section('title') Hàng Hóa @endsection

@section('breadcrumb')
    Sửa Hàng Hóa
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
        var domain = "{{ url(config('lfm.url_prefix')) }}";
        standAloneButton(domain);
    </script>
@endsection
@section('content')
    <!-- chart start -->
    <div class="row">
        <div class="container-fluid">
            @include('admin.material.unit_form')
            <div class="card card-box">
                <div class="card-head">
                    <header>Sửa Hàng Hóa</header>
                    <div class="tools">
                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                    </div>
                </div>
                <div class="card-body no-padding height-9">
                    @include('layouts.notification')
                    <form method="post" action="{{route('admin.material.update')}}" class="row">
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

                            <img id="holder" class="image-preview" src="{{$data['avatar'] != null ? asset($data['avatar']) : asset('img/no_image.png')}}">

                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Tên Hàng Hóa" required value="{{$data['name']}}">
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
                                        <select class="form-control" name="unit_id">
                                            @if(count($units) > 0)
                                                @foreach($units as $key => $item)
                                                    <option value="{{$item->id}}" @if($data['unit_id'] == $item->id) selected @endif>{{$item->name}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">$</span>
                                        <input type="number" min="0" class="form-control" placeholder="Giá nhập" name="price" value="{{$data['price']}}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-database text-dark"></i></span>
                                        <input type="number" min="0" class="form-control" placeholder="Định lượng" name="weight" value="{{$data['weight']}}" required>
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
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="note" placeholder="Ghi chú">{{$data['note']}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <div class="form-group">
                                        <button class="btn btn-danger mr-3" type="reset">Nhập lại</button>
                                        <button class="btn btn-info mr-3" type="submit">Sửa</button>

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