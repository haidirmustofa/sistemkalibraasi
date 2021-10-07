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
        <!-- basic table -->
        <!-- <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-3 col-xlg-3">
                                <div class="card card-hover">
                                    <div class="p-2 bg-primary text-center">
                                        <h1 class="font-light text-white">
                                            <?= $bp ?>
                                        </h1>
                                        <h6 class="text-white">Baik Pakai</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 col-xlg-3">
                                <div class="card card-hover">
                                    <div class="p-2 bg-cyan text-center">
                                        <h1 class="font-light text-white">
                                            <?= $bt ?>
                                        </h1>
                                        <h6 class="text-white">Baik Tidak Dipakai</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 col-xlg-3">
                                <div class="card card-hover">
                                    <div class="p-2 bg-success text-center">
                                        <h1 class="font-light text-white">
                                            <?= $rr ?>
                                        </h1>
                                        <h6 class="text-white">Rusak Ringan</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 col-xlg-3">
                                <div class="card card-hover">
                                    <div class="p-2 bg-danger text-center">
                                        <h1 class="font-light text-white">
                                            <?= $rb ?>
                                        </h1>
                                        <h6 class="text-white">Rusak Berat</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <?= $this->session->flashdata('message'); ?>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Alat Kalibrasi</h4>
                        <div class="table-responsive">
                            <table id="default_order" class="table table-striped table-bordered display no-wrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th><small><b>Nama</small></b></th>
                                        <th><small><b>No Seri</small></b></th>
                                        <th><small><b>Tipe</small></b></th>
                                        <th><small><b>Merek</small></b></th>
                                        <th><small><b>Interval</small></b></th>
                                        <th><small><b>Kalibrasi Terahir</small></b></th>
                                        <th><small><b>Kalibrasi Selanjutnya</small></b></th>
                                        <th><small><b>Keterangan</small></b></th>
                                        <th><small><b>Kondisi</small></b></th>
                                        <th><small><b>Divisi</small></b></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($alat as $data) {
                                        if ($data['waktu_kalibrasi_alat'] != null) {
                                            $tanggal = $data['waktu_kalibrasi_alat'];
                                            $pecah_tgl = explode("-", $tanggal);
                                            $thn = $pecah_tgl[0];
                                            $bln = $pecah_tgl[1];
                                            $tgl = $pecah_tgl[2];
                                            $nextkalibrasi = $thn + $data['interval_kalibrasi_alat'];
                                            $newkalibrasi = $nextkalibrasi . '-' . $bln . '-' . $tgl;
                                            $date1 = date_create($newkalibrasi);
                                            $date2 = date_create();
                                            $diff = date_diff($date1, $date2);
                                        } else {
                                            $newkalibrasi = null;
                                        }
                                    ?>
                                        <tr>
                                            <td>
                                                <div class="btn-group dropright">
                                                    <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal<?php echo $data['id_alat']; ?>">Edit</a>
                                                        <a class=" dropdown-item" href="#" onClick="confirm_modal('delete-alat/<?php echo  $data['id_alat']; ?>');">Hapus</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><small><?= $data['nama_alat'] ?></small></td>
                                            <td><small><?= $data['no_seri_alat'] ?></small></td>
                                            <td><small><?= $data['type_alat'] ?></small></td>
                                            <td><small><?= $data['merek_alat'] ?></small></td>
                                            <td><small><?= $data['interval_kalibrasi_alat'] ?> Tahun</small></td>
                                            <td><small><?= $data['waktu_kalibrasi_alat'] ?></small></td>
                                            <td><small><?= $newkalibrasi ?>
                                                    <br>
                                                    <?php
                                                    if ($newkalibrasi != null) {
                                                        echo $diff->format("%R%a Hari");
                                                    }
                                                    ?>
                                                </small></td>
                                            <td><small><?= $data['keterangan_alat'] ?></small></td>
                                            <td><small><?= $data['kondisi_alat'] ?></small></td>
                                            <td><small><?= $data['divisi'] ?></small></td>
                                        </tr>
                                        <div class="modal fade" id="modal<?= $data['id_alat'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myLargeModalLabel">Edit Data</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post" action="<?= base_url('edit-alat') ?>">
                                                            <div class="form-group">
                                                                <small id="name1" class="badge badge-default badge-info form-text text-white float-left">Nama Alat</small>
                                                                <input type="text" name="name" value="<?= $data['nama_alat'] ?>" class="form-control" id="nametext" readonly required>
                                                                <input type="text" name="id" value="<?= $data['id_alat'] ?>" class="form-control" id="nametext" aria-describedby="name" hidden>
                                                            </div>
                                                            <div class="form-group">
                                                                <small id="name1" class="badge badge-default badge-info form-text text-white float-left">No Seri</small>
                                                                <input type="text" name="no_seri" class="form-control" value="<?= $data['no_seri_alat'] ?>" id="nametext" readonly required>
                                                            </div>
                                                            <div class="form-group">
                                                                <small id="name1" class="badge badge-default badge-info form-text text-white float-left">Tipe</small>
                                                                <input type="text" name="tipe" class="form-control" value="<?= $data['type_alat'] ?>" id="nametext" readonly required>
                                                            </div>
                                                            <div class="form-group">
                                                                <small id="name1" class="badge badge-default badge-info form-text text-white float-left">Merek Alat</small>
                                                                <input type="text" class="form-control" value="<?= $data['merek_alat'] ?>" id="nametext" readonly name="merek" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <small id="name1" class="badge badge-default badge-info form-text text-white float-left">Kondisi Alat</small>
                                                                <input type="text" class="form-control" id="nametext" readonly value="<?= $data['kondisi_alat'] ?>" name="kondisi" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <small id="name1" class="badge badge-default badge-info form-text text-white float-left">Divisi / Unit Kerja</small>
                                                                <input type="text" class="form-control" id="nametext" readonly value="<?= $data['divisi'] ?>" name="divisi" required>
                                                            </div>
                                                            <!-- <div class="form-group">
                                                                <small id="name1" class="badge badge-default badge-info form-text text-white float-left">Divisi</small>
                                                                <select class="form-control" id="exampleFormControlSelect1" name="divisi" required>
                                                                    <?php
                                                                    $no = 1;
                                                                    foreach ($divisi as $datadivisi) {
                                                                    ?>
                                                                        <option <?php echo ($datadivisi['id_divisi'] == $data['divisi']) ? 'selected' : ''; ?> value="<?= $datadivisi['id_divisi'] ?>"><?= $datadivisi['nama_divisi'] ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div> -->
                                                            <div class="form-group">
                                                                <small id="name1" class="badge badge-default badge-info form-text text-white float-left">Interval Kalibrasi</small>
                                                                <input type="number" min="0" class="form-control" value="<?= $data['interval_kalibrasi_alat'] ?>" id="nametext" name="interval" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <small id="name1" class="badge badge-default badge-info form-text text-white float-left">Kalibrasi Terahir</small>
                                                                <input type="date" class="form-control" id="nametext" value="<?= $data['waktu_kalibrasi_alat'] ?>" name="kalibrasi_terakhir" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <small id="name1" class="badge badge-default badge-info form-text text-white float-left">Keterangan</small>
                                                                <input type="text" class="form-control" id="nametext" value="<?= $data['keterangan_alat'] ?>" name="keterangan" required>
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
include('modal_add_alat.php');
?>
<div id="konfirmasi" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="dark-header-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-colored-header bg-dark">
                <h4 class="modal-title" id="dark-header-modalLabel">Konfirmasi</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <h5 class="mt-0">Apakah anda ingin update data ?</h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
                <a href="<?= base_url('update-alat') ?>" type="button" class="btn btn-dark">Update</a>
            </div>
        </div>
    </div>
</div>