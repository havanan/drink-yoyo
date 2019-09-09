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

    if (data.customer_name == ''){
        bootbox.alert({
            message: "Tên khách hàng không được để trống !",
            locale: 'vi'
        });
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
            console.log(data);
            $('#bodyBill').html(data);
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
        data:{

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