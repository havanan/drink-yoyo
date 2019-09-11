var totalMoney = 0;
var priceDiscount = 0;

function addToCart(id) {
    $.ajax({
        type:'POST',
        url:addUrl,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data:{
            id:id,
            disCount:getDiscountInput()
        },
        success:function(data) {
            if (data!= null){
                genItemsList(data);
            }
        }
    });
}
function getAllForm() {
    var input = ['customer_name','table_number','discount','note'];
    var formData = {};
    for (var i=0;i < input.length;i++){
        var key = input[i];
        formData[key] =  $('#'+key).val();
    }
    return formData;
}
function clearForm() {
    $("#frmOrder").trigger("reset");
}
function pay() {
    var data = getAllForm();

    // if (data.customer_name == ''){
    //     swal("Cảnh Báo !", "Chưa nhập tên khách hàng!", "warning");
    //     return false;
    // }
    if (data.table_number == ''){
        swal("Cảnh Báo !", "Chưa nhập số bàn!", "warning");
        return false;
    }
    $.ajax({
        type:'POST',
        url:payUrl,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data:{
            formData:data,
            disCount:getDiscountInput()
        },
        success:function(data) {

            if (data === 'true'){
                swal("Thanh Toán Thành Công !", "Vui lòng in hóa đơn trả khách !", "success");
            }else {
                swal("Thanh Toán Lỗi !", "Vui lòng kiểm tra lại thông tin Order !", "error");
                return false;
            }
        },
        error:function (e) {
            swal("Thanh Toán Lỗi !", "Vui lòng kiểm tra lại thông tin Order !", "error");
            return false;
        }
    });
}
function creatNewOrder() {
    $.ajax({
        type:'POST',
        url:createUrl,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success:function(data) {
            genItemsList(data);
            clearForm();
        }
    });
}
function getPriceDiscount() {

    $.ajax({
        type:'POST',
        url:disCountUrl,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data:{
            disCount:getDiscountInput()
        },
        success:function(data) {
            genItemsList(data);
        },
        error:function (e) {
            swal("Tính triết khấu lỗi!", "Vui lòng kiểm tra lại thông tin Order !", "error");
            return false;
        }
    });
}
function removeItem(rowId) {

    $.ajax({
        type:'POST',
        url:removeUrl,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data:{
            disCount:getDiscountInput(),
            rowId:rowId
        },
        success:function(data) {
            genItemsList(data);
        },
        error:function (e) {
            swal("Xóa sản phẩm không thành công !", "Vui lòng kiểm tra lại thông tin Order !", "error");
            return false;


        }
    });
}
function updateCartItem(rowId) {
    if (rowId == null){
        return 'false';
    }
    var qty = $('#item-'+rowId).val();
    $.ajax({
        type:'POST',
        url:updateUrl,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data:{
            disCount:getDiscountInput(),
            rowId:rowId,
            qty:qty
        },
        success:function(data) {
            genItemsList(data);
        },
        error:function (e) {
            swal("Lỗi Cập nhật Bill !", "Vui lòng kiểm tra lại thông tin Order !", "error");
            return false;

        }
    });
}
function getBill(id,) {
    $.ajax({
        type:'POST',
        url:billInfoUrl,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data:{
            id:id,
        },
        success:function(data) {
            if (data === 'false'){
                swal(" Lỗi !", "Không lấy được thông tin bill !", "error");
                return false;
            }else {
                $('#bodyBill').html(data);
                $('.bill-body').modal('show');
            }
        },
        error:function (e) {
            swal(" Lỗi !", "Không lấy được thông tin bill !", "error");
            return false;
        }
    });
}
function getBarcode(id) {
    $.ajax({
        type:'POST',
        url:billBarcodeUrl,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data:{
            id:id,
        },
        success:function(data) {

            if (data === 'false'){
                swal(" Lỗi !", "Không lấy được thông tin bill !", "error");
                return false;
            }else {
                $('#bodyBill').html(data);
                $('.bill-body').modal('show');
            }
        },
        error:function (e) {
            swal(" Lỗi !", "Không lấy được thông tin bill !", "error");
            return false;


        }
    });
}
function getStaffBill(id) {
    $.ajax({
        type:'POST',
        url:billStaffUrl,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data:{
            id:id,
        },
        success:function(data) {

            if (data === 'false'){
                swal(" Lỗi !", "Không lấy được thông tin bill !", "error");
                return false;
            }else {
                $('#bodyBill').html(data);
                $('.bill-body').modal('show');
            }
        },
        error:function (e) {
            swal(" Lỗi !", "Không lấy được thông tin bill !", "error");
            return false;


        }
    });
}
function getDiscountInput() {
    var disCount = $('#discount').val();
    disCount = parseInt(disCount);

    return disCount;
}
function genItemsList(data) {
    $('#selected-product').html(data)
}
function setDiscount(num) {
    $
    ('#discount').val((num));
}
function printBill() {
    var id = 'billPrint';
    var data=document.getElementById(id).innerHTML;
    var myWindow = window.open('', 'Trà Chanh YoYo', 'height=auto,width=100%');
    myWindow.document.write('<html><head><title>Trà Chanh YoYo</title>');
    myWindow.document.write('</head><body >');
    myWindow.document.write(data);
    myWindow.document.write('</body></html>');
    myWindow.document.close(); // necessary for IE >= 10

    myWindow.onload=function(){ // necessary if the div contain images

        myWindow.focus(); // necessary for IE >= 10
        myWindow.print();
        myWindow.close();
    };
}
