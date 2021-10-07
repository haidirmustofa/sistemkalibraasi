<div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url('add-alat') ?>">
                    <div class="form-group">
                        <small id="name1" class="badge badge-default badge-info form-text text-white float-left">Nama Alat</small>
                        <input type="text" name="name" class="form-control" id="nametext" aria-describedby="name" required>
                    </div>
                    <div class="form-group">
                        <small id="name1" class="badge badge-default badge-info form-text text-white float-left">No Seri</small>
                        <input type="text" name="no" class="form-control" id="nametext" aria-describedby="name" required>
                    </div>
                    <div class="form-group">
                        <small id="name1" class="badge badge-default badge-info form-text text-white float-left">Type Alat</small>
                        <select class="form-control" id="exampleFormControlSelect1" name="type" required>
                            <?php
                            $no = 1;
                            foreach ($type as $data) {
                            ?>
                                <option value="<?= $data['id_type'] ?>"><?= $data['nama_type'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <small id="name1" class="badge badge-default badge-info form-text text-white float-left">Merek Alat</small>
                        <input type="text" class="form-control" id="nametext" aria-describedby="name" name="merek" required>
                    </div>
                    <div class="form-group">
                        <small id="name1" class="badge badge-default badge-info form-text text-white float-left">Interval Kalibrasi</small>
                        <input type="number" min="0" class="form-control" id="nametext" aria-describedby="name" name="interval" required>
                    </div>
                    <div class="form-group">
                        <small id="name1" class="badge badge-default badge-info form-text text-white float-left">Kalibrasi Terahir</small>
                        <input type="date" class="form-control" id="nametext" aria-describedby="name" name="kalibrasi_terakhir" required>
                    </div>
                    <div class="form-group">
                        <small id="name1" class="badge badge-default badge-info form-text text-white float-left">Divisi</small>
                        <select class="form-control" id="exampleFormControlSelect1" name="divisi" required>
                            <?php
                            $no = 1;
                            foreach ($divisi as $data) {
                            ?>
                                <option value="<?= $data['id_divisi'] ?>"><?= $data['nama_divisi'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <small id="name1" class="badge badge-default badge-info form-text text-white float-left">Status Alat</small>
                        <select class="form-control" id="exampleFormControlSelect1" name="status" required>
                            <option value="Ada">Ada</option>
                            <option value="Tidak Ada">Tidak ada</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <small id="name1" class="badge badge-default badge-info form-text text-white float-left">Keterangan</small>
                        <input type="text" class="form-control" id="nametext" aria-describedby="name" name="keterangan" required>
                    </div>
                    <div class="form-group">
                        <small id="name1" class="badge badge-default badge-info form-text text-white float-left">Kondisi</small>
                        <select class="form-control" id="exampleFormControlSelect1" name="kondisi" required>
                            <?php
                            $no = 1;
                            foreach ($kondisi as $data) {
                            ?>
                                <option value="<?= $data['id_kondisi'] ?>"><?= $data['nama_kondisi'] ?></option>
                            <?php } ?>
                        </select>
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