<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <!-- <h5 class="page-title text-truncate text-dark font-weight-medium mb-1"><?= $navbar ?></h5> -->
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
    <?= $this->session->flashdata('message'); ?>
    <div class="container-fluid">
        <?php
        $no = 0;
        foreach ($pengajuan as $data) {
        ?>
            <?php
            if ($this->fungsi->user_login()->user_status == 'Admin') {
            ?>
                <div class="col-12 mb-5 ">
                    <a class="btn btn-dark btn-sm " href="<?= base_url('riwayat-aktifitas-pengajuan') ?>/<?= $data['pengajuan_slug'] ?>"><i class="fa fa-info"></i> Lihat Riwayat Aktifitas Pengajuan</a>
                    <a class="btn btn-danger btn-sm " href="#" data-toggle="modal" data-target="#modal-cancel<?= $data['id_pengajuan'] ?>">Batalkan Pengajuan</a>
                    <a class="btn btn-primary btn-sm " href="#" data-toggle="modal" data-target="#modal-status<?= $data['id_pengajuan'] ?>">Ubah Status Proses Pengajuan</a>
                    <a class="btn btn-success btn-sm " href="#" data-toggle="modal" data-target="#modal-selesai<?= $data['id_pengajuan'] ?>"><i class="far fa-check-circle"></i> Buat Pengajuan Selesai</a>
                </div>
            <?php  }
            ?>
            <div class="row">
                <div class="col-md-3">
                    <div class="card border-right">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <div class="d-inline-flex align-items-center">
                                        <span class="badge bg-dark font-12 text-white font-weight-medium badge-pill d-lg-block d-md-none"><?= $data['nama_pengaju'] ?></span>
                                    </div>
                                    <hr>
                                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Nama Pengaju</h6>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i data-feather="user-plus"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-right">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <div class="d-inline-flex align-items-center">
                                        <span class="badge bg-dark font-12 text-white font-weight-medium badge-pill d-lg-block d-md-none"><?= $data['nama_divisi'] ?></span>
                                    </div>
                                    <hr>
                                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Divisi</h6>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i data-feather="home"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-right">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <div class="d-inline-flex align-items-center">
                                        <span class="badge bg-dark font-12 text-white font-weight-medium badge-pill ml-2 d-md-none d-lg-block"><?= $data['tanggal_pengajuan'] ?></span>
                                    </div>
                                    <hr>
                                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Tanggal Pengajuan</h6>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i data-feather="calendar"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-right">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <div class="d-inline-flex align-items-center">
                                        <span class="badge bg-dark font-12 text-white font-weight-medium badge-pill ml-2 d-md-none d-lg-block"><?= $data['nama_status'] ?></span>
                                    </div>
                                    <hr>
                                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Status Pengajuan</h6>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i data-feather="info"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="card-body" style="min-height: 300px;">
                            <h5 class="card-title">Alat yang diajukan</h5>
                            <hr>
                            <ul class="list-style-none mb-0">
                                <?php
                                foreach ($alat as $dataAlat) {
                                    if ($dataAlat['id_pengajuan'] == $data['id_pengajuan']) {
                                ?>
                                        <li>
                                            <i class="fas fa-circle text-success font-10 mr-2"></i>
                                            <span class="text-muted"><?= $dataAlat['nama_alat'] ?></span>
                                        </li>
                                <?php }
                                } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="card-body" style="min-height: 300px;">
                            <div class="row">
                                <div class="col-md-8">
                                    <h5 class="card-title">Laboratorium Kalibrasi</h5>
                                </div>
                                <div class="col-md-4">
                                    <?php
                                    if ($this->fungsi->user_login()->user_status == 'Admin') {
                                    ?>
                                        <a class="btn btn-sm btn-primary" href="#" data-toggle="modal" data-target="#modal-add-lab<?= $data['id_pengajuan'] ?>"><i class="fas fa-plus"></i> Lab</a>
                                    <?php  } else  if ($data['nama_lab'] == null) {
                                    ?>
                                        <a class="btn btn-sm btn-primary" href="#" data-toggle="modal" data-target="#modal-lab<?= $data['id_pengajuan'] ?>"><i class="fab fa-get-pocket"></i> Pilih Lab</a>
                                    <?php } ?>
                                </div>
                            </div>
                            <hr>
                            <ul class="list-style-none mb-0">
                                <small>
                                    <b>
                                        Daftar Pilihan Lab
                                    </b>
                                </small>
                                <?php
                                $no = 0;
                                foreach ($pengajuanlab as $datapengajuanlab) {
                                ?>
                                    <li>
                                        <i class="fas fa-circle text-warning font-10 mr-2"></i>
                                        <span class="text-muted"><?= $datapengajuanlab['nama_lab'] ?> - <?= "Rp." . number_format($datapengajuanlab['harga'], 2, ',', '.') ?></small></span>
                                    </li>
                                <?php } ?>
                                <hr>
                                <small>
                                    <b>
                                        Lab yang dipilih
                                    </b>
                                </small>
                                <?php
                                if ($data['nama_lab'] != null) {
                                ?>
                                    <li>
                                        <i class="fas fa-circle text-success font-10 mr-2"></i>
                                        <span class="text-muted"><?= $data['nama_lab'] ?> - <?= "Rp." . number_format($data['harga_lab'], 2, ',', '.') ?></small></span>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="card-body" style="min-height: 300px;">
                            <div class="row">
                                <div class="col-md-8">
                                    <h5 class="card-title mb-4">Dokumen</h5>
                                </div>
                                <div class="col-md-4">
                                    <?php
                                    if ($this->fungsi->user_login()->user_status == 'Admin') {
                                    ?>
                                        <a class="btn btn-sm btn-primary" href="#" data-toggle="modal" data-target="#modal-upload<?= $data['id_pengajuan'] ?>"><i class="fas fa-upload"></i> Upload</a>
                                    <?php  } ?>
                                </div>
                            </div>
                            <hr>
                            <div class="ml-3 mt-2">
                                <div class="row">
                                    <?php
                                    foreach ($dokumen as $dataDokumen) {
                                        if ($dataDokumen['id_pengajuan'] == $data['id_pengajuan']) {
                                    ?>
                                            <div class="col-md-10">
                                                <h6 class="text-dark font-weight-medium mb-2"> <?= $dataDokumen['nama_dokumen'] ?></h6>
                                            </div>
                                            <div class="col-md-2">
                                                <a target="blank" href="<?= base_url() . 'assets/dokumen/' . $dataDokumen['file_dokumen']; ?>" type="button" class="btn btn-sm " data-bgcolor="#00b489" data-color="#ffffff"><i class="fa fa-download"></i></a>
                                            </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include('modal_add_lab.php'); ?>
            <?php include('modal_data_dokumen.php'); ?>
            <?php include('modal_cancel.php'); ?>
            <?php include('modal_upload.php'); ?>
            <?php include('modal_lab.php'); ?>
            <?php include('modal_update_status.php'); ?>
            <?php include('modal_selesai.php'); ?>
        <?php } ?>
    </div>
</div>