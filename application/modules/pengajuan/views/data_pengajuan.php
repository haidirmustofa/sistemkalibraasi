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
                                                        <form method="POST" action="<?= base_url('detail-pengajuan') ?>">
                                                            <input type="text" name="id" value="<?= $data['id_pengajuan'] ?>" hidden>
                                                            <input type="submit" class="dropdown-item btn" value="Detail Pengajuan">
                                                            <!-- <a class="dropdown-item btn" type="submit">Detail Pengajuan</a> -->
                                                        </form>
                                                        <!-- <?php
                                                                ?>
                                                        <?php
                                                        if ($data['nama_lab'] == null) {
                                                            if ($this->fungsi->user_login()->user_status == 'Member') {
                                                        ?>
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal-lab<?= $data['id_pengajuan'] ?>">Pilih Laboratorium</a>
                                                            <?php
                                                            } else {
                                                            ?>
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal-add-lab<?= $data['id_pengajuan'] ?>">Ajukan Laboratorium</a>
                                                        <?php
                                                            }
                                                        }
                                                        ?>
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal-dokumen<?= $data['id_pengajuan'] ?>">Lihat Dokumen</a>
                                                        <?php
                                                        if ($this->fungsi->user_login()->user_status == 'Admin') {
                                                        ?>
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal-upload<?= $data['id_pengajuan'] ?>">Upload Dokumen</a>
                                                        <?php
                                                        }
                                                        ?> -->
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal-cancel<?= $data['id_pengajuan'] ?>">Batalkan Pengajuan</a>
                                                    </div>
                                                </div>
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
                                            <td><small><?= $data['nama_status'] ?></small></td>
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