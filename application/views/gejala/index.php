<div class="card">
    <h5 class="card-header">Gejala Hama & Penyakit</h5>
    <div class="card-body">
        <ul class="list-group list-group-flush">
            <?php foreach ($hama_penyakit as $row) : ?>
                <a href="<?= base_url('gejala/detail/' . $row['kode']); ?>" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    <div>
                        <span class="badge badge-secondary"><?= $row['kode']; ?></span>
                        <?= $row['nama_hamapenyakit']; ?>
                    </div>
                    <span>Lihat Gejala<i class="fas fa-chevron-right ml-1"></i></span>
                </a>
            <?php endforeach; ?>
        </ul>
    </div>
</div>