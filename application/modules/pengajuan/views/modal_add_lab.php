<div class="modal fade" id="modal-add-lab<?= $data['id_pengajuan'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Tambah Lab</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url('add-lab-pengajuan') ?>">
                    <div class="form-group">
                        <input type="text" name="id" value="<?= $data['id_pengajuan'] ?> " hidden>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <small id="name1" class="badge badge-default badge-info form-text text-white float-left">Divisi</small>
                                <select class="form-control" id="exampleFormControlSelect1" name="lab" required>
                                    <?php
                                    $no = 1;
                                    foreach ($labo as $dataLab) {
                                    ?>
                                        <option value="<?= $dataLab['id_lab'] ?>"><?= $dataLab['nama_lab'] ?></option>
                                    <?php  } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <small id="name1" class="badge badge-default badge-info form-text text-white float-left">Harga</small>
                            <input type="number" min="0" name="harga" class="form-control" id="nametext" aria-describedby="name" required>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Simpan Data">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>