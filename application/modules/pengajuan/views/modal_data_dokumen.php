<div class="modal fade" id="modal-dokumen<?= $data['id_pengajuan'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Dokumen</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <?php
                foreach ($dokumen as $dataDokumen) {
                    if ($dataDokumen['id_pengajuan'] == $data['id_pengajuan']) {
                ?>
                        <div class="ml-3 mt-2">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="text-dark font-weight-medium mb-2"> <?= $dataDokumen['nama_dokumen'] ?></h5>
                                </div>
                                <div class="col-md-6">
                                    <a target="blank" href="<?= base_url() . 'assets/dokumen/' . $dataDokumen['file_dokumen']; ?>" type="button" class="btn btn-sm" data-bgcolor="#00b489" data-color="#ffffff"><i class="fa fa-download"></i></a>
                                </div>
                            </div>
                            <hr>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>