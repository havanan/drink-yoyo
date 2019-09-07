@extends('layouts.admin')
@section('breadcrumb')
    Order
@endsection
@section('css')
    <link href="{{asset('admin/css/formlayout.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('js')
   <script>
       var urlList = '{{route('admin.card.menuRefresh')}}';
       function refreshMenu() {

       }
   </script>
@endsection
@section('content')
    <!-- chart start -->
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-head">
                    <header>
                        Menu
                    </header>
                    <div class="tools">
                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;" onclick="refreshMenu()"></a>
                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                    </div>
                </div>
                <div class="card-body no-padding height-9">
                    <div class="row">
                        <div class="col-md-12">
                           <div class="form-group">
                               <input type="text" class="form-control" placeholder="Tìm sản phẩm...">
                           </div>
                        </div>
                    </div>
                    <div class="row" id="menuList">
                        @include('admin.cart.include.menu')
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-head">
                    <header>
                        Thông tin order
                    </header>
                </div>
                <div class="card-body no-padding height-9">
                    @include('admin.cart.include.order_form')
                </div>
            </div>
        </div>
    </div>
    <!-- Chart end -->

@endsection