
<div class="state-overview">
    <div class="row">
        <div class="col-md-12">
            <b class="text-dark"><i class="fa fa-calendar mr-3"></i> {{$data['title']}}</b>
        </div>
        <div class="col-xl-3 col-md-6 col-12">
            <div class="info-box bg-blue">
                <span class="info-box-icon push-bottom"><i class="material-icons">content_paste</i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Tổng Đơn</span>
                    <span class="info-box-number">{{$data['totalBill']['amount']}}</span><span> đơn</span>
                    <div class="progress">
                        <div class="progress-bar" style="width: {{$data['billPercent']}}%"></div>
                    </div>
                    <span class="progress-description">
						                    {{$data['billPercent']}}% trong tháng
						                  </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col-12">
            <div class="info-box bg-orange">
                <span class="info-box-icon push-bottom"><i class="material-icons">monetization_on</i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Tổng Tiền</span>
                    <span class="info-box-number">{{number_format($data['totalBill']['money'])}}</span><span> vnđ</span>
                    <div class="progress">
                        <div class="progress-bar" style="width: {{$data['billPercentMoney']}}%"></div>
                    </div>
                    <span class="progress-description">
						                    {{$data['billPercentMoney']}}% trong tháng
						                  </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col-12">
            <div class="info-box bg-purple">
                <span class="info-box-icon push-bottom"><i class="material-icons">local_drink</i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Menu</span>
                    <span class="info-box-number">{{$data['totalMenu']}}</span><span> món</span>
                    <div class="progress">
                        <div class="progress-bar" style="width: 100%"></div>
                    </div>
                    <span class="progress-description">Tổng món của quán</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col-12">
            <div class="info-box bg-success">
                <span class="info-box-icon push-bottom"><i class="material-icons">people_outline</i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Nhân Viên</span>
                    <span class="info-box-number">{{$data['staff']}}</span><span> người</span>
                    <div class="progress">
                        <div class="progress-bar" style="width: 100%"></div>
                    </div>
                    <span class="progress-description">Tổng nhân viên</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>
</div>
<!-- start admited patient list -->
<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="card  card-box">
            <div class="card-head">
                <header>Danh Sách Đơn Hàng</header>
                <div class="tools">
                    <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                </div>
            </div>
            <div class="card-body ">
                <div class="table-wrap">
                    <div class="table-responsive">
                        <table id="dataTable" style="width: 100%">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Người bán</th>
                                <th>Bàn</th>
                                <th>Số lượng</th>
                                <th>Tổng tiền</th>
                                <th>Khuyến mãi</th>
                                <th>Giá cuối</th>
                                <th>Mô tả</th>
                                <th>Tạo lúc</th>
                            </tr>
                            </thead>
                            <tbody id="tableBody">
                            @if(count($data['billData']) > 0)
                                @foreach($data['billData'] as $key => $item)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$item->staff_name != null ? $item->staff_name : ''}}</td>
                                        <td>{{$item->table_number}}</td>
                                        <td>{{$item->total}}</td>
                                        <td>{{number_format($item->total_money)}}</td>
                                        <td>{{number_format($item->discount)}} %</td>
                                        <td>{{number_format($item->price_final)}}</td>
                                        <td>{{$item->note}}</td>
                                        <td>{{$item->created_at != null ? date('H:i d/m/Y',strtotime($item->created_at)) : '-'}}</td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end admited patient list -->

<script>
    dataTableDefautl('dataTable');
</script>