<div class="modal fade" id="modal-cancel<?= $data['id_pengajuan'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Apakah anda yakin ingin membatalkan pengajuan ?</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url('cancel-pengajuan') ?>">
                    <div class="form-group">
                        <input type="text" name="id" value="<?= $data['id_pengajuan'] ?> " hidden>
                        <small id="name1" class="badge badge-default badge-danger form-text text-white float-left">Alasan dibatalkan</small>
                        <textarea name="keterangan" id="" cols="70" rows="5" required></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-danger" value="Batalkan">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>