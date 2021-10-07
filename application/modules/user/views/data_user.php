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
                        <button type="button" class="btn btn-info mb-5" data-toggle="modal" data-target="#bs-example-modal-lg">Tambah User</button>
                        <h4 class="card-title">Data User Sistem Kalibrasi</h4>
                        <div class="table-responsive">
                            <table id="default_order" class="table table-striped table-bordered display no-wrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th style="width: 5%;"></th>
                                        <th><small><b>Nama</small></b></th>
                                        <th><small><b>Email</small></b></th>
                                        <th><small><b>No Hp</small></b></th>
                                        <th><small><b>Divisi</small></b></th>
                                        <th><small><b>Akun</small></b></th>
                                        <th><small><b>Status</small></b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($user as $data) {
                                    ?>
                                        <tr>
                                            <td>
                                                <div class="btn-group dropright">
                                                    <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal<?php echo $data['id_user']; ?>">Edit</a>
                                                        <?php
                                                        if ($data['isAccount'] != 1) {
                                                        ?>
                                                            <a class=" dropdown-item" href="#" onClick="confirm_modal('delete-user/<?php echo  $data['id_user']; ?>');">Hapus</a>
                                                        <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><small><?= $data['user_fullname'] ?></small></td>
                                            <td><small><?= $data['user_email'] ?></small></td>
                                            <td><small><?= $data['user_phone'] ?></small></td>
                                            <td><small><?= $data['nama_divisi'] ?></small></td>
                                            <td><small><?= $data['user_account'] ?></small></td>
                                            <td><small><?= $data['user_status'] ?></small></td>
                                        </tr>
                                        <div class="modal fade" id="modal<?= $data['id_user'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myLargeModalLabel">Edit Data</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post" action="<?= base_url('edit-user') ?>">
                                                            <div class="form-group">
                                                                <small id="name1" class="badge badge-default badge-info form-text text-white float-left">Nama Lengkap</small>
                                                                <input type="text" name="name" value="<?= $data['user_fullname'] ?>" class="form-control" id="nametext" aria-describedby="name" required>
                                                                <input type="text" name="id" value="<?= $data['id_user'] ?>" class="form-control" id="nametext" aria-describedby="name" hidden>
                                                            </div>
                                                            <div class="form-group">
                                                                <small id="name1" class="badge badge-default badge-info form-text text-white float-left">Username</small>
                                                                <input type="text" name="username" value="<?= $data['user_name'] ?>" class="form-control" id="nametext" aria-describedby="name" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <small id="name1" class="badge badge-default badge-info form-text text-white float-left">Password ( biarkan kosong jika tidak dirubah )</small>
                                                                <input type="password" name="password" class="form-control" id="nametext" aria-describedby="name">
                                                            </div>
                                                            <div class="form-group">
                                                                <small id="name1" class="badge badge-default badge-info form-text text-white float-left">Email</small>
                                                                <input type="text" name="email" value="<?= $data['user_email'] ?>" class="form-control" id="nametext" aria-describedby="name" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <small id="name1" class="badge badge-default badge-info form-text text-white float-left">No Hp</small>
                                                                <input type="text" name="phone" value="<?= $data['user_phone'] ?>" class="form-control" id="nametext" aria-describedby="name" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <small id="name1" class="badge badge-default badge-info form-text text-white float-left">Divisi</small>
                                                                <select class="form-control" id="exampleFormControlSelect1" name="divition" required>
                                                                    <option value="Tanpa Divisi">Tanpa Divisi</option>
                                                                    <?php
                                                                    $no = 1;
                                                                    foreach ($divisi as $datadivisi) {
                                                                        if ($datadivisi['divisi'] != null) {
                                                                    ?>
                                                                            <option value="<?= $datadivisi['divisi'] ?>"><?= $datadivisi['divisi'] ?></option>
                                                                    <?php
                                                                        }
                                                                    } ?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <small id="name1" class="badge badge-default badge-info form-text text-white float-left">Role User</small>
                                                                <select class="form-control" id="exampleFormControlSelect1" name="role" required>
                                                                    <option <?php echo ('Member' == $data['user_status']) ? 'selected' : ''; ?> value="Member">Member</option>
                                                                    <option <?php echo ('Admin' == $data['user_status']) ? 'selected' : ''; ?> value="Admin">Admin</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <small id="name1" class="badge badge-default badge-info form-text text-white float-left">Keaktifan Akun</small>
                                                                <select class="form-control" id="exampleFormControlSelect1" name="account" required>
                                                                    <option <?php echo ($data['user_account'] == 'Aktif') ? 'selected' : ''; ?> value="Aktif">Aktif</option>
                                                                    <option <?php echo ($data['user_account'] == 'Tidak Aktif') ? 'selected' : ''; ?> value="Tidak Aktif">Tidak Aktif</option>
                                                                </select>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                                                <input type="submit" class="btn btn-primary" value="Simpan Data">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include('modal_add_user.php');
?>