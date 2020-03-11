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
                        <h5 class="card-title">Nama Hama</h5>
                        <p class="card-text"><?= $konsultasi['nama']; ?></p>
                        <hr>
                        <h5 class="card-title">Pengendalian</h5>
                        <p class="card-text"><?= $konsultasi['pengendalian']; ?></p>
                        <hr>
                        <h5 class="card-title">Penanggulan</h5>
                        <?php if ($konsultasi['penanggulangan']) : ?>
                            <p class="card-text"><?= $konsultasi['penanggulangan']; ?></p>
                        <?php else : ?>
                            <p class="card-text">-</p>
                        <?php endif; ?>
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
                    <h4 class="alert-heading">Data Kamu telah dikirim.</h4>
                    <hr>
                    <p>Mohon tunggu beberapa menit untuk hasil konsultasi tanaman kedelai mu. kamu bisa mencoba memuat halaman kembali untuk mendapatkan hasil konsultasimu</p>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>