<?php
foreach ($graphkondisi as $datagraph) {
    $dataPoints[] = [
        'label' => $datagraph['kondisi_alat'], 'y' => $datagraph['total']
    ];
}
foreach ($graphdivisi as $datagraphdivisi) {
    $dataPoints2[] = [
        'label' => $datagraphdivisi['divisi'], 'y' => $datagraphdivisi['total']
    ];
}
foreach ($graphpengajuan as $datagraphpengajuan) {
    $dataPoints3[] = [
        'label' => $datagraphpengajuan['status_pengajuan'], 'y' => $datagraphpengajuan['total']
    ];
}
// foreach ($alat as $alatunder30) {
//     $alatunder30[] = [
//         'label' => $datagraphpengajuan['status_pengajuan'], 'y' => $datagraphpengajuan['total']
//     ];
// }
?>
<script>
    window.onload = function() {
        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            exportEnabled: true,
            theme: "light2",
            data: [{
                type: "doughnut",
                showInLegend: false,
                legendText: "{label}",
                indexLabelFontSize: 10,
                // indexLabel: "{label} - #percent%",
                indexLabel: "{label} - {y}",
                // yValueFormatString: "Jumlah Alat : #,##0",
                yValueFormatString: "#,##0\ Alat",
                dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
            }]
        });
        chart.render();
        var chart = new CanvasJS.Chart("chartContainer2", {
            theme: "light2",
            animationEnabled: true,
            exportEnabled: true,
            data: [{
                type: "pie",
                indexLabel: "{label} - {y}",
                yValueFormatString: "#,##0\ Alat",
                showInLegend: false,
                indexLabelFontSize: 10,
                legendText: "{label} : {y}",
                dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
            }]
        });
        chart.render();
    }
