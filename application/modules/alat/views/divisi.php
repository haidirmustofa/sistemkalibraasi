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
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h4 class="card-title">Alat Tanpa Divisi</h4>
                        <hr>
                        <p class="card-text">
                            Lihat daftar semua alat<br>Alat Tanpa Divisi
                        </p>
                        <a href="<?= base_url('data-alat-divisi') ?>/Alat-Tanpa-Divisi" class="btn btn-dark">Lihat Data</a>
                    </div>
                </div>
            </div>
            <?php
            $no = 1;
            foreach ($divisi as $data) {
                $name = str_replace(' ', '-', $data['divisi']);
                if ($data['divisi'] == '') {
                    $name = 'Alat-Tanpa-Divisi';
                }
                if ($data['divisi'] != null) {
                    if ($data['divisi'] != '-') {
            ?>
                        <div class="col-md-4">
                            <div class="card shadow">
                                <div class="card-body">
                                    <h4 class="card-title"><?= $data['divisi'] ?></h4>
                                    <hr>
                                    <p class="card-text">
                                        Lihat daftar semua alat<br> <?= $data['divisi'] ?>
                                    </p>
                                    <a href="<?= base_url('data-alat-divisi') ?>/<?= $name ?>" class="btn btn-dark">Lihat Data</a>
                                </div>
                            </div>
                        </div>
            <?php
                    }
                }
            }
            ?>

        </div>
    </div>
</div>