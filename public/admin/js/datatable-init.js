
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