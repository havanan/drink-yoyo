function genSelect2(class_name,data){
    $('.'+class_name).select2({
        data:data
    });
}
function standAloneButton(domain){
    $('#lfm').filemanager('image', {prefix: domain});
}
function btnDelete(id) {
    event.preventDefault();
    swal({
            title: "Bạn chắc chắn xóa ?",
            text: "Sản phẩm sẽ không thể khôi phục lại",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Xóa",
            cancelButtonText: "Hủy",
            closeOnConfirm: false,
            closeOnCancel: false
        },
        function(isConfirm){
            if (isConfirm) {
                $.ajax({
                    type:'POST',
                    url:urlDelete,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data:{
                        id:id,
                    },
                    success:function(data) {
                        if (data === 'true'){
                            reFreshTable();
                            swal("Xóa thành công !",'', "success");
                        }else {
                            swal("Lỗi", "Xóa Sản phẩm thất bại", "error");

                        }
                    }
                });
            } else {
                swal("Cancelled", "Sản phẩm vẫn an toàn :))", "error");
            }
        });
}
function reFreshTable() {
    $.ajax({
        type:'GET',
        url:urlList,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success:function(data) {
            if (data != null){
                console.log(data);
                $('#tableBody').html(data);
            }else {
                swal("Lỗi", "Vui lòng ấn F5 trên bàn phím", "error");

            }
        },
        error:function () {
            swal("Lỗi", "Vui lòng ấn F5 trên bàn phím", "error");
        }
    });
}
