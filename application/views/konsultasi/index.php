<div class="container py-3">
    <div class="card border-0 shadow">
        <h5 class="card-header bg-success text-light">Konsultasi Tanaman Kedelai</h5>

        <div class="card-body">
            <?php if ($this->session->flashdata('alert')) : ?>
                <?= $this->session->flashdata('alert'); ?>
            <?php endif; ?>
            <div class="row">
                <div class="col-6">
                    <img src="<?= base_url('assets/img/gambar1.jpg'); ?>" class="img-fluid rounded">
                </div>
                <div class="col-6">
                    <?= form_open_multipart('konsultasi'); ?>
                    <div class="form-group">
                        <label for="nama"><i class="fas fa-fw fa-user mr-1"></i>Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= set_value('nama'); ?>">
                        <small class="text-form text-danger"><?= form_error('nama'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="image"><i class="fas fa-fw fa-file-image mr-1"></i>Gambar Tanaman</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image" name="image" value="<?= set_value('image'); ?>">
                            <label class="custom-file-label" for="image">Pilih Berkas Gambar</label>
                            <small class="text-form text-muted">Ukuran maksimal berkas: 5MB</small>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success"><i class="fas fa-fw fa-upload mr-1"></i>Kirim Gambar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>