<div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url('add-user') ?>">
                    <div class="form-group">
                        <small id="name1" class="badge badge-default badge-info form-text text-white float-left">Nama Lengkap</small>
                        <input type="text" name="name" class="form-control" id="nametext" aria-describedby="name" required>
                    </div>
                    <div class="form-group">
                        <small id="name1" class="badge badge-default badge-info form-text text-white float-left">Username</small>
                        <input type="text" name="username" class="form-control" id="nametext" aria-describedby="name" required>
                    </div>
                    <div class="form-group">
                        <small id="name1" class="badge badge-default badge-info form-text text-white float-left">Password</small>
                        <input type="password" name="password" class="form-control" id="nametext" aria-describedby="name" required>
                    </div>
                    <div class="form-group">
                        <small id="name1" class="badge badge-default badge-info form-text text-white float-left">Email</small>
                        <input type="email" name="email" class="form-control" id="nametext" aria-describedby="name" required>
                    </div>
                    <div class="form-group">
                        <small id="name1" class="badge badge-default badge-info form-text text-white float-left">No Hp</small>
                        <input type="number" name="phone" class="form-control" id="nametext" aria-describedby="name" required>
                    </div>
                    <div class="form-group">
                        <small id="name1" class="badge badge-default badge-info form-text text-white float-left">Divisi</small>
                        <select class="form-control" id="exampleFormControlSelect1" name="divition" required>
                            <option value="Tanpa Divisi">Tanpa Divisi</option>
                            <?php
                            $no = 1;
                            foreach ($divisi as $datadivisi) {
                            ?>
                                <option value="<?= $datadivisi['id_divisi'] ?>"><?= $datadivisi['nama_divisi'] ?></option>
                            <?php  } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <small id="name1" class="badge badge-default badge-info form-text text-white float-left">Role User</small>
                        <select class="form-control" id="exampleFormControlSelect1" name="role" required>
                            <option value="Member">Member</option>
                            <option value="Admin">Admin</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <small id="name1" class="badge badge-default badge-info form-text text-white float-left">Keaktifan Akun</small>
                        <select class="form-control" id="exampleFormControlSelect1" name="account" required>
                            <option value="Aktif">Aktif</option>
                            <option value="Tidak Aktif">Tidak Aktif</option>
                        </select>
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