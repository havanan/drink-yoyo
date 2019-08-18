
function getDataTable(url){
    var _token = $('meta[name="csrf-token"]').attr('content');
    $('#dataTable').DataTable( {
        scrollX: true,
        serverSide: true,
        processing: true,
        searching: true,
        ajax: {
            url: url,
            type: 'POST',
            dataType: "json",
            // dataSrc:'',
            data:{
               _token:_token
            }
        },
        columns: [
            { data: 'name' },
            { data: 'display_name'},
            { data: 'description'},
            { data: 'created_at'},
            { data: 'author_name'},
        ],
    } );
}