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
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h4 class="card-title">Semua Alat</h4>
                        <hr>
                        <p class="card-text">
                            Lihat daftar semua alat
                        </p>
                        <a href="<?= base_url('data-semua-alat') ?>" class="btn btn-info">Lihat Data</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h4 class="card-title">Daftar Kondisi Alat</h4>
                        <hr>
                        <p class="card-text">
                            Lihat daftar alat berdasarkan kondisi alat
                        </p>
                        <a href="<?= base_url('data-kondisi') ?>" class="btn btn-info">Lihat Data</a>
                    </div>
                </div>
            </div>
        </div>
    </div>