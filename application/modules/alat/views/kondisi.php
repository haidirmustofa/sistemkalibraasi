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
        <div class="row">
            <?php
            $no = 1;
            foreach ($kondisi as $data) {
                $name = str_replace(' ', '-', $data['kondisi_alat']);
                if ($data['kondisi_alat'] == '-') {
                    $name = 'Alat-Tanpa-Kondisi';
                    $name2 = 'Alat Tanpa Kondisi';
                    if ($data['kondisi_alat'] == '') {
                        $name = 'Alat-Tanpa-Kondisi';
                        $name2 = 'Alat Tanpa Kondisi';
                    }
                } else {
                    $name2 = $data['kondisi_alat'];
                }
            ?>
                <div class="col-md-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <h4 class="card-title">
                                <?php echo $name2 ?>
                            </h4>
                            <hr>
                            <p class="card-text">
                                Lihat daftar semua alat<br> <?php echo $name2 ?>
                            </p>
                            <a href="<?= base_url('data-kondisi-alat') ?>/<?= $name ?>" class="btn btn-dark">Lihat Data</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>