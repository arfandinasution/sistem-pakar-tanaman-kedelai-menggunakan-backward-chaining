<div class="card">
    <h5 class="card-header d-flex justify-content-between align-items-center">
        <a href="<?= base_url('kategori'); ?>" class="btn btn-secondary rounded-circle mr-3"><i class="fas fa-arrow-left"></i></a>
        Kategori <?= $kategori['nama_kategori']; ?>
        <a href="<?= base_url('kategori/hapus/' . $kategori['kode']); ?>" class="btn btn-danger"><i class="fas fa-trash mr-1"></i>Hapus Kategori</a>
    </h5>
    <div class="card-body">
        <?php if ($hama_penyakit) : ?>
            <ul class="list-group list-group-flush">
                <?php foreach ($hama_penyakit as $row) : ?>
                    <li class="list-group-item">
                        <span class="badge badge-secondary"><?= $row['kode']; ?></span>
                        <?= $row['nama_hamapenyakit']; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else : ?>
            <div class="alert alert-info" role="alert">
                <i class="fas fa-info-circle mr-1"></i>Data kategori <?= $kategori['nama_kategori']; ?> tidak ada.
            </div>
        <?php endif; ?>
    </div>
</div>