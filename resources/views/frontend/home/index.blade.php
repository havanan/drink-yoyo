@extends('layouts.yoyo')
@section('js')
    <script>
        var addUrl = '{{route('addToCart')}}';
        var payUrl = '{{route('payment')}}';
        var createUrl = '{{route('destroyCart')}}';
        var disCountUrl = '{{route('disCount')}}';
        var removeUrl = '{{route('remove')}}';
        var updateUrl = '{{route('update')}}';
        var billInfoUrl = '{{route('getBillInfo')}}';
        var billBarcodeUrl = '{{route('getBillBarcode')}}';
        var billStaffUrl = '{{route('getBillStaff')}}';
    </script>
    <script src="{{asset('js/payment.js')}}"></script>
@endsection
@section('content')
    <section class="flat-imagebox style2 background">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="product-wrap">
                        <div class="product-tab style1">
                            <ul class="tab-list">
                                @if(count($product_types) > 0)
                                    @foreach($product_types as $key => $type)
                                        @if($type->getAllProduct != null && count($type->getAllProduct) > 0)
                                        <li class="@if($key==0) active @endif "><span class="uppercase">{{$type->name}}</span></li>
                                        @endif
                                    @endforeach
                                @endif
                            </ul><!-- /.tab-list -->
                        </div><!-- /.product-tab style1 -->
                        <div class="tab-item">
                            @if(count($product_types) > 0)
                                @foreach($product_types as $key => $type)
                                    @if($type->getAllProduct != null && count($type->getAllProduct) > 0)
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    @foreach($type->getAllProduct as $product)
                                                        <div class="col-md-3">
                                                            <div class="product-box">
                                                                <div class="imagebox style2">
                                                                    <div class="box-image">
                                                                        <a href="#" title="{{$product->name}}">
                                                                            <img src="{{asset($product->avatar)}}" alt="{{$product->name}}" class="img-item">
                                                                        </a>
                                                                    </div><!-- /.box-image -->
                                                                    <div class="box-content">
                                                                        <div class="product-name">
                                                                            <a href="#" title="">{{$product->name}}</a>
                                                                        </div>
                                                                        <div class="price">
                                                                            <span class="sale">{{number_format($product->price)}} VNĐ</span>
                                                                        </div>
                                                                    </div><!-- /.box-content -->
                                                                    <div class="box-bottom">
                                                                        <div class="btn-add-cart">
                                                                            <a class="table-item" onclick="addToCart({{$product->id}})">
                                                                                <img src="{{asset('yoyo/images/icons/add-cart.png')}}" alt="">Chọn
                                                                            </a>
                                                                        </div>
                                                                    </div><!-- /.box-bottom -->
                                                                </div><!-- /.imagebox style2 -->
                                                            </div><!-- /.product-box -->
                                                        </div><!-- /.col-md-6 -->
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.row -->
                                    @endif
                                @endforeach
                            @endif
                        </div><!-- /.tab-item -->
                    </div><!-- /.product-wrap -->
                </div><!-- /.col-md-12 -->
                <div class="col-md-4">
                    <div class="cart-totals">
                        <h3>Hóa Đơn</h3>
                        <form id="frmOrder">
                            @include('frontend.home.order_form')
                            <div class="row" id="selected-product">
                                @include('frontend.home.product_selected_list')
                            </div>
                            <div class="row ">
                                <div class="col-md-4">
                                    <button class="btn btn-primary" title="Tạo Hóa Đơn Mới" onclick="creatNewOrder()"><i class="fa fa-plus"></i> <strong>Tạo Đơn Mới</strong></button>
                                </div>
                                <div class="col-md-4">
                                </div>
                                <div class="col-md-4">
                                    <button class="btn btn-danger" title="" onclick="pay()"><i class="fa fa-credit-card"></i> <strong>Thanh toán</strong></button>
                                </div>
                            </div>
                            <div class="row mt-20">
                                <div class="col-md-4">
                                    <button class="btn btn-success " title="In Hóa Đơn" type="button" onclick="getBill()"><i class="fa fa-print"></i> <strong>In Hóa Đơn</strong></button>
                                </div>
                                <div class="col-md-4">
                                    <button class="btn btn-warning " title="In Order" type="button" onclick="getStaffBill()" ><i class="fa fa-sticky-note-o"></i> <strong>In Order</strong></button>
                                </div>
                                <div class="col-md-4">
                                    <button class="btn btn-dark" title="In Tem Nhãn" type="button" onclick="getBarcode()" ><i class="fa fa-qrcode"></i> <strong>In Tem Nhãn</strong></button>
                                </div>
                            </div>

                        </form><!-- /form -->
                    </div><!-- /.cart-totals -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-imagebox style2 -->

    <div class="modal fade bill-body" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content bill-preview" style="height: 950px !important;">
                <div id="bodyBill"></div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" onclick="printBill()" ><i class="fa fa-print"></i> In</button>
                <button class="btn btn-danger" data-dismiss="modal"> Đóng</button>
            </div>
        </div>
    </div>
@endsection
