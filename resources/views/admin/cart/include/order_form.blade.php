<form>
    <div class="form-group">
        <label >Tên khách hàng <span class="text-danger">*</span></label>
        <input type="text" class="form-control" name="customer_name" required>
    </div>
    <div class="form-group">
        <label >Số bàn <span class="text-danger">*</span></label>
        <input type="number" class="form-control" name="table_number" required min="1">
    </div>
    <div class="form-group">
        <label >Giảm giá (%) </label>
        <input type="number" class="form-control" name="discount" min="0">
    </div>
    <div class="form-group">
        <label >Ghi chú </label>
        <input type="text" class="form-control" name="note">
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <div class="radio p-0">
                    <input id="uongtructiep" type="radio" checked="checked" name="type" value="1">
                    <label for="uongtructiep">
                        Khách uống trực tiếp
                    </label>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <div class="radio p-0">
                    <input id="muave" type="radio" name="type" value="0">
                    <label for="muave">
                        Khách mua về
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label>Danh sách đã chọn</label>
        <table class="mdl-data-table ml-table-striped ml-table-bordered mdl-js-data-table">
            <thead>
            <tr>
                <th>STT</th>
                <th  class="text-left">Tên</th>
                <th class="text-left">Số lượng</th>
                <th class="text-left">Giá</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="text-center">1</td>
                <td class="text-left">
                   <i class="fa fa-close text-danger mr-3 table-item"></i> Trà chanh
                </td>
                <td>
                    <input type="number" value="1" class="form-control" min="1">
                </td>
                <td>10,000 VNĐ</td>
            </tr>
            <tr>
                <td class="text-center">2</td>
                <td class="text-left">
                   <i class="fa fa-close text-danger mr-3 table-item"></i> Trà đào
                </td>
                <td>
                    <input type="number" value="1" class="form-control" min="1">
                </td>
                <td>15,000 VNĐ</td>
            </tr>
            <tr>
                <td class="text-center">3</td>
                <td class="text-left">
                   <i class="fa fa-close text-danger mr-3 table-item"></i> Hướng dương
                </td>
                <td>
                    <input type="number" value="1" class="form-control" min="1">
                </td>
                <td>10,000 VNĐ</td>
            </tr>
            </tbody>
        </table>
    </div>
</form>
<div class="col-md-12">
    <div class="pull-right m-t-30 text-right">
        <p>Tổng tiền: 35,000 VNĐ</p>
        <p>Giảm giá : 0 % </p>
        <hr>
        <h3><b>Tổng :</b> 35,000 VNĐ</h3> </div>
    <div class="clearfix"></div>
    <hr>
    <div class="text-right">
        <button class="btn btn-danger" type="submit"> Thanh toán </button>
        <button onclick="javascript:window.print();" class="btn btn-default btn-outline" type="button"> <span><i class="fa fa-print"></i> In hóa đơn</span> </button>
    </div>
</div>