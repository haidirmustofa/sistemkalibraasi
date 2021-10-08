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
        <form method="post" action="<?= base_url('add-pengajuan-alat') ?>">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <input type="submit" class="btn btn-danger mb-5 float-right" value="Simpan dan Buat Pengajuan">
                            <h4 class="card-title">Pilih Alat yang ingin dikalibrasi</h4>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered no-wrap">
                                    <thead class="bg-primary text-white">
                                        <tr>
                                            <th>#</th>
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
                                        $no = 0;
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
                                                    <input type="checkbox" name="alat[]" value="<?= $data['id_alat'] ?>">
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
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>

        </form>
    </div>
</div>
</div>
</div>
</div>
</div>