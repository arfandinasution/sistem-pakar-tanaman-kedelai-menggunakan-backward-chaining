<div class="container py-3">
    <div class="card border-0 shadow">
        <h5 class="card-header bg-success text-light d-flex justify-content-between align-items-center">
            Hasil Diagnosis
            <?php if ($hasil) : ?>
                <a href="<?= base_url('diagnosis'); ?>" class="btn btn-outline-light"><i class="fas fa-check mr-1"></i>Selesai</a>
            <?php else : ?>
                <a href="<?= base_url('diagnosis'); ?>" class="btn btn-outline-light"><i class="fas fa-undo mr-1"></i>Diagnosis Kembali</a>
            <?php endif; ?>
        </h5>

        <div class="card-body">
            <?php if ($hasil) : ?>
                <h5 class="card-title">Nama Hama & Penyakit</h5>
                <p class="card-text"><?= $hasil['nama_hamapenyakit']; ?></p>
                <hr>
                <h5 class="card-title">Kategori Hama & Penyakit</h5>
                <p class="card-text"><?= $hasil['nama_kategori']; ?></p>
                <hr>
                <h5 class="card-title">Pengendalian</h5>
                <p class="card-text"><?= $hasil['pengendalian']; ?></p>
                <hr>
                <h5 class="card-title">Penanggulangan</h5>
                <p class="card-text"><?= $hasil['pengendalian']; ?></p>
            <?php else : ?>
                <div class="alert alert-info" role="alert">
                    <i class="fas fa-info-circle mr-1"></i>Hasil diagnosis tidak menemukan hama & penyakit yang cocok.
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>