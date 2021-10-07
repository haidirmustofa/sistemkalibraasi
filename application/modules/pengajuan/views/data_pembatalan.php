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
                        <h4 class="card-title">Data Pembatalan pengajuan Sistem Kalibrasi</h4>
                        <div class="table-responsive">
                            <table id="default_order" class="table table-striped table-bordered display no-wrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th><small><b>Nama pengaju</small></b></th>
                                        <th><small><b>Alat</small></b></th>
                                        <th><small><b>Divisi</small></b></th>
                                        <th><small><b>Tanggal Pengajuan</small></b></th>
                                        <th><small><b>Keterangan</small></b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 0;
                                    foreach ($pembatalan as $data) {
                                    ?>
                                        <tr>
                                            <td><small><?= $data['nama_pengaju'] ?></small></td>
                                            <td><small><?= $data['nama_alat'] ?></small></td>
                                            <td><small><?= $data['divisi_pengaju'] ?></small></td>
                                            <td><small><?= $data['tanggal_pengajuan'] ?></small></td>
                                            <td><small><?= $data['keterangan_pembatalan'] ?></small></td>
                                        </tr>
                                    <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>