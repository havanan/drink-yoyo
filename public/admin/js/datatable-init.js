function getDataTable(url){
    $('#dataTable').DataTable( {
        scrollX: true,
        serverSide: true,
        processing: true,
        ajax: url,
        columns: [
            { data: 'name' },
            { data: 'display_name' },
            { data: 'description' },
        ],
    } );
}