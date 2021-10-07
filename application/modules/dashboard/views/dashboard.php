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
                <!-- <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Ticket List</h4> -->
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
        <div class="card-group">
            <div class="card border-right">
                <div class="card-body">
                    <div class="d-flex d-lg-flex d-md-block align-items-center">
                        <div>
                            <div class="d-inline-flex align-items-center">
                                <h2 class="text-dark mb-1 font-weight-medium"><?= $totaluser ?></h2>
                                <!-- <span class="badge bg-primary font-12 text-white font-weight-medium badge-pill ml-2 d-lg-block d-md-none">+18.33%</span> -->
                            </div>
                            <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Pengguna</h6>
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
                            <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Pengajuan</h6>
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
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Jumlah Alat Berdasarkan Divisi / Unit Kerja</h6>
                        <div id="chartContainer2" style="height: 300px; width: 100%;"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Jumlah Alat Berdasarkan Kondisi</h6>
                        <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> -->
<script src="<?= base_url() ?>assets/canvasjs-master/dist/canvasjs.min.js"></script>