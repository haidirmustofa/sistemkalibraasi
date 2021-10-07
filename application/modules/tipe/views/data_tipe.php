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
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->

        <!-- ============================================================== -->
        <!-- basic table -->
        <?= $this->session->flashdata('message'); ?>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <button type="button" class="btn btn-info mb-5" data-toggle="modal" data-target="#bs-example-modal-lg">Tambah Tipe</button>
                        <h4 class="card-title">Data tipe Sistem Kalibrasi</h4>
                        <div class="table-responsive">
                            <table id="default_order" class="table table-striped table-bordered display no-wrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th style="width: 5%;"></th>
                                        <th><small><b>Nama Tipe</small></b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($type as $data) {
                                    ?>
                                        <tr>
                                            <td>
                                                <div class="btn-group dropright">
                                                    <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <!-- Dropdown menu links -->
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal<?php echo $data['id_type']; ?>">Edit</a>
                                                        <a class=" dropdown-item" href="#" onClick="confirm_modal('delete-type/<?php echo  $data['id_type']; ?>');">Hapus</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><small><?= $data['nama_type'] ?></small></td>
                                            <div class="modal fade" id="modal<?= $data['id_type'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myLargeModalLabel">Edit Data</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="post" action="<?= base_url('edit-type') ?>">
                                                                <div class="form-group">
                                                                    <small id="name1" class="badge badge-default badge-info form-text text-white float-left">Nama Tipe</small>
                                                                    <input type="text" name="name" value="<?= $data['nama_type'] ?>" class="form-control" id="nametext" aria-describedby="name" required>
                                                                    <input type="text" name="id" value="<?= $data['id_type'] ?>" class="form-control" id="nametext" aria-describedby="name" hidden>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                                                    <input type="submit" class="btn btn-primary" value="Simpan Data">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
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
include('modal_add_tipe.php');
?>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->