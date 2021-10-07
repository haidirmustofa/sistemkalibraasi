<div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Tambah Data status</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url('add-status') ?>">
                    <div class="form-group">
                        <small id="name1" class="badge badge-default badge-info form-text text-white float-left">Nama status</small>
                        <input type="text" name="name" class="form-control" id="nametext" aria-describedby="name" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Simpan Data">
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->