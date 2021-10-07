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
        <form method="post" action="<?= base_url('add-pengajuan') ?>">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <small id="name1" class="badge badge-default badge-dark form-text text-white float-left">Silahkan isi nama lengkap anda</small>
                                <input type="text" class="form-control" id="nametext2" name="name" aria-describedby="name" required>
                            </div>
                            <div class="form-group">
                                <small id="name1" class="badge badge-default badge-dark form-text text-white float-left">Divisi</small>
                                <input type="text" class="form-control" id="nametext2" name="divition" value="<?= $this->fungsi->user_login()->nama_divisi; ?>" readonly aria-describedby="name">
                            </div>
                            <div class="form-group mt-5">
                                <small id="name1" class="badge badge-default badge-dark form-text text-white float-left">keterangan pengajuan</small>
                                <input type="text" class="form-control" id="nametext2" name="description" required aria-describedby="name">
                            </div>
                            <input type="submit" class="btn btn-primary mt-5 float-right" value="Simpan dan Buat Pengajuan">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>