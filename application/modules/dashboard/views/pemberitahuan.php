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
        </div>
    </div>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Pemberitahuan Terbaru</h4>
                <div class="mt-4 activity">
                    <?php
                    $no = 0;
                    foreach ($pemberitahuan as $data) {
                    ?>
                        <div class="d-flex align-items-start border-left-line pb-3">
                            <div>
                                <a href="javascript:void(0)" class="btn btn-info btn-circle mb-2 btn-item">
                                    <i data-feather="bell"></i>
                                </a>
                            </div>
                            <div class="ml-3 mt-2">
                                <h5 class="text-dark font-weight-medium mb-2"><?= $data['notif_title'] ?></h5>
                                <p class="font-14 mb-2 text-muted"><?= $data['notif_messages'] ?>
                                </p>
                                <span class="font-weight-light font-14 text-muted"><?= $data['notif_date'] ?> - <?= $data['notif_time'] ?></span>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <hr>
                <a href="<?= base_url('semua-pemberitahuan') ?>" class="font-14 border-bottom pb-1 border-info">Lihat Semua Pemberitahuan</a>
            </div>
        </div>
    </div>
</div>