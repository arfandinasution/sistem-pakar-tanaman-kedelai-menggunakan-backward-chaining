<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card border-0 shadow mt-5">
                <h5 class="card-header bg-success text-light">Silahkan Isi Untuk Melanjutkan Konsultasi</h5>
                <div class="card-body">
                    <?php if ($this->session->flashdata('alert')) : ?>
                        <?= $this->session->flashdata('alert'); ?>
                    <?php endif; ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="no_hp">Nomor Handphone</label>
                            <input type="text" class="form-control" id="no_hp" name="no_hp">
                            <small class="form-text text-danger"><?= form_error('no_hp'); ?></small>
                        </div>
                        <button type="submit" class="btn btn-success btn-block"><i class="fas fa-fw fa-sign-in-alt mr-1"></i>Lanjutkan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>