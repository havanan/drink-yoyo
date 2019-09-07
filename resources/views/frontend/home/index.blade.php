@extends('layouts.yoyo')
@section('js')
    <script>
       function addToCart(id) {

       }
    </script>
@endsection
@section('content')
    <section class="flat-imagebox style2 background">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="product-wrap">
                        <div class="product-tab style1">
                            <ul class="tab-list">
                                @if(count($product_categories) > 0)
                                    @foreach($product_categories as $key => $item)
                                        <li class="@if($key==0) active @endif "><span class="uppercase">{{$item->name}}</span></li>
                                    @endforeach
                                @endif
                            </ul><!-- /.tab-list -->
                        </div><!-- /.product-tab style1 -->
                        <div class="tab-item">
                            @if(count($product_categories) > 0)
                                @foreach($product_categories as $key => $item)
                                    <div class="row">
                                        @if(isset($item->getAllType) && count($item->getAllType) > 0)
                                            @foreach($item->getAllType as $type)
                                                <div class="col-md-12">
                                                    <div class="container-fluid">
                                                        <strong class="uppercase"> {{$type->name}}</strong>
                                                        <div class="row">
                                                            @if($type->getAllProduct != null)
                                                                @foreach($type->getAllProduct as $product)
                                                                    <div class="col-md-3">
                                                                        <div class="product-box">
                                                                            <div class="imagebox style2">
                                                                                <div class="box-image">
                                                                                    <a href="#" title="{{$product->name}}">
                                                                                        <img src="{{asset('img/'.$product->avatar)}}" alt="{{$product->name}}" class="img-item">
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
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div><!-- /.row -->
                                @endforeach
                            @endif
                        </div><!-- /.tab-item -->
                    </div><!-- /.product-wrap -->
                </div><!-- /.col-md-12 -->
                <div class="col-md-4">
                    <div class="cart-totals">
                        <h3>Hóa Đơn</h3>
                        <form action="#" method="get" accept-charset="utf-8">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label >Tên khách hàng <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="customer_name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label >Số bàn <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" name="table_number" required min="1">
                                </div>
                                <div class="form-group col-md-6">
                                    <label >Giảm giá (%) </label>
                                    <input type="number" class="form-control" name="discount" min="0" value="0">
                                </div>
                                <div class="form-group col-md-12">
                                    <label >Ghi chú </label>
                                    <input type="text" class="form-control" name="note">
                                </div>
                            </div>
                            <div class="row" id="selected-product">
                                @include('frontend.home.product_selected_list')
                            </div>
                            <table>
                                <tbody>
                                <tr>
                                    <td>Khuyến Mại</td>
                                    <td class="subtotal">0 VNĐ</td>
                                </tr>
                                <tr>
                                    <td>Tổng Tiền</td>
                                    <td class="price-total">0 VNĐ</td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="btn-cart-totals">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a href="#" class="create" title="">Tạo Mới</a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="#" class="checkout" title="">Thanh Toán</a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="#" class="update" onclick="javascript:window.print();"><i class="fa fa-print"></i> In HĐ</a>
                                    </div>

                                </div>
                            </div><!-- /.btn-cart-totals -->
                        </form><!-- /form -->
                    </div><!-- /.cart-totals -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-imagebox style2 -->
@endsection