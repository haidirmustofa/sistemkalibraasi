<div class="modal fade" id="modal-lab<?= $data['id_pengajuan'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Laboratorium <br><small>Data lab akan tersedia jika sudah di input oleh admin</small></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url('add-pengajuan-lab') ?>">
                    <div class="form-group">
                        <input type="text" name="id" value="<?= $data['id_pengajuan'] ?> " hidden>
                        <small id="name1" class="badge badge-default badge-info form-text text-white float-left">Nama Laboratorium</small>
                        <div class="customize-input">
                            <select class="custom-select form-control bg-white custom-radius custom-shadow border-0" name="lab">
                                <?php
                                foreach ($lab as $dataLab) {
                                    if ($dataLab['id_pengajuan'] == $data['id_pengajuan']) {
                                ?>
                                        <option value="<?= $dataLab['id_lab'] . '-' . $dataLab['harga'] ?>">
                                            <?= $dataLab['nama_lab'] ?> - <?= "Rp " . number_format($dataLab['harga'], 2, ',', '.'); ?>
                                        </option>
                                <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Pilih Laboratorium">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>