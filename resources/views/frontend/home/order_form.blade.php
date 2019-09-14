<div class="row">
{{--    <div class="form-group col-md-12">--}}
{{--        <label >Tên khách hàng <span class="text-danger">*</span></label>--}}
{{--        <input type="text" class="form-control" name="customer_name" required id="customer_name">--}}
{{--    </div>--}}
    <div class="form-group col-md-6">
        <label >Số bàn <span class="text-danger">*</span></label>
        <input type="number" class="form-control" name="table_number" required min="1" id="table_number" value="1">
    </div>
    <div class="form-group col-md-6">
        <label >Giảm giá (%) </label>
        <input type="number" class="form-control" name="discount" min="0" max="100" value="0" id="discount" onchange="getPriceDiscount()" >
    </div>
    <div class="form-group col-md-12">
        <label >Ghi chú </label>
        <input type="text" class="form-control" name="note" id="note">
    </div>
</div>