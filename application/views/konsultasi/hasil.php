<?php if (!$konsultasi) : ?>
    <meta http-equiv="refresh" content="3" />
<?php endif; ?>
<div class="container py-5">
    <div class="card border-0 shadow">
        <h5 class="card-header bg-success text-light">Hasil Konsultasi Tanaman Kedelai</h5>

        <?php if ($konsultasi) : ?>
            <div class="card-body">
                <div class="card">
                    <img src="<?= base_url('assets/img/konsultasi/' . $konsultasi['gambar']); ?>" class="card-img-top">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <h5 class="mb-0">Nama Hama</h5>
                            </div>
                            <div class="col-6">
                                <?= $konsultasi['nama_hamapenyakit']; ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-6">
                                <h5 class="mb-0">Kategori</h5>
                            </div>
                            <div class="col-6">
                                <?= $konsultasi['nama_kategori']; ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-6">
                                <h5 class="mb-0">Pengendalian Hama</h5>
                            </div>
                            <div class="col-6">
                                <?= $konsultasi['pengendalian']; ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-6">
                                <h5 class="mb-0">Penanggulan Hama</h5>
                            </div>
                            <div class="col-6">
                                <?php if ($konsultasi['penanggulangan']) : ?>
                                    <?= $konsultasi['penanggulangan']; ?>
                                <?php else : ?>
                                    Tidak ada
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer d-flex justify-content-between align-items-center">
                <a href="<?= base_url('konsultasi/selesai'); ?>" class="btn btn-secondary btn-block mr-3"><i class="fas fa-fw fa-undo mr-1"></i>Konsultasi Kembali</a>
                <a href="<?= base_url('konsultasi/selesai'); ?>" class="btn btn-success btn-block mt-0"><i class="fas fa-fw fa-check mr-1"></i>Selesai</a>
            </div>
        <?php else : ?>
            <div class="card-body">
                <div class="alert alert-success mb-0" role="alert">
                    <h4 class="alert-heading"><i class="fas fa-check-circle mr-1"></i>Data konsultasimu telah dikirim.</h4>
                    <hr>
                    <p><strong>Jangan menutup halaman ini!</strong></p>
                    <p>
                        Mohon tunggu beberapa menit untuk hasil konsultasi tanaman kedelai yang kamu kirim.
                        <br>
                        Halaman akan dimuat secara otomatis.
                    </p>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>