<div class="modal fade bs-example-modal-lg" id="modal-upload<?= $data['id_pengajuan'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Upload Dokumen</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <?= form_open_multipart(base_url('upload-file')); ?>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Nama Dokumen</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" value="">
                                <input type="text" class="form-control" name="id" value="<?= $data['id_pengajuan'] ?>" hidden>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2">File</div>
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" name="image">
                                            <label class="custom-file-label" for="image">Pilih file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
</script>