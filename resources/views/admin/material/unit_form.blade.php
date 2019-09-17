<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#unitModal">Tạo đơn vị</button>
<div class="modal fade" id="unitModal" tabindex="-1" role="dialog" aria-labelledby="unitModal" aria-hidden="true">
    <div class="modal-dialog modal-side modal-top-left" role="document">
        <form method="post" action="{{route('admin.material.unit_create')}}">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Tạo Đơn Vị</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="simpleFormEmail">Tên</label>
                        <input type="text" name="name" class="form-control"  placeholder="Tên đơn vị" required>
                    </div>
                    <div class="form-group">
                        <label for="simpleFormEmail">Hệ Số</label>
                        <input type="number" name="percent" class="form-control"  placeholder="Hệ số chuyển đổi sang Kg">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-primary">Tạo</button>
                </div>
            </div>
        </form>

    </div>
</div>