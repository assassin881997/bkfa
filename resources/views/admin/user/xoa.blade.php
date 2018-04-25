<!-- Modal -->
<div class="modal fade" id="xoaModal{{$u->id}}" tabindex="5" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ Lang::get('sub.delete') }} {{ Lang::get('sub.user') }} <strong>{{cutString($u->ten, 40)}}</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container" align="right">
                    <button class="btn btn-default" data-dismiss="modal">{{ Lang::get('sub.cancel') }}</button>
                    <a href="admin/user/xoa/{{$u->id}}" title="{{ Lang::get('sub.delete') }}">
                        <button class="btn btn-danger">{{ Lang::get('sub.submit') }}</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>