@extends('layouts.yoyo')
@section('css')
    <link href="{{asset('admin/assets/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css"/>
@endsection
@section('js')
    <script src="{{asset('admin/assets/datatables/jquery.dataTables.min.js')}}" ></script>
    <script src="{{asset('admin/assets/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js')}}" ></script>
    <script src="{{asset('admin/js/datatable-init.js')}}" ></script>
    <script src="{{asset('js/payment.js')}}"></script>
    <script>
        dataTableDefautl('dataTable')
        var billInfoUrl = '{{route('getBillInfo')}}';
        var billBarcodeUrl = '{{route('getBillBarcode')}}';
        var billStaffUrl = '{{route('getBillStaff')}}';

    </script>
@endsection
@section('content')
    <section class="flat-imagebox style2 background" style="background-color: white">
        <div class="container-fluid">
            <div class="row">
                <div class="table-responsive">
                    <table id="dataTable" class="table ">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên khách</th>
                            <th>Bàn</th>
                            <th>Người bán</th>
                            <th>Số lượng</th>
                            <th>Tổng tiền</th>
                            <th>Khuyến mãi</th>
                            <th>Giá cuối</th>
                            <th>Ghi chú</th>
                            <th>Tạo lúc</th>
                            <th>Tác vụ</th>
                        </tr>
                        </thead>
                        <tbody>
                            @if(count($data) > 0)
                                @foreach($data as $key => $item)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$item->customer_name}}</td>
                                        <td>{{$item->table_number}}</td>
                                        <td>{{$item->getStaff != null ? $item->getStaff->name : ''}}</td>
                                        <td>{{$item->total}}</td>
                                        <td>{{number_format($item->total_money)}}</td>
                                        <td>{{number_format($item->discount)}} %</td>
                                        <td>{{number_format($item->price_final)}}</td>
                                        <td>{{$item->note}}</td>
                                        <td>{{$item->created_at != null ? date('H:i d/m/Y',strtotime($item->created_at)) : '-'}}</td>
                                        <td>
                                            <button class="btn btn-primary" data-toggle="modal" onclick="getBill({{$item->id}})" title="In hóa đơn khách hàng"><i class="fa fa-print"></i></button>
                                            <button class="btn btn-success" data-toggle="modal" onclick="getStaffBill({{$item->id}})" title="In phiếu đặt đồ"><i class="fa fa-sticky-note-o"></i></button>
                                            <button class="btn btn-danger"  data-toggle="modal" onclick="getBarcode({{$item->id}})" title="In tem nhãn"><i class="fa fa-barcode"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
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
