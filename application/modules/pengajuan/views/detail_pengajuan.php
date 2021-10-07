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
    <?= $this->session->flashdata('message'); ?>
    <div class="container-fluid">
        <?php
        $no = 0;
        foreach ($pengajuan as $data) {
        ?>
            <div class="card-group">
                <div class="card border-right">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <span class="badge bg-primary font-20 text-white font-weight-medium badge-pill d-lg-block d-md-none"><?= $data['nama_pengaju'] ?></span>
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
                <div class="card border-right">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <span class="badge bg-success font-20 text-white font-weight-medium badge-pill d-lg-block d-md-none"><?= $data['nama_divisi'] ?></span>
                                </div>
                                <hr>
                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Divisi</h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted"><i data-feather="dollar-sign"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-right">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <span class="badge bg-danger font-20 text-white font-weight-medium badge-pill ml-2 d-md-none d-lg-block"><?= $data['tanggal_pengajuan'] ?></span>
                                </div>
                                <hr>
                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Tanggal Pengajuan</h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted"><i data-feather="file-plus"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="card-body" style="min-height: 300px;">
                            <h4 class="card-title">Data Alat</h4>
                            <hr>
                            <ul class="list-style-none mb-0">
                                <?php
                                foreach ($alat as $dataAlat) {
                                    if ($dataAlat['id_pengajuan'] == $data['id_pengajuan']) {
                                ?>
                                        <li>
                                            <i class="fas fa-circle text-primary font-10 mr-2"></i>
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
                            <h4 class="card-title">Laboratorium</h4>
                            <hr>
                            <ul class="list-style-none mb-0">
                                <?php
                                if ($data['nama_lab'] != null) {
                                ?>
                                    <li>
                                        <i class="fas fa-circle text-danger font-10 mr-2"></i>
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
                            <h4 class="card-title mb-4">Dokumen</h4>
                            <hr>
                            <?php
                            foreach ($dokumen as $dataDokumen) {
                                if ($dataDokumen['id_pengajuan'] == $data['id_pengajuan']) {
                            ?>
                                    <div class="ml-3 mt-2">
                                        <div class="row">
                                            <div class="col-md-10">
                                                <h6 class="text-dark font-weight-medium mb-2"> <?= $dataDokumen['nama_dokumen'] ?></h6>
                                            </div>
                                            <div class="col-md-2">
                                                <a target="blank" href="<?= base_url() . 'assets/dokumen/' . $dataDokumen['file_dokumen']; ?>" type="button" class="btn btn-sm " data-bgcolor="#00b489" data-color="#ffffff"><i class="fa fa-download"></i></a>
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
        <?php } ?>
    </div>
</div>