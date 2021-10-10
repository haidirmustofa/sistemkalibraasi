<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <!-- <h4 class="page-title text-truncate text-dark font-weight-medium mb-1"><?= $navbar ?></h4> -->
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="#" class="text-muted"><?= $navbar ?></a></li>
                            <!-- <li class="breadcrumb-item text-muted active" aria-current="page">Ticket List</li> -->
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <?= $this->session->flashdata('message'); ?>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data pengajuan Sistem Kalibrasi</h4>
                        <div class="table-responsive">
                            <table id="default_order" class="table table-striped table-bordered display no-wrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th style="width: 5%;"></th>
                                        <th><small><b>Alat</small></b></th>
                                        <th><small><b>Nama pengaju</small></b></th>
                                        <th><small><b>Divisi</small></b></th>
                                        <th><small><b>Tanggal Pengajuan</small></b></th>
                                        <th><small><b>Status Pengajuan</small></b></th>
                                        <th><small><b>Laboratorium</small></b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 0;
                                    foreach ($pengajuan as $data) {
                                    ?>
                                        <tr>
                                            <td>
                                                <div class="btn-group dropright">
                                                    <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="<?= base_url('detail-pengajuan') ?>/<?= $data['pengajuan_slug'] ?>">Detail Pengajuan</a>
                                                    </div>
                                                </div>
                                                <?php if ($data['is_new'] == 1) { ?>
                                                    <span class="badge bg-danger font-10 text-white font-weight-medium badge-pill ml-2 d-lg-block d-md-none"><small> Baru </small></span>
                                                <?php } ?>
                                                <?php if ($data['is_new'] == 2) { ?>
                                                    <span class="badge bg-primary font-10 text-white font-weight-medium badge-pill ml-2 d-lg-block d-md-none"><small> Update Baru </small></span>
                                                <?php } ?>
                                            </td>
                                            <td><small>
                                                    <?php
                                                    foreach ($alat as $dataAlat) {
                                                        if ($dataAlat['id_pengajuan'] == $data['id_pengajuan']) {
                                                    ?>
                                                            <li>
                                                                <?= $dataAlat['nama_alat'] ?>
                                                            </li>
                                                    <?php }
                                                    } ?>
                                                </small></td>
                                            <td><small><?= $data['nama_pengaju'] ?></small></td>
                                            <td><small><?= $data['nama_divisi'] ?></small></td>
                                            <td><small><?= $data['tanggal_pengajuan'] ?></small></td>
                                            <td><small>
                                                    <?= $data['nama_status'] ?>
                                                    <?php
                                                    foreach ($pembatalan as $dataPembatalan) {
                                                        if ($dataPembatalan['id_pengajuan'] == $data['id_pengajuan']) {
                                                    ?>
                                                            <br> " <?= $dataPembatalan['keterangan_pembatalan'] ?> "
                                                    <?php }
                                                    } ?>
                                                </small>
                                            </td>
                                            <?php
                                            if ($data['nama_lab'] != null) {
                                            ?>
                                                <td><small><?= $data['nama_lab'] ?> - <?= "Rp." . number_format($data['harga_lab'], 2, ',', '.') ?></small></td>
                                            <?php } else {
                                            ?>
                                                <td></td>
                                            <?php  } ?>
                                            <?php include('modal_add_lab.php'); ?>
                                            <?php include('modal_data_dokumen.php'); ?>
                                            <?php include('modal_cancel.php'); ?>
                                            <?php include('modal_upload.php'); ?>
                                            <?php include('modal_lab.php'); ?>
                                        </tr>
                                    <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>