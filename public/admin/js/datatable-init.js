
function getDataTable(url){
    var _token = $('meta[name="csrf-token"]').attr('content');
    $('#dataTable').DataTable( {
        scrollX: true,
        serverSide: true,
        processing: true,
        searching: true,
        ajax: {
            url: url,
            type: 'GET',
            dataType: "json",
            // dataSrc:'',
            data:{
               _token:_token,
            }
        },
        columns: columns,
    } );
}
function deleteButton(id) {
    var button = '<button class="btn btn-danger" data-id="'+id+'" title="delete"><i class="fa fa-trash"></i></button>';
    return button;
}
function editButton(id) {
    var button = '<button class="btn btn-primary" data-id="'+id+'" title="edit"><i class="fa fa-pencil-square-o"></i></button>';
    return button;
}
function viewButton(id) {
    var button = '<button class="btn btn-pink " data-id="'+id+'" title="view"><i class="fa fa-eye"></i></button>';
    return button;
}
function genButton(data,type) {
    console.log(type);
    var button = '<div class="">';
    if (type.delete == true){
        button +='<div class="w-25" >'+deleteButton(data.id)+'</div>';
    }
    if (type.edit == true){
        button+='<div class="w-25" >'+ editButton(data.id)+'</div>';
    }
    if (type.view == true){
        button+='<div class="w-25" >'+ viewButton(data.id)+'</div>';
    }
    button += '</div>'
    return button;
}
var language = {
    sProcessing:   "Đang xử lý...",
    sLengthMenu:   "Xem _MENU_ mục",
    sZeroRecords:  "Không tìm thấy dòng nào phù hợp",
    sInfo:         "Đang xem _START_ đến _END_ trong tổng số _TOTAL_ mục",
    sInfoEmpty:    "Đang xem 0 đến 0 trong tổng số 0 mục",
    sInfoFiltered: "(được lọc từ _MAX_ mục)",
    sInfoPostFix:  "",
    sSearch:       "Tìm:",
    sUrl:          "",
    oPaginate: {
        sFirst:    "Đầu",
        sPrevious: "Trước",
        sNext:     "Tiếp",
        sLast:     "Cuối"
    }
}
function dataTableDefautl(id) {
    $('#'+id).DataTable({
        language:language
    });
}