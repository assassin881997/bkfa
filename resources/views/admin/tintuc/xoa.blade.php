<!-- Modal -->
<div class="modal fade" id="xoaModal{{$s->idtintuc}}" tabindex="5" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Xóa tin tức <strong>{{cutString($s->tieude, 40)}}</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container" align="right">
                    <button class="btn btn-default" data-dismiss="modal">Hủy</button>
                    <a href="admin/tintuc/xoa/{{$s->idtintuc}}" title="Xóa">
                        <button class="btn btn-danger">Xác nhận</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>