</script>
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="#" class="text-muted"><?= $navbar ?></a></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-5 align-self-center">
                <a class="nav-link dropdown-toggle pl-md-3 position-relative float-right" href="javascript:void(0)" id="bell" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span><i data-feather="bell" class="svg-icon"></i></span>
                    <span class="badge badge-danger notify-no rounded-circle"><?= $totalnotif ?></span>
                </a>
                <div class="dropdown-menu dropdown-menu-left mailbox animated bounceInDown">
                    <ul class="list-style-none">
                        <li>
                            <div class="message-center notifications position-relative">
                                <?php
                                foreach ($updatepengajuan as $updatedatapengajuan) {
                                ?>
                                    <!-- Message -->
                                    <a href="<?= base_url('data-pengajuan') ?>" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                        <div class="btn btn-primary rounded-circle btn-circle"><i data-feather="airplay" class="text-white"></i></div>
                                        <div class=" d-inline-block v-middle pl-2" style="width: 100%;">
                                            <h6 class="message-title mb-0 mt-1"><b>Informasi Pengajuan</b></h6>
                                            <span class="font-12 text-nowrap d-block text-muted">Perubahan data pengajuan <br><?= $updatedatapengajuan['nama_divisi'] ?><br> Pengaju : <?= $updatedatapengajuan['nama_pengaju'] ?></span>
                                        </div>
                                    </a>
                                <?php
                                } ?>
                                <?php
                                foreach ($newpengajuan as $datanewpengajuan) {
                                ?>
                                    <!-- Message -->
                                    <a href="<?= base_url('data-pengajuan') ?>" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                        <div class="btn btn-primary rounded-circle btn-circle"><i data-feather="airplay" class="text-white"></i></div>
                                        <div class=" d-inline-block v-middle pl-2" style="width: 100%;">
                                            <h6 class="message-title mb-0 mt-1"><b>Pengajuan Baru</b></h6>
                                            <span class="font-12 text-nowrap d-block text-muted">Pengajuan baru dari <?= $datanewpengajuan['nama_pengaju'] ?> - <?= $datanewpengajuan['nama_divisi'] ?></span>
                                            <span class="font-12 text-nowrap d-block text-muted"><?= $datanewpengajuan['tanggal_pengajuan'] ?> - <?= $datanewpengajuan['waktu_pengajuan'] ?></span>
                                        </div>
                                    </a>
                                <?php
                                } ?>
                                <?php
                                foreach ($alatunder30 as $data30) {
                                ?>
                                    <!-- Message -->
                                    <a href="<?= base_url('data-semua-alat') ?>" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                        <div class="btn btn-warning rounded-circle btn-circle"><i data-feather="airplay" class="text-white"></i></div>
                                        <div class=" d-inline-block v-middle pl-2" style="width: 100%;">
                                            <h6 class="message-title mb-0 mt-1"><b>Pemberitahuan - alat harus segera di kalibrasi 30 hari lagi</b></h6>
                                            <span class="font-12 text-nowrap d-block text-muted">Nama Alat <?= $data30['nama_alat'] ?> - Pemilik : <?= $data30['divisi'] ?></span>
                                        </div>
                                    </a>
                                <?php
                                } ?>
                                <?php
                                foreach ($alatunder15 as $data15) {
                                ?>
                                    <!-- Message -->
                                    <a href="<?= base_url('data-semua-alat') ?>" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                        <div class="btn btn-warning rounded-circle btn-circle"><i data-feather="airplay" class="text-white"></i></div>
                                        <div class=" d-inline-block v-middle pl-2" style="width: 100%;">
                                            <h6 class="message-title mb-0 mt-1"><b>Pemberitahuan - alat harus segera di kalibrasi 15 hari lagi</b></h6>
                                            <span class="font-12 text-nowrap d-block text-muted">Nama Alat <?= $data15['nama_alat'] ?> - Pemilik : <?= $data15['divisi'] ?></span>
                                        </div>
                                    </a>
                                <?php
                                } ?>
                                <?php
                                foreach ($alatunder5 as $data5) {
                                ?>
                                    <!-- Message -->
                                    <a href="<?= base_url('data-semua-alat') ?>" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                        <div class="btn btn-warning rounded-circle btn-circle"><i data-feather="airplay" class="text-white"></i></div>
                                        <div class=" d-inline-block v-middle pl-2" style="width: 100%;">
                                            <h6 class="message-title mb-0 mt-1"><b>Pemberitahuan - alat harus segera di kalibrasi 5 hari lagi</b></h6>
                                            <span class="font-12 text-nowrap d-block text-muted">Nama Alat <?= $data5['nama_alat'] ?> - Pemilik : <?= $data5['divisi'] ?></span>
                                        </div>
                                    </a>
                                <?php
                                } ?>
                                <?php
                                foreach ($terlambat as $dataterlambat) {
                                ?>
                                    <!-- Message -->
                                    <a href="<?= base_url('data-alat-terlambat') ?>" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                        <div class="btn btn-danger rounded-circle btn-circle"><i data-feather="airplay" class="text-white"></i></div>
                                        <div class=" d-inline-block v-middle pl-2" style="width: 100%;">
                                            <h6 class="message-title mb-0 mt-1"><b>TERLAMBAT - Alat terlambat dikalibrasi</b></h6>
                                            <span class="font-12 text-nowrap d-block text-muted">Nama Alat <?= $dataterlambat['nama_alat'] ?> - Pemilik : <?= $dataterlambat['divisi'] ?></span>
                                        </div>
                                    </a>
                                <?php
                                } ?>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="card-group">
            <div class="card border-right">
                <div class="card-body">
                    <div class="d-flex d-lg-flex d-md-block align-items-center">
                        <div>
                            <div class="d-inline-flex align-items-center">
                                <h2 class="text-dark mb-1 font-weight-medium"><?= $totaluser ?></h2>
                                <!-- <span class="badge bg-primary font-12 text-white font-weight-medium badge-pill ml-2 d-lg-block d-md-none">+18.33%</span> -->
                            </div>
                            <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Pengguna Website</h6>
                        </div>
                        <div class="ml-auto mt-md-3 mt-lg-0">
                            <span class="opacity-7 text-muted"><i data-feather="users"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-right">
                <div class="card-body">
                    <div class="d-flex d-lg-flex d-md-block align-items-center">
                        <div>
                            <div class="d-inline-flex align-items-center">
                                <h2 class="text-dark mb-1 font-weight-medium"><?= $totalpengajuan ?></h2>
                                <!-- <span class="badge bg-primary font-12 text-white font-weight-medium badge-pill ml-2 d-lg-block d-md-none">+18.33%</span> -->
                            </div>
                            <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Pengajuan Kalibrasi</h6>
                        </div>
                        <div class="ml-auto mt-md-3 mt-lg-0">
                            <span class="opacity-7 text-muted"><i data-feather="server"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-right">
                <div class="card-body">
                    <div class="d-flex d-lg-flex d-md-block align-items-center">
                        <div>
                            <div class="d-inline-flex align-items-center">
                                <h2 class="text-dark mb-1 font-weight-medium"><?= $totalalat ?></h2>
                                <!-- <span class="badge bg-primary font-12 text-white font-weight-medium badge-pill ml-2 d-lg-block d-md-none">+18.33%</span> -->
                            </div>
                            <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Jumlah Alat</h6>
                        </div>
                        <div class="ml-auto mt-md-3 mt-lg-0">
                            <span class="opacity-7 text-muted"><i data-feather="hard-drive"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="card" style="height: 500px;">
                    <div class="card-body">
                        <h6 class="card-title">Jumlah Alat Berdasarkan Divisi / Unit Kerja</h6>
                        <div id="chartContainer2" style="height: 300px; width: 100%;"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="card" style="height: 500px">
                    <div class="card-body">
                        <h6 class="card-title">Jumlah Alat Berdasarkan Kondisi</h6>
                        <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url() ?>assets/canvasjs-master/dist/canvasjs.min.js"></script>