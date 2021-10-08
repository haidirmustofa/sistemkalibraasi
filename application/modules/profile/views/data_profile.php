<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
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
                        <form method="post" action="<?= base_url('edit-profile') ?>">
                            <div class="form-group">
                                <input type="text" name="id" value="<?= $this->fungsi->user_login()->id_user ?> " hidden>
                                <div class="form-group">
                                    <small id="name1" class="badge badge-default badge-info form-text text-white float-left">Nama Lengkap</small>
                                    <input type="text" class="form-control" id="nametext2" name="fullname" aria-describedby="name" value="<?= $this->fungsi->user_login()->user_fullname ?>" required>
                                </div>
                                <div class="form-group">
                                    <small id="name1" class="badge badge-default badge-info form-text text-white float-left">Divisi - ( divisi hanya bisa diubah oleh admin )</small>
                                    <input type="text" class="form-control" id="nametext2" name="divisi" aria-describedby="name" value="<?= $this->fungsi->user_login()->nama_divisi ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <small id="name1" class="badge badge-default badge-info form-text text-white float-left">Email</small>
                                    <input type="email" class="form-control" id="nametext2" name="email" aria-describedby="name" value="<?= $this->fungsi->user_login()->user_email ?>" required>
                                </div>
                                <div class="form-group">
                                    <small id="name1" class="badge badge-default badge-info form-text text-white float-left">No Hp</small>
                                    <input type="number" class="form-control" id="nametext2" name="phone" aria-describedby="name" value="<?= $this->fungsi->user_login()->user_phone ?>" required>
                                </div>
                                <div class="form-group">
                                    <small id="name1" class="badge badge-default badge-danger form-text text-white float-left">Username</small>
                                    <input type="text" class="form-control" id="nametext2" name="username" aria-describedby="name" value="<?= $this->fungsi->user_login()->user_name ?>" required>
                                </div>
                                <div class="form-group">
                                    <small id="name1" class="badge badge-default badge-danger form-text text-white float-left">Password ( kosongkan jika tidak diubah )</small>
                                    <input type="password" class="form-control" id="nametext2" name="password" aria-describedby="name">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-danger" value="Simpan">
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>